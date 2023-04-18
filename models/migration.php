<?php

class Migration_Add_fields_to_products_table extends CI_Migration {

    public function up() {
        $fields = array(
            'quantity_available' => array(
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
                'after' => 'quantidade'
            ),
            'expiration_date' => array(
                'type' => 'DATE',
                'after' => 'quantity_available'
            )
        );

        $this->dbforge->add_column('products', $fields);
    }

    public function down() {
        $this->dbforge->drop_column('products', 'quantity_available');
        $this->dbforge->drop_column('products', 'expiration_date');
    }
}
