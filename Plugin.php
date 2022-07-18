<?php namespace SunLab\Profile;

use Winter\Storm\Support\Facades\Str;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Winter\User\Models\User as UserModel;
use Winter\User\Controllers\Users as UsersController;

/**
 * UserProfile Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['Winter.User'];

    private static $inputTypeMapping = [
        'number' => 'integer',
        'text' => 'string',
        'password' => 'string',
        'textarea' => 'text'
    ];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'sunlab.profile::lang.plugin.name',
            'description' => 'sunlab.profile::lang.plugin.description',
            'author'      => 'SunLab',
            'icon'        => 'icon-user-plus',
            'homepage'    => 'https://github.com/sunlabdev/wn-profile-plugin'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'sunlab.profile::lang.settings.menu_label',
                'description' => 'sunlab.profile::lang.settings.menu_description',
                'category'    => SettingsManager::CATEGORY_USERS,
                'icon'        => 'icon-user-plus',
                'class'       => \SunLab\Profile\Models\Settings::class,
                'order'       => 500,
                'permissions' => ['winter.users.settings']
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            \SunLab\Profile\Components\Profile::class => 'profile'
        ];
    }

    public function boot()
    {
        $this->extendUserModel();
    }

    protected function extendUserModel()
    {
        $profileFields = \SunLab\Profile\Models\Settings::get('profile_fields');

        $profileFieldsNames = empty($profileFields) ? [] : array_pluck($profileFields, 'name');

        UserModel::extend(static function ($user) use ($profileFieldsNames) {
            $user->addCasts(['profile_fields' => 'json']);

            $user->bindEvent('model.beforeCreate', static function () use ($profileFieldsNames, $user) {
                $user->profile_fields = empty($profileFieldsNames) ? [] : array_fill_keys($profileFieldsNames, '');
            });
        });

        if (empty($profileFieldsNames)) {
            return;
        }

        UserModel::extend(static function ($user) use ($profileFieldsNames) {
            foreach ($profileFieldsNames as $field) {
                $user->addFillable($field);
                $pascalCasedFieldName = ucfirst(Str::camel($field));

                // Add accessors
                $accessor = sprintf('get%sAttribute', $pascalCasedFieldName);

                $user->addDynamicMethod($accessor, static function () use ($user, $field) {
                    return $user->profile_fields[$field] ?? null;
                });

                // Proxy the setters to the profile_fields json field
                $setter = sprintf('set%sAttribute', $pascalCasedFieldName);
                $user->addDynamicMethod($setter, static function ($value) use ($user, $field) {
                    $profile_fields = $user->profile_fields;
                    $profile_fields[$field] = $value;

                    return $user->profile_fields = $profile_fields;
                });
            }
        });

        $profileFields = array_combine($profileFieldsNames, $profileFields);
        UsersController::extendFormFields(static function ($widget) use ($profileFields) {
            if (!$widget->model instanceof UserModel) {
                return;
            }

            $widget->addTabFields($profileFields);
        });
    }
}
