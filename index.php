<?php
namespace lapse;
use atk4\schema\MigratorConsole;

require 'vendor/autoload.php';

$app = new App('centered');
$app->add(['Button', 'Try the demo..', 'huge primary'])->link(['dashboard']);
$app->add(['Header','Migration Console']);
$app->add(MigratorConsole::class)
    ->migrateModels([
        new Model\User($app->db),
        new Model\Client($app->db),
        new Model\Project($app->db),
        new Model\Project\Report($app->db),
        new Model\Client\Contact($app->db),
    ]);

