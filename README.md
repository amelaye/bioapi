# BioAPI

BioAPI est l'API de données biologiques du projet [Amelaye BioPHP](https://github.com/amelaye/biophp). Elle centralise des référentiels utilisés pour analyser des séquences d'ADN, d'ARN et de protéines : acides aminés, nucléotides, codons, enzymes de restriction, masses moléculaires, constantes pK, matrice PAM250 et paramètres thermodynamiques.

L'API publique est disponible à l'adresse suivante :

<https://api.amelayes-biophp.net>

Sa documentation OpenAPI/Swagger est exposée sur :

<https://api.amelayes-biophp.net/docs>

## Pourquoi ce projet existe

La bibliothèque [amelaye/biophp](https://github.com/amelaye/biophp) contient les algorithmes de bio-informatique : manipulation de séquences, calcul de masses protéiques, complémentarité ADN/ARN, recherche de motifs et analyse d'enzymes de restriction.

BioAPI sépare les données de référence de ces algorithmes. Au lieu d'embarquer toutes les tables biologiques dans la bibliothèque, `biophp` les récupère par HTTP :

```text
Base MySQL
  -> Doctrine ORM
  -> BioAPI / API Platform
  -> JSON-LD/Hydra
  -> adaptateurs et DTO de amelaye/biophp
  -> algorithmes de bio-informatique
```

Cette séparation permet notamment :

- de maintenir les référentiels biologiques indépendamment du code de calcul ;
- d'utiliser les mêmes données depuis plusieurs applications ;
- de consulter les ressources directement par HTTP ;
- de conserver une interface stable pour le projet historique BioPHP.

## Contenu biologique

L'API expose actuellement 14 ressources en lecture seule.

| Ressource | Endpoint | Contenu |
|---|---|---|
| Acides aminés | `/aminos` | noms, codes à une et trois lettres, masses moléculaires et masses des résidus |
| Éléments | `/elements` | éléments ou molécules utiles aux calculs, avec leur masse |
| Nucléotides | `/nucleotids` | bases DNA/RNA, compléments et masses |
| Constantes pK | `/p_ks` | valeurs terminales et latérales utilisées pour les protéines |
| Matrice PAM250 | `/pam250_matrix_digits` | scores de substitution entre acides aminés |
| Réductions protéiques | `/protein_reductions` | alphabets réduits, motifs et descriptions |
| Base stacking | `/tm_base_stackings` | valeurs d'enthalpie et d'entropie utilisées dans les calculs thermiques |
| Triplets | `/triplets` | liste des codons |
| Triplets par espèce | `/triplet_species` | associations et groupes de codons par espèce ou nature |
| Endonucléases type II | `/type_i_i_endonucleases` | motifs de reconnaissance et positions de coupure |
| Endonucléases type IIb | `/type_i_ib_endonucleases` | motifs de reconnaissance et positions de coupure |
| Endonucléases type IIs | `/type_i_is_endonucleases` | motifs de reconnaissance et positions de coupure |
| Fournisseurs | `/vendors` | codes et noms de fournisseurs |
| Liens fournisseurs | `/vendor_links` | noms et liens externes associés aux fournisseurs |

Chaque collection possède également une route item, par exemple `/aminos/A` ou `/elements/6`.

Les données de référence sont définies dans [`src/DataFixtures`](src/DataFixtures). Elles font partie du comportement métier du projet : leurs identifiants et leurs valeurs ne doivent pas être modifiés comme de simples données de démonstration.

## Format des réponses

API Platform expose les données en JSON-LD/Hydra. Exemple de requête :

```bash
curl -H 'Accept: application/ld+json' \
  https://api.amelayes-biophp.net/aminos
```

Une réponse de collection a cette structure générale :

```json
{
  "@context": "/contexts/Amino",
  "@id": "/aminos",
  "@type": "hydra:Collection",
  "hydra:totalItems": 26,
  "hydra:member": [
    {
      "@id": "/aminos/A",
      "@type": "Amino",
      "id": "A",
      "name": "Alanine",
      "name1Letter": "A",
      "name3Letters": "Ala",
      "weight1": 89.09,
      "weight2": 89.09,
      "residueMolWeight": 71.07
    }
  ]
}
```

La pagination est volontairement désactivée. La bibliothèque `biophp` lit directement la totalité de `hydra:member` et dépend des noms de propriétés en camelCase. Les routes et la forme JSON-LD constituent donc un contrat public de compatibilité.

## Version de l'API

La version publique actuelle est **1.0.0**. Elle est déclarée dans les métadonnées OpenAPI/Swagger et renvoyée sur toutes les réponses HTTP :

```http
X-API-Version: 1.0.0
```

La version ne fait volontairement pas partie des URLs : les endpoints restent `/aminos`, `/elements`, etc. Cela préserve la compatibilité avec la bibliothèque historique `amelaye/biophp`.

Le titre, la description et la version peuvent être modifiés sans changer le code :

```dotenv
API_TITLE='Amelaye BioAPI'
API_DESCRIPTION='Biological reference data for the Amelaye BioPHP ecosystem'
API_VERSION='1.0.0'
```

Pour vérifier la version active :

```bash
curl -I https://api.amelayes-biophp.net/aminos
```

## Stack technique

- PHP 8.4 minimum pour le jeu de dépendances actuellement utilisé ;
- Symfony 6.4 LTS ;
- API Platform 3 ;
- Doctrine ORM 3 et DBAL 4 ;
- MySQL 5.7 ou compatible, avec support du type JSON ;
- Nelmio CORS Bundle ;
- Deployer 7 pour la production.

`composer.json` accepte encore PHP `^8.2`, mais certaines dépendances actuellement résolues requièrent PHP 8.4. PHP 8.5 est utilisé sur l'environnement de production actuel.

## Installation locale

### Prérequis

- PHP >= 8.4 avec PDO MySQL, Ctype, Iconv et JSON ;
- Composer ;
- un serveur MySQL accessible localement.

Cloner le dépôt et installer les dépendances :

```bash
git clone https://github.com/amelaye/bioapi.git
cd bioapi
composer install
```

Créer un fichier `.env.local` afin de ne pas modifier la configuration suivie par Git :

```dotenv
APP_ENV=dev
APP_SECRET=change-me
API_TITLE='Amelaye BioAPI'
API_DESCRIPTION='Biological reference data for the Amelaye BioPHP ecosystem'
API_VERSION='1.0.0'
DATABASE_URL="mysql://bioapi:password@127.0.0.1:3306/bioapi?serverVersion=5.7&charset=utf8mb4"
CORS_ALLOW_ORIGIN='^https?://localhost(:[0-9]+)?$'
```

Ne jamais placer les identifiants de production dans un fichier commité.

### Initialiser une nouvelle base

L'historique complet de création du schéma n'est plus présent dans les migrations suivies. Pour une base locale neuve, créer le schéma depuis les mappings Doctrine avant d'exécuter les migrations restantes :

```bash
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:schema:create
php bin/console doctrine:migrations:migrate --no-interaction
php bin/console doctrine:fixtures:load --no-interaction
```

La dernière commande purge la base avant de charger les fixtures. Elle ne doit jamais être lancée en production sans sauvegarde et décision explicite.

Pour une base existante, ne pas recréer le schéma :

```bash
php bin/console doctrine:migrations:migrate --no-interaction
```

### Lancer le serveur

Pour un test local simple :

```bash
php -S 127.0.0.1:8000 -t public public/index.php
```

Puis ouvrir :

- <http://127.0.0.1:8000/docs> pour la documentation ;
- <http://127.0.0.1:8000/aminos> pour une première collection ;
- <http://127.0.0.1:8000/elements/6> pour une ressource individuelle.

## Intégration avec `amelaye/biophp`

Le dépôt `amelaye/biophp` contient un adaptateur par ressource dans son dossier `Api/`. Ces classes utilisent Guzzle et JMS Serializer pour convertir les réponses Hydra en DTO, ensuite injectés dans les services de calcul.

Exemples de dépendances fonctionnelles :

- `SequenceManager` récupère les acides aminés, les nucléotides et l'élément d'identifiant 6 représentant l'eau ;
- `ProteinManager` utilise `/aminos` pour calculer les masses moléculaires ;
- `RestrictionEnzymeManager` utilise les endonucléases de type II pour construire sa base de motifs de restriction ;
- les adaptateurs de matrice, pK, codons et réductions protéiques transforment les collections de l'API en tableaux optimisés pour les calculs.

Une modification de route, de nom de propriété, de format de collection ou d'identifiant stable doit être coordonnée avec le dépôt `amelaye/biophp`.

## Développement et vérifications

Il n'existe actuellement aucune suite de tests automatisés dans ce dépôt. Après une modification, effectuer au minimum les contrôles suivants :

```bash
php bin/console lint:yaml config
php bin/console doctrine:mapping:info
php bin/console debug:router
git diff --check
```

Pour un fichier PHP modifié :

```bash
php -l src/Entity/Amino.php
```

Tester ensuite les endpoints concernés avec l'en-tête `Accept: application/ld+json` et vérifier la présence de `hydra:member` pour les collections.

## Migrations et schéma historique

Le schéma de production existe depuis les premières versions du projet sous Doctrine 2. Il contient quelques noms physiques historiques qui doivent être conservés explicitement dans les mappings modernes, notamment :

- `amino.name1letter` et `amino.name3letters` ;
- la table `pam250matrix_digit`.

La migration `Version20260807140000` convertit plusieurs anciennes colonnes Doctrine `array`, stockées sous forme sérialisée, vers le type JSON. Elle est conçue pour pouvoir reprendre après une exécution MySQL partielle.

Pour toute nouvelle évolution :

- créer une migration dans `src/Migrations` ;
- inspecter le schéma réel avant de renommer une table ou une colonne ;
- ne jamais utiliser `doctrine:schema:update --force` en production ;
- prévoir une reprise sûre pour les migrations mêlant DDL et transformation de données.

## Déploiement

La production est déployée avec Deployer depuis la branche `develop` :

```bash
./vendor/bin/dep deploy bioapi-prod
```

Le déploiement :

1. clone `https://github.com/amelaye/bioapi.git` ;
2. installe les dépendances ;
3. vide le cache ;
4. exécute les migrations avant le changement de symlink ;
5. publie la nouvelle release ;
6. réchauffe le cache de production.

Le serveur conserve trois releases. Le `.env`, les logs et les sessions sont partagés sous `/home/web/api.amelayes-biophp.net/shared/`.

Les logs Symfony de production sont disponibles ici :

```text
/home/web/api.amelayes-biophp.net/shared/var/log/prod.log
```

PHP CLI et le runtime PHP d'Apache ou PHP-FPM sont indépendants. Après une mise à niveau de PHP, vérifier les deux environnements.

## État et limites actuelles

- L'API est publique et en lecture seule.
- La version courante est exposée par OpenAPI et par le header `X-API-Version`, sans préfixe dans les URLs.
- Le header Swagger `X-AUTH-TOKEN` est documenté mais n'est pas validé par un authenticator.
- La pagination est désactivée pour préserver la compatibilité avec `biophp`.
- `.travis.yml` est vide et aucun test automatisé n'est présent.
- `composer.lock` et `symfony.lock` ne sont actuellement pas suivis par Git, donc les installations ne sont pas totalement reproductibles.
- Le package consommateur `amelaye/biophp` reste un projet historique en cours de modernisation.

Les instructions plus détaillées destinées aux assistants de développement se trouvent dans [`CLAUDE.md`](CLAUDE.md).

## Licence

Le dépôt est déclaré `proprietary` dans `composer.json`. La bibliothèque distincte `amelaye/biophp` conserve sa propre licence GPL-2.0.
