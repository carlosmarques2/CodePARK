<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro de Usuário | CodePARK </title>
</head>

<body style="background-color: rgb(246, 249, 250);">
    <div class="container w-100">
        <div class="card col-12 col-lg-5 m-auto">
            <div class="card-header">
                <h5 class="mb-1">Cadastro de Usuário - CodePARK</h5>
            </div>
            <div class="card-body">
                <form class="form">
                    <div class="mb-3">
                        <label for="validationCustom01" class="form-label h6">Nome</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="invalid-feedback">
                            Preencha este campo.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="validationCustom02" class="form-label h6">Usuário</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="invalid-feedback">
                            Preencha este campo.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="usuario" class="form-label email h6">Email</label>
                        <input type="email" class="form-control" id="usuario" aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                            Preencha este campo.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label senha h6">Senha</label>
                        <input type="password" class="form-control" id="senha" required>
                        <div class="invalid-feedback">
                            Preencha este campo.
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="col-3 btn btn-primary mb-2">Cadastrar</button>
                        <button type="submit" class="col-3 btn btn-danger mb-2">Sair</button>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        Após o cadastro entre em contato com a administração para solicitar a ativação da conta.
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>