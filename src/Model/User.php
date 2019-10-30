<?php
namespace lapse\Model;
class User extends \atk4\data\Model {
    public $table = 'user';
    public $caption = 'ANDis';
    public $title_field = 'email';

    function init() {
        parent::init();

        $this->addField('email');
    }
}