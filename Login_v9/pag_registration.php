<!DOCTYPE html>
<html lang="en">

<head>
    <title>IFSbook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/style_login.css">
    <link rel="stylesheet" type="text/css" href="css/style_registration.css">
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/pop_up.css">
    <script src="js/main.js"></script>
    <!--===============================================================================================-->


</head>

<body>


    <div class="container-login100" style="background-image: url('Imagens/gradient.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
  <form action="./php_methods/registration.php" method="post" name="FormCadastro" id="FormCadastro" class="login100-form validate-form">
                <span class="login100-form-title p-b-37">
                    Primeiros passos
                </span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Insira seu usuário">
                    <input class="input100" type="text" id="input4" name="input4" placeholder="Seu usuário">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Insira seu email">
                    <input class="input100" type="email" id="input3" name="input3" placeholder="Seu email">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="coloque a senha">
                    <input class="input100" type="password" id="input1" name="input1" placeholder="Sua senha">
                    <span class="focus-input100"></span>

                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="showPassword('input1')"></i>
                    </span>

                </div>


                <div class="wrap-input100 validate-input m-b-25" data-validate="Repita a senha">
                    <input class="input100" type="password" id="input2" name="input2"
                        placeholder="Confirme sua senha">
                    <span class="focus-input100"></span>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" id="eye2" onclick="showPassword('input2')"></i>
                    </span>

                </div>



                <div class="container-login100-form-btn">
                    <button type=" " onclick="ValidatePassword('input4','input3','input1','input2')" class="login100-form-btn">
                    
                    <i class="fa fa-long-arrow-right fa-3x" aria-hidden="true"></i>
                    </button>


                </div>

                <div class="text-center p-t-57 p-b-20">
                    <span class="txt1">
                        Ou acesse com
                    </span>
                </div>

                <div class="flex-c p-b-112">
                    <a href="#" class="login100-social-item">
                        <i class="fa fa-facebook-f"></i>
                    </a>

                    <a href="#" class="login100-social-item">
                        <img src="Imagens/images/icons/icon-google.png" alt="GOOGLE">
                    </a>
                </div>

                <div class="text-center">
                    <a href="pag_login.php" class="txt2 hov1">
                        Entrar
                    </a>
                </div>
            </form>


        </div>
    </div>
   
    <div class="popup" id="modal">
        <div class="content">
        <i class="fa fa-frown-o" aria-hidden="true"></i>
            <h2>Ops, temos um problema.</h2>
            <p>Pelo visto esse usuário já existe, acesse nossa página de login para entrar ou  cadastre-se novamente.  </p>
                <div class="inputBox"><input onclick="window.location.href='pag_login.php'" type="submit" value="Acessar" class="btn"></div>
        </div>
        <a class="fa fa-close" onclick="modalToggle();"></a>
    </div>
    
    <?php

    if(isset($_GET['exists']) && is_string($_GET['exists'])){
    echo "<script>
    const modal = document.getElementById('modal');
    modal.classList.toggle('active');
    </script>";
    }

    ?>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>



</body>


</html>