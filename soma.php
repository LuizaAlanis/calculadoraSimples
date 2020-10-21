<?php

    // Luiza 2 ° modular

    // Caso a caixa de texto esteja vazia ou possua um valor não-númerico
    if(!is_numeric($_POST['txtval1']) || !is_numeric($_POST['txtval2'])){
        // Volte para a página index
        header('location:index.html');
    }

    // Pegue os valores via POST das caixas de texto e faça a soma delas
    $valor1 = $_POST['txtval1'];
    $valor2 = $_POST['txtval2'];
    $res = $valor1 + $valor2;

    // Expondo o resultado
    echo "<div class='animated animatedFadeInUp fadeInUp'> 
        <h1> A soma dos números é $res </h1> 
        <br/>
        <button class='button'>
            <a href='index.html'> VOLTAR </a>
        </button>
    </div>";

    // Estilizando a página
    echo "<style type='text/css'>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');  
       
        body{
            padding: 100px;
            background-image: linear-gradient(to right, #4CB8C4, #3CD3AD);
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            color: #292929;
        }
        
        @keyframes fadeInUp {
            from {
              -webkit-transform: translate3d(0, 40px, 0);
                      transform: translate3d(0, 40px, 0);
            }
            to {
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
              opacity: 1;
            }
        }
        
        @-webkit-keyframes fadeInUp {
            from {
              -webkit-transform: translate3d(0, 40px, 0);
                      transform: translate3d(0, 40px, 0);
            }
            to {
              -webkit-transform: translate3d(0, 0, 0);
                      transform: translate3d(0, 0, 0);
              opacity: 1;
            }
        }
        
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
            -webkit-animation-duration: 1s;
            -webkit-animation-fill-mode: both;
        }
          
        .animatedFadeInUp {
            opacity: 0;
        }
          
        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }
        
        .button{
            border: 1px solid white;
            border-radius: 20px;
            height: 40px;
            margin: 10px;
            width: 160px;
            padding: 1px;
            background-color: #f1f1f113;
            color: #292929;
            outline: none;
        }
        
        a{
            text-decoration: none;
            color: #292929;
        }
    </style>";
?>