<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'phone_no' => [
                'type' => 'INT',
                'constraint' => 50
            ],
    
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('customer'); 
    }
    
    
    public function down()
    {
        $this->forge->dropTable('customer'); 
    }
}
