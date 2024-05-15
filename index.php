<?php
 $array =array('murilo','caio','carol','murilo','jenifer');

$arrayRepetido = array();

for ($i=0; $i < count($array); $i++) { 
    $valorAtual = $array[$i];
    if(!isset($arrayRepetido[$valorAtual])){
        $arrayRepetido[$valorAtual] = 0;

    }else {
        $arrayRepetido[$valorAtual]++;
    }
}

foreach ($arrayRepetido as $key => $value) {
    echo $key;
    echo $value;
    echo '<br>';
}

?>