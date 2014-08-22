<?php

class m140822_130525_alter_cart extends CDbMigration
{
	public function safeUp()
	{
		$this->alterColumn('tbl_cart','pass_scheduled','string');
		$this->dropColumn('tbl_cart','product_list_id');
	}

	public function down()
	{
		echo "m140822_130525_alter_cart does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}