<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V9</title>
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
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_registration2.css">
    <!--===============================================================================================-->


</head>

<body>


    <div class="container-login100" style="background-image: url('Imagens/gradient3.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
  
            
          
         
             
            <form action="./php_methods/registration.php" method="post" name="FormCadastro" id="FormCadastro" class="login100-form validate-form">
                <span class="login100-form-title p-b-37">
                    Seu Perfil
                </span>
                 
                    <i class="fa fa-user fa-5x" aria-hidden="true"></i>
                    <div class="btn_profile"> 
                    <button type="" id="btn"class="login100-form-btn">
                Escolher foto de perfil
                </button>


                </div>

                <div class="wrap-input1000">
                <div class="wrap-input100 validate-input m-b-20" data-validate="Insira seu Nome Pessoal">
                    <input class="input100" type="text" id="input4" name="name_p" placeholder="Seu nome pessoal">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Insira sua instituição">
                    <input class="input100" type="text" id="input3" name="inst_pessoa" name="username" placeholder="Sua instituição de ensino">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-25" data-validate="Insira a data de nascimento">
                    <input class="input100" type="date" id="input1" name=_date_nasc" placeholder="Sua data de nascimento">
                    <span class="focus-input100"></span>

                  

                </div>


                <div class="wrap-input100 validate-input m-b-25" data-validate="Insira sua descrição">
                    <input class="input100" type="text" id="descricao100" name="desc"
                        placeholder="Sua descrição Pessoal">
                    <span class="focus-input100"></span>
                 
                  
                </div>



                <div class="container-login100-form-btn">
                    <button type="" id="btn1000" class="login100-form-btn">
                    
                  Finalizar
                   <i class="fa fa-long-arrow-alt-right"></i>
                    </button>


                </div>
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
 
</body>

</html>