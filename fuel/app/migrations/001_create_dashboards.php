<?php

namespace Fuel\Migrations;

class Create_dashboards
{
	public function up()
	{
		\DBUtil::create_table('dashboards', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'name' => array('constraint' => 127, 'type' => 'varchar'),
			'default' => array('type' => 'bool'),
			'enabled' => array('constraint' => 11, 'type' => 'int'),
			'deleted' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('dashboards');
	}
}