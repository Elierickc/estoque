<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php $this->load->view('admin/includes/head'); ?>

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

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
                
                <!-- Conteúdo da lista de serviços -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tabela com os dados dos serviços -->
                        <table id="tabela-servicos" class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Data de Vencimento</th>
                                    <th>Disponibilidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($servicos as $servico) : ?>
                                    <tr>
                                        <td><?php echo $servico['nome']; ?></td>
                                        <td><?php echo $servico['validade']; ?></td>
                                        <td><?php echo $servico['quantidade'] > 0 ? 'Disponível' : 'Indisponível'; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inicialização do DataTables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tabela-servicos').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Portuguese-Brasil.json"
                }
            });
        });
    </script>

    <?php $this->load->view('admin/includes/scripts'); ?>
</body>
</html>
