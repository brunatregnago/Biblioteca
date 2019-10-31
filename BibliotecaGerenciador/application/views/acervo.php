<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador Biblioteca</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .btn{margin:0 5px;}
            .btn:hover{background-color: #555555;}
            .btn a{color:white;text-decoration: none;}
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row" style="margin-top:30px;">
                <div class="col-md-6">
                    <h5 style="margin:5px 5px 0 50px">Acervo</h5>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-dark"><a href="#">Acervo</a></button>
                    <button type="button" class="btn btn-dark"><a href="#">Cadastrar Livro</a></button>
                    <button type="button" class="btn btn-dark"><a href="#">Cadastrar Autor</a></button>
                    <button type="button" class="btn btn-dark"><a href="#">Editar</a></button>
                </div>
            </div>
            <div class="row" style="margin-top:30px;">
                <div class="col-md-12" >
                    <table class="table table-striped table-bordered" id="table">
                        <thead class="col-md-12">
                            <tr>
                                <th>Cód.</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Autor</th>
                                <th>Ex.</th>
                                <th>Cat.</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="col-md-12">
                            <tr>
                                <td>00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php
        ?><!--
foreach ($produto as $p) {
    echo '<tr>';
    // echo '<button type="button" class="btn btn-light mr-4 mb-3 mt-4 shadow text-center"><img class="img-fluid mb-2" style="max-height:150px; max-width:150px;" src="' . $this->config->base_url() . 'uploads/' . $e->imagem_produto . '">';
    echo '<td>' . $p->id_produto . '</td>';
    echo '<td>' . $p->nome_produto . '</td>';
    echo '<td>';
    if ($p->imagem_produto === Null) {
        echo '<img style="height:50px; width:50px;" src="http://127.0.0.1/MercadoPI/uploads/noimage.png"/>';
    } else {
        echo '<img style="height:50px; width:50px;" src="http://127.0.0.1/MercadoPI/uploads/' . $p->imagem_produto . '"/>';
    }
    echo '</td>';
    echo '<td>' . $p->peso_produto . ' ' . $p->medida . '</td>';
    echo '<td>' . 'R$ ' . $p->valor_unitario_produto . '</td>';
    echo '<td>' . $p->departamento . '</td>';
    echo '<td>' . $p->categoria . '</td>';
    echo '<td>' . $p->subcategoria . '</td>';
    echo '<td>'
    . '<a class="btn btn-warning text-white" href="' . $this->config->base_url() . 'index.php/Produto/alterar/'
    . $p->id_produto . '"><i class="fas fa-edit"></i></a>'
    . '<a class="btn btn-danger" href="' . $this->config->base_url() . 'index.php/Produto/deletar/'
    . $p->id_produto . '"><i class="fas fa-trash"></i></a>'
    . '</td>';
    echo '</tr>';
}
?>-->



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
