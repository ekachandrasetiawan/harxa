<?php

class m140812_125537_product_alter1 extends CDbMigration
{
	public function safeUp()
	{
		$this->addColumn('tbl_product','description','text');
		$this->addColumn('tbl_product','review','text');
		$this->alterColumn('tbl_product','tags','text');
	}

	public function safeDown()
	{
		echo "m140812_125537_product_alter1 does not support migration down.\n";
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