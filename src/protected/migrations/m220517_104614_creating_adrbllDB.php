<?php

class m220517_104614_creating_adrbllDB extends CDbMigration
{
	public function up()
    {
        $this->createTable('address', array(
            'id' => 'pk',
            'gorod' => 'VARCHAR (50) DEFAULT \'\'',
            'adres' => 'VARCHAR (100) NOT NULL DEFAULT \'\'',
            'dom' => 'INTEGER (3) NOT NULL DEFAULT \'0\'',
            'korpus' => 'VARCHAR (10) DEFAULT \'\'',
            'kvartira' => 'INTEGER (5) NOT NULL DEFAULT \'0\''
        ));
        $this->createTable('bill', array(
            'id' => 'pk',
            'dom' => 'INTEGER (3) REFERENCES address(dom)',
            'nomer' => 'INTEGER (10) NOT NULL DEFAULT \'0\'',
            'usluga' => 'VARCHAR (80) NOT NULL DEFAULT \'\'',
            'data' => 'DATE NOT NULL'
        ));
    }
 
    public function down()
    {
        $this->dropTable('address');
        $this->dropTable('bill');
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