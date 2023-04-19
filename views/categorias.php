<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <!-- Formulário para adicionar uma nova categoria -->
                <form method="post" action="<?php echo base_url('admin/estoque_servicos/adicionar_categoria'); ?>">
                    <div class="form-group">
                        <label for="nome_categoria">Nome da categoria:</label>
                        <input type="text" class="form-control" id="nome_categoria" name="nome_categoria" placeholder="Digite o nome da categoria" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h2>Categorias de Serviços</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $categoria) : ?>
                            <tr>
                                <td><?php echo $categoria['id']; ?></td>
                                <td><?php echo $categoria['nome']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
