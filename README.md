# PluginPress
 Framework for building object-oriented WordPress plugins. basic files and directory structure with the PluginPress API.
 
# Forever v1
 PluginPress is always will be at v1.0.0. it will never change. when new updates are released, all the old files and folders will be replaced by the new ones. but, the version number will stay at v1.0.0.

# Features
* Namespace support to group all of your code under a custom name. That way, your classes, functions, and so on don’t clash with other people’s code running on the site at the same time
* PSR-4 Autoloader to autoload files and directories in connection with namespaces
* Includes a dependency manager to easily load in 3rd party libraries from Packagist.org, locked onto specific versions
* OOP-style structure for building a high-quality WordPress plugin development

# Installation
`composer create-project iamprogrammerlk/pluginpress YOUR-PLUGIN-NAME`
Should be run inside your plugins folder (wp-content/plugins).

# Setup
* Rename the `YOUR-PLUGIN-NAME/PluginPress.php` and `YOUR-PLUGIN-NAME/Private/PluginPress.php` to `YOUR-PLUGIN-NAME`
* Edit/Replace the plugin header section details in `YOUR-PLUGIN-NAME.php` with `YOUR-OWN-PLUGIN-DETAILS`
* Replace everything's if its says `PLUGINPRESS`, `PluginPress` or `pluginpress`. and please be careful with the capitalization.
* DO NOT change/edit/replace the `PluginPressAPI`
* Replace namespace `IamProgrammerLK/PluginPress` with your own
* Update autoloader namespace in `composer.json`

# Usage
* Add all the `Classes/Functions/Templates/Traits` in the `Private` directory
* Add all the `language` files in the `Common\Language` directory
* Add all the `Assets` files in the `Public\Assets` directory

# File structure
You can add your own new class files by naming them correctly and putting the files in the most appropriate location, see other files for examples. Composer's Autoloader and the Bootstrap class will auto include your file and instantiate the class. The idea of this organization is to be more conscious of structuring your code.

```
├── Common
│   ├── Languages
│   │   ├── index.php
│   ├── index.php
├── Logs
│   ├── index.php
├── Private
│   ├── index.php
│   ├── PluginPress.php
├── Public
│   ├── Assets
│   │   ├── Images
│   │   │   ├── index.php
│   │   ├── JavaScripts
│   │   │   ├── index.php
│   │   ├── StyleSheets
│   │   │   ├── index.php
│   │   ├── index.php
│   ├── index.php
├── vendor
│   ├── composer
│   │   ├── index.php
│   ├── autoload.php
│   ├── index.php
├── CHANGELOG.md
├── composer.json
├── index.php
├── LICENCE.md
├── PluginPress.code-workplace
├── PluginPress.php
├── README.md
├── Uninstall.php
```
