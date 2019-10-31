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
                        <form style="margin-top: 20px;">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <input type="categoria" class="form-control" id="categoria" placeholder="">
                            </div>
                            <div>
                                <button type="submit" class="btn" style="background-color: #008080; color:white">Cadastrar</button>
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
                                        <h5>Categoria</h5>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Categoria">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </nav>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-md-12">
                            <div class="row" style="margin-top:30px;">
                                <div class="col-md-12" >
                                    <table class="table table-striped table-bordered" id="table">
                                        <thead class="col-md-12">
                                            <tr>
                                                <th>Cód.</th>
                                                <th>Categoria</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="col-md-12">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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
