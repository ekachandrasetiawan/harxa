<?php

class m140823_074917_shipping_addr extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_shipping_addr',array(
			'id'=>'pk',
			'user_id'=>'integer not null',
			'title'=>'string',
			'address'=>'text not null',
			'city'=>'string not null',
			'state'=>'string not null',
			'country'=>'string null',
			'zip_code'=>'string null',
			'phone'=>'string',
			'primary'=>'integer default 0',
		));

		$this->addForeignKey('fk_shipping_addr_user','tbl_shipping_addr','user_id','tbl_users','id','CASCADE','CASCADE');
	}

	public function safeDown()
	{
		$this->dropTable('tbl_shipping_addr');
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