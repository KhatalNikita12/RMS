<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cart extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'cart_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'food_image' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'food_name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'total' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'default' => '0.00', // Optional: Set a default value for the column
                'after' => 'price', // Optional: Place the new column after the 'price' column
            ],
            'user_id'    => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],
            'food_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                // 'auto_increment' => true,
            ],
      
        ]);
        $this->forge->addKey('cart_id', true);
        // $this->forge->addForeignKey('user_id', $this->tables['users'], 'id', '', 'CASCADE');
        // $this->forge->addForeignKey('food_id', $this->tables['fooditem'], 'id', '', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', '', 'CASCADE');
$this->forge->addForeignKey('food_id', 'fooditem', 'id', '', 'CASCADE');

        $this->forge->createTable('cart');

    }
    

    public function down()
    {
        // $this->forge->dropTable('cart');
        $this->forge->dropColumn('cart');
    }
}