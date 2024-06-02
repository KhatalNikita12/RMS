<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chefs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'chefid' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'chefname' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'chefaddress' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'chefemailid' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'salary' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
    
        ]);
        $this->forge->addPrimaryKey('chefid');
        $this->forge->createTable('chefs'); 
    }
    
    
    public function down()
    {
        $this->forge->dropTable('chefs'); 
    }
    }
    