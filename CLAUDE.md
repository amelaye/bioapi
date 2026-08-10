# CLAUDE.md

Ce fichier décrit le dépôt pour les assistants de développement qui interviennent sur le projet. Il faut le tenir à jour lorsque l'architecture, le contrat HTTP ou le déploiement changent.

## Vue d'ensemble

`bioapi` est l'API de données biologiques du projet Amelaye BioPHP.

- Dépôt courant : <https://github.com/amelaye/bioapi>
- API de production : <https://api.amelayes-biophp.net>
- Bibliothèque consommatrice : <https://github.com/amelaye/biophp>
- Branche déployée en production : `develop`
- Cible Deployer : `bioapi-prod`

Le dépôt expose une base MySQL en lecture seule par l'intermédiaire de Symfony, Doctrine ORM et API Platform. Il contient surtout des entités Doctrine et les fixtures qui constituent le référentiel biologique. Il n'y a actuellement ni contrôleur métier, ni repository personnalisé, ni tests automatisés dans ce dépôt.

Le sens de l'intégration est le suivant :

```text
MySQL
  -> entités Doctrine de bioapi
  -> API Platform (JSON-LD/Hydra)
  -> HTTPS api.amelayes-biophp.net
  -> adaptateurs Guzzle de amelaye/biophp
  -> DTO BioPHP
  -> services de calcul biologique BioPHP
```

`bioapi` ne dépend pas directement du package Composer `amelaye/biophp`. Les deux dépôts sont découplés au niveau du code et couplés par le contrat HTTP/JSON-LD.

La version courante est `1.0.0`. Elle est publiée dans OpenAPI et dans le header `X-API-Version`. Les URLs ne sont pas préfixées par une version afin de conserver le contrat historique avec `biophp`.

## Stack et versions

- PHP : `composer.json` annonce `^8.2`, mais le jeu de dépendances actuellement résolu contient `doctrine/instantiator 2.1.0`, qui requiert PHP `^8.4`. La production utilise PHP 8.5 ; conserver au minimum PHP 8.4 tant que les dépendances ne sont pas recalculées.
- Symfony 6.4 LTS.
- API Platform 3.4+.
- Doctrine ORM 3.6+ et DBAL 4.
- MySQL configuré comme version serveur 5.7, en `utf8mb4` / `utf8mb4_unicode_ci`.
- Deployer 7.5+ est installé comme dépendance de développement.

Attention : `composer.lock` et `symfony.lock` existent localement mais sont ignorés par `.gitignore` et ne sont pas suivis par Git. Les installations sur une nouvelle release ne sont donc pas strictement reproductibles et peuvent sélectionner de nouvelles versions compatibles. Ne pas lancer une mise à jour globale des dépendances sans examiner les exigences PHP et les changements Doctrine/API Platform.

## Organisation du dépôt

```text
config/
  packages/                 configuration Symfony, Doctrine, API Platform et CORS
  routes/api_platform.yaml  montage de toutes les routes API à la racine
public/index.php            front controller
src/
  Entity/                   14 ressources Doctrine/API Platform
  DataFixtures/             référentiel biologique initial
  Migrations/               migrations Doctrine actives
  Kernel.php                kernel Symfony
deploy.php                  déploiement Deployer vers la production
```

Le dossier racine `migrations/` n'est pas utilisé par la configuration actuelle. Les migrations actives vivent dans `src/Migrations/` sous le namespace `DoctrineMigrations`.

## Modèle API

Chaque classe de `src/Entity` est une `ApiResource` avec uniquement `GetCollection` et `Get`. L'API est donc fonctionnellement en lecture seule, même si la configuration CORS autorise aussi des verbes d'écriture.

| Entité | Route collection | Identifiant | Données principales |
|---|---|---|---|
| `Amino` | `/aminos` | chaîne, code d'acide aminé | nom, codes 1/3 lettres, masses moléculaires |
| `Element` | `/elements` | entier auto-généré | nom, masse |
| `Nucleotid` | `/nucleotids` | entier auto-généré | lettre, complément, nature DNA/RNA, masse |
| `PK` | `/p_ks` | chaîne | constantes pK terminales et latérales |
| `Pam250MatrixDigit` | `/pam250_matrix_digits` | chaîne | valeur de matrice PAM250 |
| `ProteinReduction` | `/protein_reductions` | entier auto-généré | alphabet, lettres, motif, nature, réduction, description |
| `TmBaseStacking` | `/tm_base_stackings` | chaîne | enthalpie et entropie de stacking |
| `Triplet` | `/triplets` | entier auto-généré | codon/triplet |
| `TripletSpecie` | `/triplet_species` | entier auto-généré | espèce/nature, triplets JSON et groupes JSON |
| `TypeIIEndonuclease` | `/type_i_i_endonucleases` | chaîne | motifs et positions de coupure |
| `TypeIIbEndonuclease` | `/type_i_ib_endonucleases` | chaîne | motifs et positions de coupure |
| `TypeIIsEndonuclease` | `/type_i_is_endonucleases` | chaîne | motifs et positions de coupure |
| `Vendor` | `/vendors` | chaîne | code et nom du fournisseur |
| `VendorLink` | `/vendor_links` | chaîne | nom et URL du fournisseur |

API Platform ajoute également les routes item `/<collection>/{id}`, `/docs`, les contextes JSON-LD et le point d'entrée `/`.

La pagination des collections est désactivée globalement. Ce comportement fait partie du contrat avec `biophp`, qui lit directement la totalité de `hydra:member` et ne suit aucun lien de pagination.

## Contrat avec `amelaye/biophp`

Le dépôt public `amelaye/biophp` est une bibliothèque/bundle historique, actuellement sur Symfony 4 et PHP `^7.2` dans son propre `composer.json`. Son dossier `Api/` contient un adaptateur par ressource de cette API. Les adaptateurs utilisent Guzzle, désérialisent la réponse JSON avec JMS Serializer, parcourent `hydra:member`, puis construisent leurs DTO.

Correspondances importantes :

| Client dans `biophp` | Endpoint `bioapi` |
|---|---|
| `AminoApi` | `/aminos` |
| `ElementApi` | `/elements` et `/elements/{id}` |
| `NucleotidApi` | `/nucleotids` |
| `PKApi` | `/p_ks/{id}` |
| `Pam250MatrixDigitApi` | `/pam250_matrix_digits` |
| `ProteinReductionApi` | `/protein_reductions` |
| `TmBaseStackingApi` | `/tm_base_stackings` |
| `TripletApi` | `/triplets` |
| `TripletSpecieApi` | `/triplet_species` |
| `TypeIIEndonucleaseApi` | `/type_i_i_endonucleases` |
| `TypeIIbEndonucleaseApi` | `/type_i_ib_endonucleases` |
| `TypeIIsEndonucleaseApi` | `/type_i_is_endonucleases` |
| `VendorApi` | `/vendors` |
| `VendorLinkApi` | `/vendor_links` |

Le contrat ne se limite pas aux URLs. `biophp` accède aux clés JSON en camelCase, par exemple :

- `name1Letter`, `name3Letters`, `weight1`, `weight2`, `residueMolWeight` ;
- `tripletsGroups` ;
- `temperatureEnthalpy`, `temperatureEnthropy` ;
- `samePattern`, `recognitionPattern`, `computingPattern`, `lengthRecognitionPattern`, `cleavagePosUpper`, `cleavagePosLower`, `nbNonNBases`.

Ne pas renommer une route, un getter public ou une propriété sérialisée sans modifier et tester simultanément le dépôt `amelaye/biophp`. Ne pas activer la pagination sans adapter ses clients.

Quelques dépendances métier sont particulièrement sensibles :

- `SequenceManager` charge les acides aminés et nucléotides depuis l'API dans son constructeur et demande `/elements/6` pour représenter l'eau. L'identifiant 6 des fixtures `Element` est donc un invariant de compatibilité.
- `ProteinManager` charge `/aminos` pour calculer les masses moléculaires.
- `RestrictionEnzymeManager` charge les endonucléases de type II pour construire sa base de motifs de restriction.
- Une indisponibilité ou une réponse non Hydra de `bioapi` remonte directement dans les constructions de ces services.

Le bundle `biophp` configure encore son `base_uri` en HTTP (`http://api.amelayes-biophp.net`). La production doit continuer à accepter/rediriger proprement ce trafic, ou le dépôt consommateur doit être modernisé pour utiliser explicitement HTTPS.

## Doctrine et compatibilité du schéma historique

Doctrine utilise `doctrine.orm.naming_strategy.underscore`. La base a toutefois été créée avec d'anciennes versions de Doctrine ; certains noms physiques ne correspondent plus au résultat produit par Doctrine ORM 3.

Cas connu : la table `amino` contient historiquement `name1letter` et `name3letters`, sans underscore après le chiffre. Les attributs de `Amino` doivent conserver explicitement :

```php
#[ORM\Column(name: 'name1letter', type: 'string')]
#[ORM\Column(name: 'name3letters', type: 'string')]
```

Sans ces noms explicites, Doctrine ORM 3 cherche `name1_letter` et `name3_letters`, ce qui produit une erreur SQL 1054 sur `/aminos`.

Le même écart existe pour le nom de classe `Pam250MatrixDigit`. La base historique utilise la table `pam250matrix_digit`, tandis que Doctrine ORM 3 déduit `pam250_matrix_digit`. L'entité doit conserver explicitement :

```php
#[ORM\Table(name: 'pam250matrix_digit')]
```

Sans ce mapping, `/pam250_matrix_digits` échoue avec une erreur SQL 1146 indiquant que `pam250_matrix_digit` n'existe pas.

La migration `Version20260807140000` convertit les anciens champs Doctrine `array` sérialisés en colonnes JSON natives :

- `type_iiendonuclease.same_pattern` ;
- `type_iib_endonuclease.same_pattern` ;
- `type_iis_endonuclease.same_pattern` ;
- `triplet_specie.triplets` ;
- `triplet_specie.triplets_groups`.

Cette migration est volontairement rejouable : elle ignore une colonne déjà en JSON. C'est nécessaire parce que les DDL MySQL font des commits implicites et qu'un échec ultérieur lors de l'enregistrement dans `migration_versions` ne restaure pas les colonnes déjà converties.

La table de métadonnées Doctrine s'appelle `migration_versions`. Sa colonne `version` doit rester à 191 caractères afin de stocker les noms de classes complets tels que `DoctrineMigrations\Version20260807140000`.

Pour toute évolution de schéma :

1. Inspecter d'abord le schéma réel de production ; il porte un historique plus ancien que les migrations encore présentes dans Git.
2. Ajouter une migration explicite dans `src/Migrations`.
3. Rendre la migration reprenable lorsque des DDL MySQL et des transformations de données sont mélangés.
4. Ne pas utiliser `doctrine:schema:update --force` en production.
5. Vérifier le contrat JSON-LD consommé par `biophp`.

## Fixtures

Les classes `Load*Data` contiennent le référentiel biologique : acides aminés, éléments, nucléotides, pK, matrice PAM250, réductions protéiques, triplets, espèces, endonucléases, fournisseurs et paramètres thermodynamiques.

Le chargement des fixtures remplace normalement les données existantes. Ne jamais exécuter `doctrine:fixtures:load` sur la production sans demande explicite, sauvegarde vérifiée et compréhension des identifiants attendus par `biophp`.

Pour une base locale jetable :

```bash
php bin/console doctrine:database:create --if-not-exists
php bin/console doctrine:schema:create
php bin/console doctrine:migrations:migrate --no-interaction
php bin/console doctrine:fixtures:load --no-interaction
```

Le `schema:create` est actuellement nécessaire sur une base totalement neuve, car les anciennes migrations de création du schéma ne sont plus suivies dans le dépôt.

## Configuration et sécurité

Variables d'environnement attendues :

- `APP_ENV`
- `APP_SECRET`
- `API_TITLE` (défaut : `Amelaye BioAPI`)
- `API_DESCRIPTION`
- `API_VERSION` (défaut : `1.0.0`)
- `TRUSTED_PROXIES`
- `TRUSTED_HOSTS`
- `CORS_ALLOW_ORIGIN`
- `DATABASE_URL`

Le fichier `.env` est actuellement suivi par Git, tandis que Deployer remplace celui de chaque release par le fichier partagé du serveur. Ne jamais copier une valeur secrète de production dans la documentation, les logs ou un commit.

La sécurité Symfony n'impose actuellement aucune authentification aux routes métier. API Platform documente un header Swagger `X-AUTH-TOKEN`, mais aucun authenticator ne le valide et les clients `biophp` ne l'envoient pas. Considérer l'API comme publique et en lecture seule tant qu'un changement coordonné n'a pas été décidé.

## Commandes de développement

Installation :

```bash
composer install
```

Contrôles rapides après une modification :

```bash
php -l src/Entity/Amino.php                  # adapter au fichier PHP modifié
php bin/console lint:yaml config
php bin/console doctrine:mapping:info
php bin/console debug:router
git diff --check
```

Lancer localement avec le serveur PHP, si `DATABASE_URL` pointe vers une base disponible :

```bash
php -S 127.0.0.1:8000 -t public public/index.php
```

Points de vérification HTTP utiles :

```bash
curl -H 'Accept: application/ld+json' http://127.0.0.1:8000/aminos
curl -H 'Accept: application/ld+json' http://127.0.0.1:8000/elements/6
curl -H 'Accept: application/ld+json' http://127.0.0.1:8000/triplet_species
```

Il n'y a actuellement aucune suite de tests dans `bioapi` et `.travis.yml` est vide. Lorsqu'un contrat API change, la validation minimale doit couvrir la route, la requête Doctrine et la forme JSON-LD. Idéalement, ajouter un test fonctionnel avant d'élargir le comportement.

## Déploiement

Le déploiement se lance depuis ce dépôt :

```bash
./vendor/bin/dep deploy bioapi-prod
```

Configuration actuelle de `deploy.php` :

- dépôt cloné : `https://github.com/amelaye/bioapi.git` ;
- branche : `develop` ;
- chemin serveur : `/home/web/api.amelayes-biophp.net` ;
- trois releases conservées ;
- PHP CLI : `/usr/bin/php` ;
- Composer : `/usr/bin/php /usr/local/bin/composer` ;
- `.env`, `var/log` et `var/sessions` sont partagés entre les releases ;
- permissions gérées par ACL pour l'utilisateur web `www-data`, avec sudo ;
- migrations exécutées avant le basculement du symlink `current` ;
- cache réchauffé après le basculement ;
- verrou Deployer retiré automatiquement en cas d'échec.

PHP CLI et PHP Apache/FPM sont deux runtimes indépendants. Un `php -v` correct ne prouve pas que le site utilise la même version. La production a besoin d'un runtime web PHP >= 8.4 ; vérifier le module Apache ou le pool FPM après toute mise à niveau.

Logs persistants de production :

```bash
/home/web/api.amelayes-biophp.net/shared/var/log/prod.log
```

En cas d'erreur 500 limitée à une ressource, consulter d'abord ce log. Si toutes les routes échouent, vérifier également le runtime PHP d'Apache/FPM, le cache Symfony, les permissions et la connexion MySQL.

## Principes de modification

- Préserver le format JSON-LD/Hydra et la clé `hydra:member` tant que `biophp` n'est pas modernisé.
- Préserver les routes historiques, y compris leurs noms atypiques (`/p_ks`, `/type_i_i_endonucleases`, etc.).
- Ne pas ajouter de préfixe de version aux URLs sans décision explicite ; la version est actuellement transportée par OpenAPI et `X-API-Version`.
- Préférer des noms de colonnes Doctrine explicites lorsqu'un schéma historique est concerné.
- Traiter les fixtures comme des données métier versionnées, pas comme de simples exemples.
- Ne pas modifier ou purger les données de production pendant un diagnostic.
- Ne pas déployer une migration de données sans stratégie de reprise.
- Ne pas supposer que `composer install` reproduira les versions locales tant que le lockfile n'est pas suivi.
- Garder les changements compatibles avec le consommateur `amelaye/biophp`, ou coordonner les deux dépôts dans la même livraison.
