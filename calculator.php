<?php
echo("Welke operatie wil je uitvoeren? (+, -, %)")  . PHP_EOL;
$a = 0;
$b = 0;
$c = readline("");

if($c === "+"){
    echo("Eerste getal?") . PHP_EOL;
    $a = readline("");
    if(is_numeric($a)){
        echo("Tweede getal?")  . PHP_EOL;
        $b = readline("");
        if(is_numeric($b)){
            $ans = $a + $b;
            echo($ans);
        }
        else{
            echo("Dit is helaas geen nummer!");
        }
    }
    else{
        echo("Dit is helaas geen nummer!");
    }
}

elseif($c === "-"){
    echo("Eerste getal?") . PHP_EOL;
    $a = readline("");
    if(is_numeric($a)){
        echo("Tweede getal?")  . PHP_EOL;
        $b = readline("");
        if(is_numeric($b)){
            $ans = $a - $b;
            echo($ans);
        }
        else{
            echo("Dit is helaas geen nummer!");
        }
    }
    else{
        echo("Dit is helaas geen nummer!");
    }
}

elseif($c === "%"){
    echo("Eerste getal?") . PHP_EOL;
    $a = readline("");
    if(is_numeric($a)){
        echo("Tweede getal?")  . PHP_EOL;
        $b = readline("");
        if(is_numeric($b)){
            $ans = $a % $b;
            echo($ans);
        }
        else{
            echo("Dit is helaas geen nummer!");
        }
    }
    else{
        echo("Dit is helaas geen nummer!");
    }
}

else {
   echo("'". $c . "'" . " Dit is geen geldige operatie");
}
?>