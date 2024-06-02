<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Emp extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'emp_id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'constraint' => 5
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
                'type' => 'BIGINT',
                'constraint' => 50
            ],

            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],

            'emp_type' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],

            'res_id' => [
                'type' => 'INT',
                'unsigned'=>true,
                'constraint' => 5
            ],


    
        ]);
        $this->forge->addKey('emp_id',true);
        $this->forge->addForeignKey('res_id','resturant','res_id');
        $this->forge->createTable('employee'); 
    }

    public function down()
    {
        $this->forge->dropTable('employee'); 
    }
}
