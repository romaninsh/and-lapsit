<?php
namespace lapse\Model;
use lapse\Model\Project\Report;

class Project extends \atk4\data\Model {
    public $table = 'project';

    function init() {
        parent::init();

        $this->addField('name');
        $this->hasOne('client_id', Client::class)->withTitle();
        $this->hasMany('Reports', Report::class)
            ->addField('reported', ['aggregate'=>'sum', 'field'=>'total']);
    }
}