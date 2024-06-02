<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Restaurant extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'res_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'=>true,
                'auto_increment' => true
            ],
            'restname' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            
    
        ]);
        $this->forge->addPrimaryKey('res_id');
        $this->forge->createTable('resturant'); 
    }
    
    
    public function down()
    {
        $this->forge->dropTable('resturant'); 
    }
}

