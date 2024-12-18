<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tgl_transaksi' =>[
                'type'           => 'VARCHAR',
                'constraint'     => 100,

            ],
            'buku' =>[
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'pelanggan' =>[
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ]


            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}