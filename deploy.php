<?php
namespace Deployer;

require 'recipe/symfony4.php';

// ---------------------------------------------------------------------------
// Général
// ---------------------------------------------------------------------------

// Nombre de releases conservées (rollback possible sur les 3 dernières)
set('keep_releases', 3);

// Nom du projet
set('application', 'api.amelayes-biophp.net');

// Dépôt Git
set('repository', 'https://github.com/amelaye/bioapi.git');

// ---------------------------------------------------------------------------
// Permissions / sécurité
// ---------------------------------------------------------------------------

// CHANGÉ : le serveur web réel est www-data (pool php-fpm), pas "deploy".
// C'est lui qui doit pouvoir écrire dans var/.
set('http_user', 'www-data');

// CHANGÉ : "acl" au lieu de "chown" — pose des ACL ciblées pour www-data
// sans changer le propriétaire ni ouvrir les droits à tout le monde.
// (Nécessite le paquet "acl" installé sur le serveur : voir note en bas.)
set('writable_mode', 'acl');

// CHANGÉ : on retire le 0777. En mode acl, writable_chmod_mode n'est plus
// utilisé pour ouvrir grand ; les ACL gèrent l'écriture proprement.
// (On ne définit plus writable_chmod_mode => plus de 0777 baladeur.)

// Sudo encore nécessaire pour poser les ACL pendant le déploiement.
// NOTE SÉCURITÉ : c'est ce sudo qu'on restreindra ensuite via
// /etc/sudoers.d/deploy, une fois qu'on aura observé un déploiement.
set('writable_use_sudo', true);

// Allocation d'un tty pour git clone
set('git_tty', true);

set('ssh_multiplexing', false);
set('ssh_type', 'native');


// ---------------------------------------------------------------------------
// Fichiers / dossiers partagés entre les releases
// ---------------------------------------------------------------------------

// Fichiers partagés : le .env vit dans shared/ et est symliké dans chaque release.
add('shared_files', ['.env']);

// CHANGÉ : les logs et sessions doivent PERSISTER entre les déploiements.
// Sans ça, chaque release repart avec des var/log et var/sessions vides.
add('shared_dirs', [
    'var/log',
    'var/sessions',
]);

// ---------------------------------------------------------------------------
// Dossiers inscriptibles par le serveur web
// ---------------------------------------------------------------------------

// CHANGÉ : ajout de var/log (PHP y écrit aussi). var/sessions est en shared,
// il sera inscriptible via son propre dossier partagé.
add('writable_dirs', [
    'var/cache',
    'var/log',
    'var/sessions',
]);

// ---------------------------------------------------------------------------
// Hôtes
// ---------------------------------------------------------------------------

// CHANGÉ : hostname aligné sur le vrai domaine du projet (au lieu de
// amelieonline.net, qui prêtait à confusion). Les deux résolvent vers la
// même IP, mais autant que ce soit lisible.
// NOTE : la branche 'develop' est conservée telle quelle — à confirmer si
// tu veux plutôt déployer 'master'/'main'.
host('bioapi-prod')
    ->set('deploy_path', '/home/web/{{application}}')
    ->set('branch', 'develop')
    ->stage('prod');

// ---------------------------------------------------------------------------
// Tâches
// ---------------------------------------------------------------------------

task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);

// Si le déploiement échoue, on déverrouille automatiquement.
after('deploy:failed', 'deploy:unlock');

// Migration de la base avant de basculer le symlink sur la nouvelle release.
before('deploy:symlink', 'database:migrate');