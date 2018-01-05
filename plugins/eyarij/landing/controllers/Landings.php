<?php namespace Eyarij\Landing\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Landings Back-end Controller
 */
class Landings extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Eyarij.Landing', 'landing', 'landings');
    }
}
