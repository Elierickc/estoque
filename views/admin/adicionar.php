<?php defined('BASEPATH') or exit('No direct script access allowed');

init_head();

?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><?php echo _l('adicionar_produto') ?></h4>
            </div>
            <div class="panel-body">
                <?php echo form_open('admin/estoque/salvar', array('class' => 'validate', 'autocomplete' => 'off')); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_input('nome', 'nome') ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo render_input('quantidade', 'quantidade', '', 'number') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo render_date_input('data_disponibilidade', 'data_disponibilidade') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><?php echo _l('salvar') ?></button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php

// Importa a biblioteca de formulários
$this->load->library('form');

// Define as constantes para renderização dos inputs
define('INPUT_TYPE_TEXT', 'text');
define('INPUT_TYPE_NUMBER', 'number');
define('INPUT_TYPE_EMAIL', 'email');
define('INPUT_TYPE_DATE', 'date');

/**
 * Renderiza um input do tipo texto
 *
 * @param string $name Nome do input
 * @param string $label Label do input
 * @param string $value Valor do input
 * @param string $type Tipo do input (text, number, email)
 * @return string Input renderizado
 */
function render_input($name, $label, $value = '', $type = INPUT_TYPE_TEXT)
{
    $input = form_input(array(
        'name' => $name,
        'id' => $name,
        'class' => 'form-control',
        'type' => $type,
        'value' => $value,
    ));

    $label = form_label($label, $name);

    return $label . $input;
}

/**
 * Renderiza um input do tipo data
 *
 * @param string $name Nome do input
 * @param string $label Label do input
 * @param string $value Valor do input
 * @return string Input renderizado
 */
function render_date_input($name, $label, $value = '')
{
    $input = form_input(array(
        'name' => $name,
        'id' => $name,
        'class' => 'form-control datepicker',
        'value' => $value,
    ));

    $label = form_label($label, $name);

    return $label . $input;
}

init_tail();

?>
