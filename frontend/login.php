<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />

        <title>++Vegan - Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    </head>

    <body>
        
        
        <?php
            include_once 'header.php';
        ?>

    <style>

        body{
            margin: 0px;
            padding: 0px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color:rgb(255, 244, 213);
        }

        input{
            width: 100%;
        }

        

        .corpoLogin{
            border: 2px;
            padding: 20px;
            box-shadow: 5px 5px 10px rgb(121, 121, 121);
            background-color: white;
        }

        form div:last-child{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 10px;
        }

        form{
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }


    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
 
    
    <br>

    <div class="container-sm">
        <div class="row corpoLogin">
          <h3 class="display-5 text-center" style="color: #92a34f;">Login</h3>
          <hr>            
                <form method="POST"  action="../backend/verificar_login.php">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email" class="form-label">Email</label>                    
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                        <label for="senha" class="form-label">Senha</label>                    
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-dark">Entrar</button>
                        <a href="cadastro.php" role='button' class='btn btn-outline-dark ms-2'>N??o possui uma conta?</a>
                    </div>
                    
                </form>
            
        </div>
    </div>

            <footer class="py-5">
                <div class="bg-dark text-light fixed-bottom d-flex justify-content-between py-4 border-top">
                    <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                </div>
            </footer>	

    </body>

</html>

