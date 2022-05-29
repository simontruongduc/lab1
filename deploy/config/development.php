<?php
namespace Deployer;

    host('34.125.7.46')
        ->set('http_user', 'apache')
        ->user('teemotheharmless')
        ->port(22)
        ->identityFile('deploy/keys/key.pem')
        ->forwardAgent(true)
        ->multiplexing(true)
        ->set('branch', 'main')
        ->set('deploy_path', '/var/www/html/game');
