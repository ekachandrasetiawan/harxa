<?php

class m140822_130812_alter_cart_detail extends CDbMigration
{
	public function safeUp()
	{
		$this->addColumn('tbl_cart_detail','size','string');
	}

	public function down()
	{
		echo "m140822_130812_alter_cart_detail does not support migration down.\n";
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