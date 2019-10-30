<?php
namespace lapse;
use atk4\schema\MigratorConsole;
use lapse\Model\Client;

require 'vendor/autoload.php';
$app = new App();

$columns = $app->layout->add('Columns');

$cb = $columns->addColumn(8)->add(new \atk4\chart\ChartBox(['label'=>['Hours Reported', 'icon'=>'chart bar']]));
$chart = $cb->add(new \atk4\chart\BarChart());
$chart->setModel(new Client($app->db), ['name', 'reported']);


$cb = $columns->addColumn(8)->add(new \atk4\chart\ChartBox(['label'=>['Demo Chart', 'icon'=>'book']]));
$chart = $cb->add(new \atk4\chart\PieChart());
$chart->setModel(new Client($app->db), ['name', 'reported']);


