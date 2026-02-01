<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Estoque_servicos extends Admin_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('estoque_servicos_model');
    }

    public function index()
    {
        // Optimization: Unified data fetching and removed redundant view loading.
        // Previously, it fetched the same data twice and loaded two full HTML documents.
        $data['servicos'] = $this->estoque_servicos_model->get_servicos();
        $data['title'] = _l('estoque_servicos');

        $this->load->view('admin/estoque_servicos/index', $data);
    }

    public function relatorio()
    {
        // Added dedicated report method to avoid performance impact on index page
        $data['servicos'] = $this->estoque_servicos_model->get_servicos();
        $data['title'] = _l('estoque_servicos');
        $this->load->view('admin/estoque_servicos/relatorio', $data);
    }

    // Outros métodos para gerenciar estoque, adicionar produtos, etc.

    public function adicionar_servico()
    {
        if ($this->input->post()) {
            $data = [
                'nome' => $this->input->post('nome'),
                'quantidade' => $this->input->post('quantidade'),
                'validade' => $this->input->post('validade'),
                'preco' => $this->input->post('preco')
            ];
    
            $this->estoque_servicos_model->insert($data);
    
            redirect(admin_url('estoque_servicos'));
        } else {
            $data['title'] = _l('adicionar_servico');
            $this->load->view('admin/estoque_servicos/adicionar_servico', $data);
        }
    }
    
public function editar_servico($id)
{
    if ($this->input->post()) {
        $data = [
            'nome' => $this->input->post('nome'),
            'quantidade' => $this->input->post('quantidade'),
            'validade' => $this->input->post('validade')
        ];

        $this->estoque_servicos_model->update($id, $data);

        redirect(admin_url('estoque_servicos'));
    } else {
        $data['servico'] = $this->estoque_servicos_model->get($id);
        $data['title'] = _l('editar_servico');
        $this->load->view('admin/estoque_servicos/editar_servico', $data);
    }
}

public function remover_servico($id)
{
    $this->estoque_servicos_model->delete($id);
    redirect(admin_url('estoque_servicos'));
}


public function categorias()
{
    $data['title'] = 'Categorias de Serviços';

    // Aplicar filtros e ordenação
    $filtro_nome = $this->input->get('filtro_nome');
    $ordenacao = $this->input->get('ordenacao');

    $data['categorias'] = $this->estoque_servicos_model->get_all_categorias($filtro_nome, $ordenacao); // Passe os parâmetros para o método

    $this->load->view('admin/servico_categorias/categorias', $data);
}


public function adicionar_categoria()
{
    if ($this->input->post()) {
        $categoria_data = [
            'nome' => $this->input->post('nome_categoria')
        ];

        $this->estoque_servicos_model->add_categoria($categoria_data); // Use o método correto do seu model
        redirect('admin/estoque_servicos/categorias');
    }
}
}
