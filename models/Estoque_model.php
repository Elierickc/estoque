<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Estoque_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllProducts()
    {
        $query = $this->db->get('products');
        return $query->result_array();
    }

    public function addProduct($data)
    {
        $this->db->insert('products', $data);
    }

    public function atualizarEstoquePorDataValidade()
    {
        $produtos = $this->getAllProducts(); // recupera todos os produtos

        foreach ($produtos as $produto) {
            $data_validade = $produto['expiration_date'];
            $estoque = $produto['quantity_available'];

            // verifica se a data de validade é anterior à data atual
            if ($data_validade < date('Y-m-d')) {
                // atualiza o estoque do produto
                $novo_estoque = $estoque - 1;
                $this->atualizarEstoque($produto['id'], $novo_estoque);
            }
        }
    }

    private function atualizarEstoque($produto_id, $novo_estoque)
    {
        $data = array('quantity_available' => $novo_estoque);
        $this->db->where('id', $produto_id);
        $this->db->update('products', $data);
    }
}
