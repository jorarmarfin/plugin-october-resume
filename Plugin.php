<?php namespace LuisMayta\Resume;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'LuisMayta\Resume\Components\Midata' => 'Midata',
            'LuisMayta\Resume\Components\Aboutme' => 'Aboutme',
        ];
    }

    public function registerSettings()
    {
    }
}
