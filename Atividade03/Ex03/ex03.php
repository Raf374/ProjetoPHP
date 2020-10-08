<?php
    session_start();

    $_SESSION["nome"]=$_REQUEST['usa'];
    $_SESSION["senha"]=$_REQUEST['sen'];
    $etc="etecia";
    $cte="etecia238";

    if($usa==$etc && $sen==$cte){
        echo "<h1>Seja Bem-vindo</h1><br><br><h3>Autenticação realizada com sucesso</h3>";
        }
    else{echo "<h2>Você não tem permissão para vizualizar essa página</h2>";}
?>