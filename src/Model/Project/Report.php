<?php
namespace lapse\Model\Project;

use atk4\data\Model;
use lapse\Model\Project;
use lapse\Model\User;

class Report extends Model
{
    public $table = 'project_report';
    public $caption = 'Weekly Timesheet Report';

    function init() {
        parent::init();
        $this->hasOne('project_id', Project::class)->withTitle();
        $this->hasOne('user_id', User::class)->withTitle();
        $this->addField('week_number');
        $this->addField('type', ['enum'=>['time', 'expense']]);

        $this->addField('d1');
        $this->addField('d2');
        $this->addField('d3');
        $this->addField('d4');
        $this->addField('d5');
        $this->addField('d6');
        $this->addField('d7');

        $this->addExpression('total', '[d1]+[d2]+[d3]+[d4]+[d5]+[d6]+[d7]');
    }

}