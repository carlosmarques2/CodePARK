<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login | CodePARK</title>
</head>

<body style="background-color: rgb(246, 249, 250);">
    <div class="container w-100">
        <div class="text-center mt-5 mb-4">
            <a href="login.php" class="tituloSite"><img class="fluid" src="img/qrcodescan_120401.png" alt="" width="130" height="130">
                <h4>CodePARK</h4>
            </a>
        </div>
        <div class="row justify-content-center" style="margin: 0px 4px 0px 4px;">
            <div class="card col-12 col-lg-4">
                <div class="card-body">
                    <form class="formularioLogin" action="index.php">
                        <div class="mb-3">
                            <label for="usuario" class="form-label email"><h6 class="m-0">Nome de Usuário ou Email</h6></label>
                            <input type="email" class="form-control" id="usuario" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="senha" class="form-label senha"><h6 class="m-0">Senha</h6></label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input checkLembrar" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
                        </div>
                        <hr class="my-6">
                        <div class="mb-3">
                            <button type="submit" class="col-12 btn btn-success mb-2">Entrar</button>
                            <button type="submit" class="col-12 btn btn-primary mb-2">Cadastrar</button>
                        </div>
                        <div>
                            <a href="#" class="text-center"><h6>Esqueceu a Senha?</h6></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>