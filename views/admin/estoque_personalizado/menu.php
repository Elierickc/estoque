<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<!-- Menu de navegação personalizado para o módulo de estoque personalizado -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-estoque-personalizado">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Estoque Personalizado</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-estoque-personalizado">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo admin_url('estoque_personalizado/produtos'); ?>">Produtos</a></li>
                <li><a href="<?php echo admin_url('estoque_personalizado/relatorios'); ?>">Relatórios</a></li>
                <li><a href="<?php echo admin_url('estoque_personalizado/configuracoes'); ?>">Configurações</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php
// Defina o título do item de menu
$title = 'Gerenciar estoque';

// Defina o ícone do item de menu
$icon = '<i class="fa fa-cubes"></i>';

// Defina a URL do item de menu
$url = admin_url('estoque_personalizado');

// Defina a posição do item de menu
$position = 25;

// Adicione o item de menu
register_admin_sidebar_menu($title, $icon, $url, $position);
