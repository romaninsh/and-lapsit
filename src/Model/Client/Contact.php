<?php
namespace lapse\Model\Client;

use atk4\data\Model;
use lapse\Model\Client;

class Contact extends Model
{
    public $table = 'client_contact';
    public $caption = 'Contact';

    function init() {
        parent::init();
        $this->hasOne('client_id', Client::class);
        $this->addField('name');
        $this->addField('role');
        $this->addField('email');
        #$this->addField('type', ['enum'=>['phone','email','other']]);
    }

}