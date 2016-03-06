<?php

class Model_Dashboard extends \Model_Crud
{
	protected static $_properties = array(
		'id',
		'user_id',
		'name',
		'default',
		'enabled',
		'deleted',
	);

	protected static $_table_name = 'dashboards';

}
