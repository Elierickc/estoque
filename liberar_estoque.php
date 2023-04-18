<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Liberar_estoque
{
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('estoque_model');
    }

    public function run()
    {
        $produtos = $this->CI->estoque_model->get_produtos_com_data_validade_expirada();
        foreach ($produtos as $produto) {
            $this->CI->estoque_model->liberar_estoque($produto->produto_id, $produto->quantidade);
        }
    }
}
