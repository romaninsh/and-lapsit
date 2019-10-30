<?php
namespace lapse;
use atk4\schema\MigratorConsole;
use atk4\ui\CRUD;
use lapse\Model\Project\Report;
use lapse\Model\User;

require 'vendor/autoload.php';
$app = new App();

$current_month = $app->stickyGet('month') ?: date('m');

$app->add(['Header', 'Leave']);

$app->add(['Button','Request Leave', 'primary']);
$app->add(['Button','Previous Month', 'secondary', 'icon'=>'arrow left']);
$app->add(['Button','Next Month', 'secondary', 'icon'=>'arrow right']);

$t = $app->add('Table');
$t->setModel(new User($app->db));
$t->addClass('celled');

for($i=1;$i<30;$i++) {
    $c = $t->addColumn('d'.$i, [], ['caption'=>$i]);

    if ($i % 7 >  4) {
        $c->addClass('green');
    }
}


/*
$cr = $app->add(CRUD::class);
$cr->setModel(new Report($app->db))
    ->addCondition('week_number', $current_week);

$w = $cr->menu->addMenu('Week '.$current_week);
$w->addItem('Current Week', ['week'=>false]);
$w->addItem('Previous Week', ['week'=>date('W')-1]);
$w->addDivider();
$w->addItem('Previous Week', ['week'=>$current_week-1]);
$w->addItem('Next Week', ['week'=>$current_week+1]);
*/
