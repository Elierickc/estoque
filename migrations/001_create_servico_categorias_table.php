<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Create_servico_categorias_table extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
        ]);

        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('servico_categorias', true);
    }

    public function down()
    {
        $this->dbforge->drop_table('servico_categorias', true);
    }
}
