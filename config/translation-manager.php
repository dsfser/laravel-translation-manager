<?php

return array(

	/*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */

		'route' => [
				'as' => 'settings.languages',
				'middleware' => ['auth', 'needsRole:admin|custom.admin,true'],
				'prefix' => 'admin/settings/languages',
		],

	/**
	 * Enable deletion of translations
	 *
	 * @type boolean
	 */
		'delete_enabled' => true,

	/**
	 * Exclude specific groups from Laravel Translation Manager.
	 * This is useful if, for example, you want to avoid editing the official Laravel language files.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'pagination',
	 *		'reminders',
	 *		'validation',
	 *	)
	 */
		'exclude_groups' => array(),

);
