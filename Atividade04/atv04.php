<?php
    $voto=$_REQUEST['voto'];
    if(!isset($_COOKIE['voto'])) {
        setcookie("voto", $voto,time()+3600*24*31);
        $msg="<h1>Obrigado por votar!!!</h1>";
    }
    else{
        $msg="<h1>Você ja votou!</h1>";
    }
    echo $msg
?>