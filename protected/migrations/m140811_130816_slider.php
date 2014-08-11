<?php

class m140811_130816_slider extends CDbMigration
{
	public $table = 'tbl_slider';
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable($this->table,array(
			'id'=>'pk',
			'title'=>'string null',
			'caption'=>'text null',
			'tags'=>'text null',
			'file_name'=>'string not null',
			'active'=>'integer default 1',
		));
		$this->createIndex('slider_title_idx',$this->table,'title',true);
		
	}

	public function safeDown()
	{

	}
}