<?php
    // Esta deve ser a 1a chamada, não pode ter nenhum echo antes
    session_start();
?>

<!DOCTYPE html>
<html>  
    <head>
        <title>Captha feito em PHP</title>
    </head>
    <h4>Captha feito em PHP - Exemplo de Uso</h4>
    <br>
    <br>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Usuário: <input type="text" name="user"><br><br>
        Senha: <input type="password" name="pass"><br><br>
        <img src='captcha/gera.php' alt='c&oacute;digo captcha' /><br>
        <input type="text" name="captcha" 
            placeholder="Digite o código acima aqui" size="22"><br>
        <br>
        <br>
        <input type="submit" name="send" value="Entrar" />
    </form>

<?php

if (isset($_POST['send'])) { 

    if ($_SESSION['captcha']!= $_POST['captcha']) {
        echo "<br>";
        echo "O captha informado est&aacute; inv&aacute;lido, digite novamente";
    }

    if ($_SESSION['captcha'] == $_POST['captcha']) {
        echo "<br>";
        echo "Tudo certo, vamos continuar...";
    }

    /*
    Para alguma depuração

    var_dump($_POST);
    echo "<hr>";
    var_dump($_SESSION);

    */

}

?>

</html>