<?php
$estiloPagina = 'destinos.css';
require_once 'header.php';
?>
    <form action="#" class="container-lab formulario-pesquisa-paises">
        <h2>Conheça nossos clientes</h2>
        <select name="clientes" id="clientes">
            <option value="">--Selecione--</option>
            <?php
            $clientes = get_terms(array('taxonomy' => 'clientes'));
            foreach ($clientes as $cliente):?>
                <option value="<?= $cliente->name ?>"
                <?= !empty($_GET['clientes']) && $_GET['clientes'] === $cliente->name ? 'selected' : '' ?>><?= $cliente->name ?></option>
            <?php endforeach;
            ?>
        </select>
        <input type="submit" value="Pesquisar">
    </form>
<?php

if(!empty($_GET['clientes'])) {
    $paisSelecionado = array(array(
        'taxonomy' => 'clientes',
        'field' => 'name',
        'terms' => $_GET['clientes']
    ));
}

$args = array(
    'post_type' => 'clientes',
    'tax_query' => !empty($_GET['clientes']) ? $paisSelecionado : ''
);
$query = new WP_Query($args);
if ($query->have_posts()):
    echo '<main class="page-clientes">';
    echo '<ul class="lista-clientes container-lab">';
    while ($query->have_posts()): $query->the_post();
        echo '<li class="col-md-3 clientes" >';
        the_post_thumbnail();
        the_title('<p class="titulo-clientes">', '</p>');
        the_content();
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</main>';
endif;
require_once 'footer.php';