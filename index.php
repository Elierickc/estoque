<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Inclui o cabeçalho do Perfex CRM
include(APPPATH . 'views/admin/includes/header.php');

// Inclui um menu de navegação personalizado para o módulo
include(APPPATH . 'views/admin/estoque_personalizado/menu.php');

// Conteúdo da página
echo $content;

// Inclui o rodapé do Perfex CRM
include(APPPATH . 'views/admin/includes/footer.php');
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Inclui o cabeçalho do Perfex CRM
include(APPPATH . 'views/admin/includes/header.php');

// Inclui um menu de navegação personalizado para o módulo
include(APPPATH . 'views/admin/estoque_personalizado/menu.php');

// Inclui o formulário de cadastro de produtos
include(APPPATH . 'modules/estoque_personalizado/views/admin/produtos/form.php');

// Lista os produtos cadastrados
include(APPPATH . 'modules/estoque_personalizado/views/admin/produtos/lista.php');

// Inclui o rodapé do Perfex CRM
include(APPPATH . 'views/admin/includes/footer.php');
