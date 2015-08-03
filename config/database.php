<?php

class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'ntrack',
		'prefix' => '',
		'dbmaster' => 'ntrack',
		'dbdevices' => 'tracker_devices',
		'encoding' => 'utf8'
	);

	public $admin = array(
			'datasource' => 'Database/Mysql',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => '',
			'database' => 'ntrack',
			'prefix' => '',
			'encoding' => 'utf8'
	);
}
