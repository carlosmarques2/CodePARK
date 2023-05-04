<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Proprietário | CodePARK</title>
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
                            <a class="nav-link active" href="cadastro.php">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="proprietarios.php">Proprietários</a>
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
                <li class="breadcrumb-item"><a href="proprietario.php">Proprietário</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Proprietário</li>
            </ol>
        </nav>
        <h2 class="h2 mb-3">Editar Proprietário</h2>
        <div class="row">
            <div class="col-12 col-sm-8">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form action="#" class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label h6">Nome</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom02" class="form-label h6">Sobrenome</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label h6">CPF</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label h6">Telefone</label>
                                <input type="text" class="form-control" id="validationCustom04" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label h6">Setor</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom06" class="form-label h6">Ocupação/Cargo</label>
                                <input type="text" class="form-control" id="validationCustom06" required>
                                <div class="invalid-feedback">
                                    Preencha este campo.
                                </div>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom07" class="form-label h6">Foto</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>