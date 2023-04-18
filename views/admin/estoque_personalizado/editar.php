<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><?php echo _l('editar_produto') ?></h4>
            </div>
            <div class="panel-body">
                <?php echo form_open('admin/estoque/atualizar', array('class' => 'validate', 'autocomplete' => 'off')); ?>
                <?php echo form_hidden('id', $product['id']) ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_input('nome', 'nome', $product['nome']) ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo render_input('quantidade', 'quantidade', $product['quantidade'], 'number') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_date_input('data_disponibilidade', 'data_disponibilidade', date('Y-m-d', strtotime($product['data_disponibilidade']))) ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo _l('atualizar') ?></button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php init_tail(); ?>
