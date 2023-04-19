<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/includes/head'); ?>
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
                
                <!-- Conteúdo do relatório de disponibilidade -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Tabela com os dados dos serviços em estoque -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Validade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($servicos as $servico) : ?>
                                    <tr>
                                        <td><?php echo $servico['nome']; ?></td>
                                        <td><?php echo $servico['quantidade']; ?></td>
                                        <td><?php echo $servico['validade']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('admin/includes/scripts'); ?>
</body>
</html>
