<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estoque_servicos_model extends App_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_table = 'estoque_servicos';
        $this->primary_key = 'id';
        // Performance: Removed migration check from constructor to avoid overhead on every model load.
    }
    public function get_servicos()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        // Adicione condições adicionais, se necessário, por exemplo, para filtrar por disponibilidade
        $query = $this->db->get();
    
        return $query->result_array();
    }
    
    // Métodos para gerenciar estoque, atualizar disponibilidade, liberar vagas, etc.

    public function get_all_categorias($filtro_nome = '', $ordenacao = '')
    {
        if (!empty($filtro_nome)) {
            $this->db->like('nome', $filtro_nome);
        }

        switch ($ordenacao) {
            case 'id_asc':
                $this->db->order_by('id', 'ASC');
                break;
            case 'id_desc':
                $this->db->order_by('id', 'DESC');
                break;
            case 'nome_asc':
                $this->db->order_by('nome', 'ASC');
                break;
            case 'nome_desc':
                $this->db->order_by('nome', 'DESC');
                break;
            default:
                $this->db->order_by('id', 'ASC');
                break;
        }

        return $this->db->get('servico_categorias')->result_array();
    }
}
