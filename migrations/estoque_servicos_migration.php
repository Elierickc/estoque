<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_estoque_servicos extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'quantidade' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'validade' => [
                'type' => 'DATE',
            ],
        ]);

        $this->dbforge->add_field([
            'preco' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
        ]);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('estoque_servicos');
    }

    public function down()
    {
        $this->dbforge->drop_table('estoque_servicos');
    }
}

