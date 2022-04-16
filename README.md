# PluginPress
Skeleton Framework for building object-oriented WordPress plugins. basic files and directory structure with the PluginPress APIs.

# Forever v1
PluginPress is always will stay at version 1.0.0. it will never change. when new updates are released, all the old files and folders will be replaced by the new ones. but, the version number will stay at version 1.0.0.
Why I am doing this? Well, PluginPress is a boilerplate/Skeleton framework, not a production-ready complete software. so it doesn't need to have a version controlling system. and there is no plan to add new features into the PluginPress in the future. Yes, there will be minor changes from time to time, but not big ones.

Since PluginPressAPI is in a separate repository, it will have proper versioning, and always gets bug fixes, new features, and updates.
# Features
* Namespace support to group all of your code under a custom name. That way, your classes, functions, and so on don’t clash with other people’s code running on the site at the same time.
* PSR-4 autoloader to autoload files and directories in connection with namespaces.
* Includes a dependency manager to easily load in 3rd party libraries from Packagist.org, locked onto specific versions.
* OOP-style structure for building a high-quality WordPress plugin development.

# Installation
The PluginPress can be installed directly into your plugins folder "as-is", and it works. You will want to rename it and the classes inside of it to fit your needs.

`composer create-project pluginpress/pluginpress YOUR_PLUGIN_NAME`

Should be run inside your plugins folder (wp-content/plugins).

# Setup
* Rename the `YOUR_PLUGIN_NAME/PluginPress.php` to `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php`.
* Rename the `YOUR_PLUGIN_NAME/Private/PluginPress.php` to `YOUR_PLUGIN_NAME/Private/YOUR_PLUGIN_NAME.php`.
* Edit the main file’s header comment section details in `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` with `YOUR-OWN-PLUGIN-DETAILS`.
* Update the plugin details in `YOUR_PLUGIN_NAME/Private/Config/PluginOptions.php` with `YOUR-OWN-PLUGIN-DETAILS`.
* DO NOT change/edit/replace the `PluginPressAPI`.
* Replace namespace `PluginPress/PluginPress` with your own.
* DO NOT change the use of `PluginPress/PluginPressAPI/**/**`.
* Update autoloader namespace in `composer.json`. then run `composer dump-autoload`. Should be run inside your plugin folder (wp-content/plugins/YOUR_PLUGIN_NAME).
* Replace everything's if its says `PLUGINPRESS`, `PluginPress` or `pluginpress`. and please make sure to do Case-Sensitive replaces.
* Here is a list of what you should replace (make sure to do case-sensitive search-replaces).
  * FILE --- || LINE NO || --- STRING TO REPLACE
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 45 || --- `PluginPress\PluginPress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 50 || --- `PluginPress\PluginPress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 68 || --- `PluginPress\PluginPress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 77 || --- `PluginPress\PluginPress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 80 || --- `PluginPress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 85 || --- `PluginPress` && `pluginpress`
  * `YOUR_PLUGIN_NAME/YOUR_PLUGIN_NAME.php` --- || 86 || --- `pluginpress`
  * `YOUR_PLUGIN_NAME/composer.json` --- || 02 || --- `pluginpress/pluginpress`
  * `YOUR_PLUGIN_NAME/composer.json` --- || 54 || --- `PluginPress\\PluginPress\\`
  * `YOUR_PLUGIN_NAME/composer.json` --- || 59 || --- `PluginPress\\PluginPress\\`
  * `YOUR_PLUGIN_NAME/Private/YOUR_PLUGIN_NAME.php` --- || 03 || --- `PluginPress\PluginPress`
  * `YOUR_PLUGIN_NAME/Private/YOUR_PLUGIN_NAME.php` --- || 13 || --- `PluginPress`
  * `YOUR_PLUGIN_NAME/Private/PluginActivator/PluginActivator.php` --- || 03 || --- `PluginPress`
  * `YOUR_PLUGIN_NAME/Private/PluginActivator/ActivationSequence.php` --- || 03 || --- `PluginPress`
  * `YOUR_PLUGIN_NAME/Private/PluginActivator/DeactivationSequence.php` --- || 03 || --- `PluginPress`

# Usage
* Add all the `Classes/Functions/Templates/Traits` in the `Private` directory.
* Add all the `language` files in the `Common\Language` directory.
* Add all the `Assets` files in the `Public\Assets` directory.

# File structure
You can add your own new class files by naming them correctly and putting files in the most appropriate location. Composer's autoloader and the Bootstrap class will auto-include your file and instantiate the classes. The idea of this organization is to be more conscious of structuring your code. but, there are no strict guidelines on where you can put things. Feel free to do it your own way.

```
PluginPress
  |
  ├── Common
  │   ├── Languages
  │   │   ├── index.php
  │   │
  │   ├── index.php
  |
  ├── Logs
  │   ├── index.php
  |
  ├── Private
  │   ├── Configs
  │   │   ├── index.php
  │   │   ├── PluginOptions.php
  │   │
  │   ├── PluginActivator
  │   │   ├── ActivationSequence.php
  │   │   ├── DeactivationSequence.php
  │   │   ├── index.php
  │   │   ├── PluginActivator.php
  │   │
  │   ├── index.php
  │   ├── PluginPress.php
  |
  ├── Public
  │   ├── Assets
  │   │   ├── Images
  │   │   │   ├── index.php
  │   │   │
  │   │   ├── JavaScripts
  │   │   │   ├── index.php
  │   │   │
  │   │   ├── StyleSheets
  │   │   │   ├── index.php
  │   │   │
  │   │   ├── index.php
  │   │
  │   ├── index.php
  |
  ├── vendor
  │   ├── bin
  │   │   ├── index.php
  │   │
  │   ├── composer
  │   │   ├── index.php
  │   │
  │   ├── autoload.php
  │   ├── index.php
  |
  ├── .gitattributes
  ├── .gitignore
  ├── CHANGELOG.md
  ├── composer.json
  ├── composer.lock
  ├── index.php
  ├── LICENCE.md
  ├── licence.txt
  ├── PluginPress.code-workplace
  ├── PluginPress.php
  ├── README.md
  ├── readme.txt
  ├── Uninstall.php
```
