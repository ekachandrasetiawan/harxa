<?php

class m140813_123708_modif_cart_productsize extends CDbMigration
{
	public function safeUp()
	{
		$this->addColumn('tbl_cart','product_list_id','integer');
		$this->addForeignKey('fk_cart_product_list','tbl_cart','product_list_id','tbl_product_list','id','CASCADE','CASCADE');
	}

	public function safeDown()
	{
		echo "m140813_123708_modif_cart_productsize does not support migration down.\n";
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