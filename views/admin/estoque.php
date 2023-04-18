<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

<div class="panel">
    <div class="panel-heading">
        <h4 class="panel-title">Gerenciar estoque</h4>
    </div>
    <div class="panel-body">
        <form method="post" action="<?php echo admin_url('estoque_personalizado/save'); ?>">
            <div class="form-group">
                <label for="produto">Produto</label>
                <select name="produto" class="form-control" required>
                    <option value="">Selecione um produto</option>
                    <?php foreach ($produtos as $produto) { ?>
                        <option value="<?php echo $produto['id']; ?>"><?php echo $produto['nome']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <input type="date" name="data" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<?php
$CI =& get_instance();
$CI->load->model('estoque_model');

$produtos = $CI->estoque_model->listar_estoque();

foreach ($produtos as $produto) {
    echo "<tr>";
    echo "<td>{$produto->id}</td>";
    echo "<td>{$produto->nome}</td>";
    echo "<td>{$produto->quantidade}</td>";
    echo "</tr>";
}
?>

<select name="produto" class="form-control" required>
    <option value="">Selecione um produto</option>
    <?php foreach ($produtos as $produto) { ?>
        <option value="<?php echo $produto['id']; ?>"><?php echo $produto['nome']; ?></option>
    <?php } ?>
</select>
