<?php
    $a=$_REQUEST['a'] . $p=$_REQUEST['p'];
    $imc=$p/($a*$a);

    echo "<h1>Resultado</h1></br>";
    echo "<h3>O resultado é: ";
    echo substr("$imc", 0, 5);
    //mereço um MB por usar "substr"??
    
    if($imc>25){echo "</br> Você esta acima do peso</h3>";} 
    elseif($imc>=18.5 && $imc<=24.9){echo "</br> Você esta saudavel";}
    else{echo "</br> Você esta abaixo do peso</h3>";}
?>
