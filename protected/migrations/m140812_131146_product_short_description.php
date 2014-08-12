<?php

class m140812_131146_product_short_description extends CDbMigration
{
	public function safeUp()
	{
		
		$this->addColumn('tbl_product','short_desc','string');
	}

	public function safeDown()
	{
		echo "does not support migration down.\n";
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