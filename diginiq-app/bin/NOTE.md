
## Setup

1. `composer install` 
2. edit `.env` file to match your local development 
   1. [required] set app.baseURL
   2. [required] set database configuration
   3. [required] set email smtp connection
   4. [optional] set other custom local development environtment to match your need
3. `php spark migrate --all`
4. `php spark db:seed InitialDB`
5. if want to generate dummy user, run `php spark db:seed \\Arifrh\\Auth\\Database\\Seeds\\UserSeeder`
6. OR go to baseURL/register if want to create user from site

## Features

- Using Dynamic Model with Built-in Relationship feature [DynaModel](https://github.com/arif-rh/ci4-dynamic-model)
- Customize layout based on [CI4 Themes](https://github.com/arif-rh/ci4-themes)
- Using Auth Package [CI4 Auth](https://github.com/arif-rh/ci4-auth)
  
------------------------------------

## Translation

Most Diginiq Projects are using japanese language. So we should use translation feature to manage different languages for each project.

CodeIgniter 4 support [localization](https://codeigniter.com/user_guide/outgoing/localization.html). Please read the documentation for detail instruction how to create language files.

This note is pointing on certain rules that should we use to have "standard localization".

### Rules

- language key should use all lowercase, ex. `submit`, `cancel`
- if language key has two words and more, split with underscore, ex. `save_and_close`, `mobile_phone`
- group the keys and add comment about the group name
- group of keys must have same align arrow keys (use space for alignment)
- always end each line with comma

Full example Button.php

```
<?php
return [
	// common button   --> group name of keys
	'back_to_top' => 'Back to TOP',
	'submit'      => 'Submit',
	'confirm'     => 'Confirm',
	'edit'        => 'Edit',
	'ok'          => 'OK',
	'cancel'      => 'Cancel',
	'save'        => 'Save',
	'add'         => 'Add',
	'delete'      => 'Delete',

	// auth button  --> group name of keys
	'login'  => 'Login',
	'logout' => 'Logout',
];
```
Usage: `echo lang('Button.submit');`
  