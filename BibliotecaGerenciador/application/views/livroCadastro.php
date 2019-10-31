<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador Biblioteca</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .hr a{text-decoration: none;color: #000000; font-size: 13px;}
            .hr a:hover{text-decoration: none;color: #295; font-size: 13px;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9" style=" border: 1px solid #EAF2F5;margin: 50px 0 0 80px; ">  
                    <div class="col-md-12" style="margin-top:30px;">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Cadastro de Livro</h5>
                            </div>
                            <div class="col-md-2 hr">
                                    <a href="">Acervo</a>
                                    <a href=""style="margin-left:5px;">Categoria</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin: 10px;">
                            <form style="margin-top: 20px;">
                                <div class="form-group col-md-12">
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" id="titulo" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="subtitulo">Subtítulo</label>
                                    <input type="text" class="form-control" id="subtitulo" placeholder="">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="autor">Autor</label>
                                    <input type="text" class="form-control" id="autor" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="edicao">Edição</label>
                                            <input type="text" class="form-control" id="edicao" placeholder="">
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="exemplar">Exemplares</label>
                                                <input type="text" class="form-control" id="exemplar" placeholder="ex: 01">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Categoria<a href="">[+]</a></label>
                                                <select id="id_categoria" name="id_categoria" class="form-control">
                                                    <option selected></option>
                                                    <?php /*
                                                      foreach ($cidade as $cid) {
                                                      echo '<option value="' . $cid->id_cidade . '">' . $cid->nome_cidade . '</option>';
                                                      } */
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-11">
                                    <button type="submit" class="btn" style="background-color: #295; color:white">Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
