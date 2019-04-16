<?php
namespace Deployer;

require 'recipe/symfony4.php';

// Project name
set('application', 'api.amelayes-biophp.net');

// Project repository
set('repository', 'https://github.com/amelaye/bioapi.git');

// Sets the default httpd user.
set('http_user', 'deploy');

// Sets writable options.
set('writable_mode', 'chown');
set('writable_use_sudo', TRUE);
set('writable_chmod_mode', '0777');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', ['.env']);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', [
    'var/cache'
]);

// Hosts.
host('production')
    ->hostname('amelieonline.net')
    ->user('deploy')
    ->set('deploy_path', '/home/web/{{application}}')
    ->set('branch', 'develop')
    ->stage('prod');
    
// Tasks

// Tasks.
task('deploy', [
    'deploy:info',
    // Preparation for deployment. Checks if deploy_path exists, otherwise create it.
    'deploy:prepare',
    // Locks deployment so only one concurrent deployment can be running.
    'deploy:lock',
    // Create a new release folder based on the release_name config.
    'deploy:release',
    // Download a new version of code using Git.
    'deploy:update_code',
    // Creates shared files and directories from shared directory to release_path.
    'deploy:shared',
    // Makes the directories listed in writable_dirs writable.
    'deploy:writable',
    // Runs composer install.
    'deploy:vendors',
    // Switch current symlink to release_path.
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');

