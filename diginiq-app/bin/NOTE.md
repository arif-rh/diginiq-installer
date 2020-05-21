
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
  