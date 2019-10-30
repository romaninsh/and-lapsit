<?php

namespace lapse;

class App extends \atk4\ui\App {
    function __construct($scope = 'main')
    {
        parent::__construct('Lapse - simple timesheets');

        $this->dbConnect($_ENV['CLEARDB_DATABASE_URL'] ?? 'mysql://root:root@localhost/lapse');


        switch($scope) {
            case 'centered':
                $this->initLayout('Centered');
                return;
            case 'main':
                $this->initLayout('Admin');
                $this->layout->menuLeft->addItem(['Dashboard', 'icon'=>'dashboard'],['dashboard']);
                $this->layout->menuLeft->addItem(['Tasks', 'icon'=>'check']);
                $this->layout->menuLeft->addItem(['Timesheets','icon'=>'clock'], ['timesheet']);
                $this->layout->menuLeft->addItem(['Resourcing', 'icon'=>'archive']);
                $this->layout->menuLeft->addItem(['Leave', 'icon'=>'bicycle'], ['leave']);
                $this->layout->menuLeft->addItem(['Timesheets', 'icon'=>'ticket']);

                $m = $this->layout->menuLeft->addGroup('Management');
                $m->addItem(['Clients', 'icon'=>'money'], ['client']);
                $m->addItem(['Projects', 'icon'=>'train'], ['project']);
                $m->addItem(['People', 'icon'=>'group'], ['user']);
        }
    }
}