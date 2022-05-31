## Profile

This plugin allows you to create customized front-end user additional fields such as (but not limited to):
- Social links (GitHub, Twitter, Facebook, ...)
- Biography
- Company
- Website
- Born date
- Timezone
- ... Many more, the only limits is your imagination
![](https://github.com/SunLabDev/wn-profile-plugin/blob/main/images/Screenshot_20220531_114939.png?raw=true)

### Under development plugin
This plugin is still under active development, please report any issue you meet or submit a PR.

### Composer installation
```terminal
composer require sunlab/wn-profile-plugin
```

### Requirements

This plugin requires the [Winter.User](https://github.com/wintercms/wn-user-plugin) Plugin.

### Create additional fields

In the backend, navigate to the settings of the plugin, under the Users settings' tab.
Here you can add the fields you need, the only required is the name
which will correspond to the attribute of the associated User model attributes.
![](https://github.com/SunLabDev/wn-profile-plugin/blob/main/images/backend_settings.png?raw=true)

The rest of the fields corresponds to how the field will be displayed in the backend User's form.
![](https://github.com/SunLabDev/wn-profile-plugin/blob/main/images/Screenshot_20220531_114736.png?raw=true)
### Access/update the fields from front-end
#### Access
The field you've just created is accessible directly from a `User` model, the same way you would access the `name` or `email` attributes of the model:
```twig
Name: {{ user.name }}
Email: {{ user.email }}
GitHub: {{ user.github }}
Twitter: {{ user.twitter }}
```

#### Front-end Update
Using the `Account` component of `Winter.User`, you just need to add a corresponding input in the `update.htm` partial of the component,
all the profile's plugin custom fields is accessible under the `user` variable:
```twig
<input name="twitter"
       type="text"
       value="{{ user.twitter }}"
>
```

That's all! The plugin already handle the saving process.
