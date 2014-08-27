<?php

class m140827_013001_sliders extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_slider',array(
			'id'=>'pk',
			'caption'=>'string',
			'file'=>'string',
			'show'>'integer default 1',
		));
	}

	public function down()
	{
		echo "m140827_013001_sliders does not support migration down.\n";
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