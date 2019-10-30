<?php
namespace lapse;

use atk4\mastercrud\MasterCRUD;
use lapse\Model\Client;

require 'vendor/autoload.php';
$app = new App();

$app->add(new MasterCRUD())->setModel(
    new Model\Project($app->db),
    [
        'Reports'=>[]
    ]
);
