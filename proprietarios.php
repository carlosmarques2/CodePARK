<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <title>ILista de Proprietários | CodePARK</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark" aria-label="Light offcanvas navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start bg-dark" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
                <div class="offcanvas-header text-bg-dark">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">
                        CodePARK
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="proprietarios.php">Proprietários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="veiculos.php">Veículos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Painel Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="navbar-brand" href="index.php">CodePARK</a>
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/logo-admin.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small shadow" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">
                    <li><a class="dropdown-item" href="#">Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Principal</a></li>
                <li class="breadcrumb-item active" aria-current="page">Proprietários</li>
            </ol>
        </nav>
        <h2 class="h2 mb-3">Proprietários</h2>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="table-responsive m-2">
                        <table id="tabelaProprietarios" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Ocupação</th>
                                    <th>Informações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Alan</td>
                                    <td>Filho</td>
                                    <td>Coordenador</td>
                                    <td><a href="proprietario2.php" class="btn btn-outline-primary btn-sm">Acessar</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>José</td>
                                    <td>Souza</td>
                                    <td>Atendente</td>
                                    <td><a href="proprietario.php" class="btn btn-outline-primary btn-sm">Acessar</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fábio</td>
                                    <td>Silva Soares</td>
                                    <td>Aluno</td>
                                    <td><a href="proprietario3.php" class="btn btn-outline-primary btn-sm">Acessar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script> <!-- Bootstrap -->
    <script src="js/jquery-3.6.4.min.js"></script> <!-- jQuery -->
    <script src="js/jquery.dataTables.min.js"></script> <!-- DataTable -->
    <script src="js/dataTables.bootstrap5.min.js"></script> <!-- Bootstrap/DataTable -->
    <script>
        $(document).ready(function() {
            $('#tabelaProprietarios').DataTable({
                responsive: true,
                columnDefs: [{
                    targets: [0, 1, 2, 3, 4],
                    className: 'dt-right'
                }],
                language: {
                    url: "plugins/pt-BR-1.13.4.json"
                }
            });
        });
    </script>
</body>

</html>