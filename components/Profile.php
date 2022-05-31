<?php namespace SunLab\Profile\Components;

use Cms\Classes\ComponentBase;
use SunLab\Profile\Models\Settings;
use Winter\User\Models\User;

class Profile extends ComponentBase
{
    public $user;
    public $profile_fields;

    public function onRender()
    {
        $this->user =
            User::query()
                ->firstWhere(
                    $this->property('user_finder_attribute'),
                    $this->property('user_finder_param')
                );

        $this->profile_fields = Settings::instance()->profile_fields;
    }

    public function componentDetails()
    {
        return [
            'name'        => 'sunlab.profile::lang.components.profile.name',
            'description' => 'sunlab.profile::lang.components.profile.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'user_finder_param' => [
                'title'       => 'sunlab.profile::lang.components.user_finder_param',
                'description' => 'sunlab.profile::lang.components.user_finder_param_description',
                'default'     => '{{ :id }}',
                'type'        => 'string',
            ],
            'user_finder_attribute' => [
                'title'       => 'sunlab.profile::lang.components.user_finder_attribute',
                'description' => 'sunlab.profile::lang.components.user_finder_attribute_description',
                'default'     => 'id',
                'type'        => 'string',
            ]
        ];
    }
}
