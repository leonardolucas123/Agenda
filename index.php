<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>CRUD - Contato - PHP Profissional</h1>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0);" id="listar_contato"><i class="glyphicon glyphicon-th-list"></i>
                            Listar</a></li>
                    <li><a href="javascript:void(0);" id="novo_contato"><i class="glyphicon glyphicon-plus"></i>
                            Novo</a></li>
                </ul>
            </div>
        </nav>
        <div id="carregando" style="display: none; text-align: center;">
            <img src="./resources/common/images/carregando.gif" />
        </div>
        <!-- exibição de conteúdo -->
        <div id="conteudo"></div>
        <!-- caixa de exclusão -->
        <div id="excluir_contato_modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Excluir Contato</h4>
                    </div>
                    <div class="modal-body">
                        <p>Confirma a exclusão do contato?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="contato_id" value="" />
                        <button type="button" id="excluir" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="./js/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/crud.js"></script>


</body>

</html>