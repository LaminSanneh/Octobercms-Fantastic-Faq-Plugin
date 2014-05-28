<?php namespace LaminSanneh\FantasticFaq\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * FaqGroups Back-end Controller
 */
class FaqGroups extends Controller
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

        BackendMenu::setContext('LaminSanneh.FantasticFaq', 'fantasticfaq', 'faqgroups');
    }
}