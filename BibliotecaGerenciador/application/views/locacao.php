<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador Biblioteca</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:30px;">
                <div class="col-md-3" style=" border: 1px solid #EAF2F5;padding: 10px;">
                    <div class="col-md-12" style="margin: 10px;">
                        <h5>Locar</h5>
                        <form style="margin-top: 20px;">
                            <div class="form-group">
                                <label for="cdLivro">Código do livro<a href="#">[+livro]</a></label>
                                <input type="cdLivro" class="form-control" id="cdLivro" placeholder="ex: 000">
                            </div>
                            <div class="form-group">
                                <label for="cdUsuario">Código do usuário<a href="#">[+usuário]</a></label>
                                <input type="cdUsuario" class="form-control" id="cdUsuario" placeholder="ex: 000">
                            </div>
                            <div class="form-group">
                                <label for="dataDevolucao">Data de devolução</label>
                                <input type="dataDevolucao" class="form-control" id="dataDevolucao" placeholder="ex: 01/01/2019">
                            </div>
                            <div>
                                <button type="submit" class="btn" style="background-color: #008080; color:white">Locar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8" style="margin-left: 80px; border: 1px solid #EAF2F5">
                    <div class="col">
                        <div class="col-md-12">
                            <nav class="navbar" style="margin: 10px;">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <h5>Locados</h5>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Código do livro">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                        </nav>
                    </div>
                    </div>
                    <div class="col">
                        <div class="col-md-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-10">
                                            000 Pequeno Principe - autor
                                            <br>000 Bruna Zimmermann Tregnago
                                            <br>Término: 01/01/2019
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-success" style="margin-top: 5px;">Devolver</button>
                                            <p style="color:red;font-size: 14px;">R$ 5,00</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
