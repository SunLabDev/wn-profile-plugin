<?php namespace SunLab\Profile\Models;

use Winter\Storm\Database\Model;

class Settings extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'sunlab_profile_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'profile_fields.*.name'  => [
            'required',
            'regex:/^[a-z_]+$/',
            'not_in:id,name,email,password,activation_code,persist_code,reset_password_code,permissions,is_activated,activated_at,last_login,created_at,updated_at,username,surname,deleted_at,last_seen,is_guest,is_superuser,created_ip_address,last_ip_address,profile_fields'
        ],
        'profile_fields.*.label' => 'regex:/\w+/'
    ];
}
