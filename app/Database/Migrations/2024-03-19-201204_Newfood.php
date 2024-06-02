<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Newfood extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'food_name'   => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'description' => [
                'type'       => 'TEXT',
            ],
            'price'       => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2', // Adjust the constraint as needed
            ],
            'image' => [
                'type' => 'VARCHAR', // Or 'TEXT' depending on your preference
                'constraint' => 255, // Adjust according to your expected file path length
                'null' => true, // If you want to allow storing null values
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('fooditem');
    }
    

    public function down()
    {
        $this->forge->dropTable('fooditem'); 
    }
}
