<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php $this->load->view('admin/includes/head'); ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/adicionar_servico.css'); ?>">
    <title><?php echo $title; ?></title>
    <title><?php echo $title; ?></title>
</head>
<body>
    <div id="wrapper">
        <?php $this->load->view('admin/includes/menu'); ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"><?php echo $title; ?></h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo form_open(admin_url('estoque_servicos/adicionar_servico')); ?>
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Quantidade</label>
                                <input type="number" name="quantidade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Validade</label>
                                <input type="date" name="validade" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Preço</label>
                                <input type="number" step="0.01" name="preco" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/includes/scripts'); ?>
</body>
</html>
