<?php

class m140827_005725_shipmento extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('tbl_shipment_to',array(
			'id'=>'pk',
			'cart_id'=>'integer not null',
			'sex'=>'smallint not null',
			'person_name'=>'string not null',
			'shipping_addr_id'=>'integer null',
			'address'=>'text not null',
			'city'=>'string not null',
			'zip_code'=>'string null',
			'phone'=>'string',
		));

		$this->addForeignKey('fk_shipment_to_addr_key','tbl_shipment_to','shipping_addr_id','tbl_shipping_addr','id','SET NULL','SET NULL');
		
	}

	public function down()
	{
		echo "m140827_005725_shipmento does not support migration down.\n";
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