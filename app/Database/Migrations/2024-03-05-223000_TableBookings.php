<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableBookings extends Migration
{
    public function up()
    {
       $this->forge->addField([
           'id' => [
               'type' => 'INT',
               'auto_increment' => true
           ],
           'bookingNo' => [
               'type' => 'BIGINT',
               'constraint' => 12
           ],
           'fullName' => [
               'type' => 'VARCHAR',
               'constraint' => 200
           ],
           'emailId' => [
               'type' => 'VARCHAR',
               'constraint' => 50
           ],
           'phoneNumber' => [
               'type' => 'BIGINT',
               'constraint' => 50
           ],
           'bookingDate' => [
               'type' => 'DATE',
               // 'constraint' => 50
           ],
           'bookingTime' => [
               'type' => 'VARCHAR',
               'constraint' => 50
           ],
           'noAdults' => [
               'type' => 'BIGINT',
               'constraint' => 50
           ],
           'noChildrens' => [
               'type' => 'BIGINT',
               'constraint' => 50
           ],
           'boookingStatus' => [
               'type' => 'VARCHAR',
               'constraint' => 50
           ],
   
       ]);
       $this->forge->addPrimaryKey('id');
       $this->forge->createTable('tblbookings'); 
   }
   
   
   public function down()
   {
       $this->forge->dropTable('tblbookings'); 
   }
   }
   