<?php
namespace lapse;
use atk4\schema\MigratorConsole;
use atk4\ui\CRUD;
use lapse\Model\Project\Report;

require 'vendor/autoload.php';
$app = new App();

$current_week = $app->stickyGet('week') ?: date('W');

$app->add(['Header', 'Timesheets']);

$cr = $app->add(CRUD::class);
$cr->setModel(new Report($app->db))
    ->addCondition('week_number', $current_week);

$w = $cr->menu->addMenu('Week '.$current_week);
$w->addItem('Current Week', ['week'=>false]);
$w->addItem('Previous Week', ['week'=>date('W')-1]);
$w->addDivider();
$w->addItem('Previous Week', ['week'=>$current_week-1]);
$w->addItem('Next Week', ['week'=>$current_week+1]);
