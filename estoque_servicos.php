<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Estoque de Serviços
Description: Módulo de gestão de estoque de serviços com disponibilidade em datas.
Version: 1.0.0
Author: Jules
*/

define('ESTOQUE_SERVICOS_MODULE_NAME', 'estoque_servicos');

hooks()->add_action('admin_init', 'estoque_servicos_init_menu_items');

/**
 * Register activation module hook
 */
register_activation_hook(ESTOQUE_SERVICOS_MODULE_NAME, 'estoque_servicos_activation_hook');

function estoque_servicos_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
 * Register language files, must be registered if the module is using languages
 */
register_language_files(ESTOQUE_SERVICOS_MODULE_NAME, [ESTOQUE_SERVICOS_MODULE_NAME]);


/**
 * Init module menu items in setup in admin_init hook
 * @return null
 */
function estoque_servicos_init_menu_items()
{
    $CI = &get_instance();

    if (has_permission('estoque_servicos', '', 'view')) {
        $CI->app_menu->add_sidebar_menu_item('estoque-servicos', [
            'name'     => _l('estoque_servicos'),
            'href'     => admin_url('estoque_servicos'),
            'position' => 20,
            'icon'     => 'fa fa-archive',
        ]);
    }
}
