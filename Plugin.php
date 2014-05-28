<?php namespace LaminSanneh\FantasticFaq;

use System\Classes\PluginBase;

/**
 * FantasticFaq Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'FantasticFaq',
            'description' => 'An FAQ plugin with singular manageable instances',
            'author'      => 'LaminSanneh',
            'icon'        => 'icon-leaf'
        ];
    }

}
