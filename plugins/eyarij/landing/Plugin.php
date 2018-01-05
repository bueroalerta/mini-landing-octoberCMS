<?php namespace Eyarij\Landing;

use Backend;
use System\Classes\PluginBase;

/**
 * landing Plugin Information File
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
            'name'        => 'landing',
            'description' => 'No description provided yet...',
            'author'      => 'eyarij',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Eyarij\Landing\Components\Contact' => 'contact',
            'Eyarij\Landing\Components\Subs' => 'subscriber',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'eyarij.landing.some_permission' => [
                'tab' => 'landing',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'landing' => [
                'label'       => 'landing',
                'url'         => Backend::url('eyarij/landing/landings'),
                'icon'        => 'icon-leaf',
                'permissions' => ['eyarij.landing.*'],
                'order'       => 500,
                'sideMenu' => [
                    'contact' => [
                        'label'       => 'Обратная связь',
                        'icon'        => 'icon-phone',
                        'url'         => Backend::url('eyarij/landing/landings'),
                    ],
                    'subscribers' => [
                        'label'       => 'Подписчики',
                        'icon'        => 'icon-heart',
                        'url'         => Backend::url('eyarij/landing/subscribers'),
                    ],
                ]
            ],
        ];
    }
}
