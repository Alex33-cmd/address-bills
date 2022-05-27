<?php

class m220517_104614_creating_adrbllDB extends CDbMigration
{
	public function up()
    {
        $this->createTable('address', array(
            'id' => 'pk',
            'gorod' => 'VARCHAR (50) DEFAULT \'\'',
            'adres' => 'VARCHAR (100) NOT NULL',
            'dom' => 'VARCHAR (5) NOT NULL',
            'korpus' => 'VARCHAR (10) DEFAULT \'\'',
            'kvartira' => 'INTEGER (5) NOT NULL'
        ),  'ENGINE=InnoDB CHARSET=utf8');

        $this->createTable('bill', array(
            'id' => 'pk',
            'foreignID' => 'INTEGER (3) NOT NULL',
            'nomer' => 'INTEGER (10) NOT NULL',
            'usluga' => 'VARCHAR (80) DEFAULT \'\'',
            'data' => 'timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ),  'ENGINE=InnoDB CHARSET=utf8'); 

        $this->addForeignKey('fk1', 'bill', 'foreignID', 'address', 'id','CASCADE','CASCADE');

        // test data
        $this->insert('address', array(
            'gorod' => 'Санкт-Петербург',
            'adres' => 'Лиговский пр.',
            'dom' => '10',
            'korpus' => '2Б',
            'kvartira' => '104'
	    ));	
        $this->insert('address', array(
            'gorod' => 'Пушкин',
            'adres' => 'ул. Кима',
            'dom' => '7',
            'korpus' => '1',
            'kvartira' => '39'
	    ));	
        $this->insert('bill', array(
            'foreignID' => '1',
            'nomer' => '878431',
            'usluga' => 'Электроэнергия',
	    ));	
        $this->insert('bill', array(
            'foreignID' => '1',
            'nomer' => '878443',
            'usluga' => 'Содержание общедомового имущества',
	    ));	
        $this->insert('bill', array(
            'foreignID' => '2',
            'nomer' => '784613',
            'usluga' => 'Электроэнергия',
	    ));		
        $this->insert('bill', array(
            'foreignID' => '2',
            'nomer' => '784417',
            'usluga' => 'Уборка лестничных площадок',
	    ));	
    }
 
    public function down()
    {
        $this->dropTable('bill');
        $this->dropTable('address');
    }

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
}