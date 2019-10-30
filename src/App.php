<?php

namespace lapse;

class App extends \atk4\ui\App {
    function __construct($scope = 'main')
    {
        parent::__construct();
        switch($scope) {
            case 'main':
                $this->initLayout('Centered');
        }
    }
}