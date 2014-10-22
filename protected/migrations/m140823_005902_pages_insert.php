<?php

class m140823_005902_pages_insert extends CDbMigration
{
	public function safeUp()
	{
		$this->insert('tbl_pages',array(
			'id'=>1,
			'title'=>'home',
			'content'=>'sacascsac',
			'tags'=>'Welcome,Harxa,fashion',
		));


		$this->insert('tbl_pages',array(
			'id'=>2,
			'title'=>'profile',
			'content'=>'cacsacsa',
			'tags'=>'Profile,Harxa,fashion',
		));

		$this->insert('tbl_pages',array(
			'id'=>3,
			'title'=>'trunkshow',
			'content'=>'Trunk Show',
			'tags'=>'Trunkshow,trunk,show,Harxa,fashion',
		));
	}

	public function down()
	{
		echo "m140823_005902_pages_insert does not support migration down.<br/>";
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