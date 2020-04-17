<?php namespace LuisMayta\Resume\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ContactoController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LuisMayta.Resume', 'main-menu-item', 'side-menu-item8');
    }
}
