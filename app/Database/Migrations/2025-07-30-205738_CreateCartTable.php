<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCartTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'detail_product' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'price' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'quantity' => [
                'type' => 'INT',
                'constraint' => 3,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cart');
    }

    public function down()
    {
        $this->forge->dropTable('cart');
    }
}
