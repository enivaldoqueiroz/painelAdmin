<?php require ('./config/config.inc.php'); ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= TITULO ?></title>

    <link rel="stylesheet" href="css/normalize.css" type="text/css">    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css" type="text/css" />

</head>
<body>

    <div class="container-fluid">
    
    <?php    
    require('./pag/login.php'); 

    //Testando a atulização das informações no banco de dados
    $Dados = "user_email = 'deu@certo.com', user_nome = 'Deu Certo da Costa', user_senha = 'deu_certo'";
    $Termos = "WHERE user_id < 10";
    $Up = new atualizar();
    $Up-> Query('Users', $Dados, $Termos);
    
    echo " {$Up->getResultados()} Resultado(s) Atulizados(s) ";

        
    
    /*
    //Testando a inserção no banco de dados
        $Criar = new criar;
        $Colunas = " user_nome, user_email, user_senha ";
        $Valor = " 'Rodrigo', 'rodrigo@rodrigo.com.br', '112233' ";
        $Criar->Query('Users', $Colunas, $Valor);
        var_dump($Criar->getResultados());

    //Instanciando o obejto ler  
        $Ler = new ler;
        $Ler->Query("Users");
        //Testando a Leitura do banco de dados
        //extrair os resultados
        $User = $Ler->getResultados() [0];
        extract($User);
        echo '<hr>';
        echo "Meu nome é {$user_nome} estou cadastrado com e-mail {$user_email} minha senha é {$user_senha}";

    //echo '<pre>';
    //var_dump($Ler->getResultados()[0] ["user_nome"]);

    //Instanciando o obejto conecta para verificação da conecção do banco de dados 
        $Conn = new conecta;
        $Conn::Conn();
        var_dump ($Conn);  
        


    */
    
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    -->
    
    
    

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </div>

</body>
</html>