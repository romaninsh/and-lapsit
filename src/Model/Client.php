<?php
namespace lapse\Model;
use lapse\Model\Client\Contact;

class Client extends \atk4\data\Model {
    public $table = 'client';
    public $caption = 'Client';

    function init() {
        parent::init();

        $this->addField('name');
        $this->addField('country');
        $this->addField('address', ['type'=>'text']);
        $this->hasMany('Contacts', Contact::class);
        $this->hasMany('Projects', Project::class)
            ->addField('reported', ['aggregate'=>'sum', 'field'=>'reported']);
    }
}