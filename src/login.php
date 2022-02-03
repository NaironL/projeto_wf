

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Include the above in your HEAD tag -->

    <link rel="stylesheet" href="../assets/css/login.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <title>Login WF</title>
</head>
<body>

<div class="main">


    <div class="container">

        <div class="middle">
            <div id="login">

                <form action="script_login.php" method="post">

                    <fieldset class="clearfix">

                        <p ><span class="fa fa-user"></span><input type="text" name="user"  Placeholder="Nome de Usuario" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                        <p><span class="fa fa-lock"></span><input type="password" name="senha"  Placeholder="Senha" required></p> <!-- JS because of IE support; better: placeholder="Password" -->

                        <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"><a class="btn" href="../index.php" style="text-align: justify-all">Voltar</a></span>
                            <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Entrar"></span>
                        </div>
                    </fieldset>
                        <div>
                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                        </div>
                        <div class="alert alert-danger" style="font-size: 12px">
                            Usuário ou senha inválidos
                        </div>
                        <div>
                            <?php } ?>
                        </div>'
                </form>

                <div class="clearfix"></div>
                <div class="clearfix"></div>

            </div> <!-- end login -->
            <div class="logo">
                <img width="300" src="../assets/img/logo.png" alt="">
                <div class="clearfix"></div>
            </div>

        </div>

    </div>

</div>
</body>
</html>