<?php

class m140829_004507_shipping_method extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_shipping_method',array(
			'id'=>'pk',
			'cart_id'=>'integer not null',
			'service'=>'string not null',
			'price'=>'float',
		));
	}

	public function down()
	{
		echo "m140829_004507_shipping_method does not support migration down.\n";
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