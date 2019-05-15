<?php

require_once('Nodo.php');



function generarBucle(Nodo $lista) : Nodo{
    $p = $lista;
    while ( $p->getNext() !== null ) {
        $p = $p->getNext();        
    }
    $p->setNext($lista);
    return $lista;
}

function imprimir_list( Nodo $lista){
    $respuesta = '';
    $p = $lista;
    while ($p->getNext() !== null) {
        $respuesta .= $p->getValue().", ";
        $p = $p->getNext();
    }
    $respuesta .= $p->getValue()."\n";
    echo $respuesta;
}

function ordenar( Nodo $lista){    

    $actual = $lista;
    while ($actual->getNext() !== null) {
        $siguiente = $actual->getNext();
        while ($siguiente !== null) {
            if($actual->getValue() > $siguiente->getValue()){
                $t = $siguiente->getValue();
                $siguiente->setValue($actual->getValue());
                $actual->setValue($t);          
            }
            $siguiente = $siguiente->getNext(); 
        }    
        $actual = $actual->getNext();
        $siguiente = $actual->getNext();
    }
}

function hayBucle( Nodo $lista ){
    $nodos = [];
    $existe = false;
    $p = $lista;
    while ( $existe === false ) {
        $existe = in_array( $p,$nodos );        
        $nodos[] = $p;
        $p = $p->getNext();
        if ($p === null) {
            break;
        }
    }
    return $existe;
}
function dame_uno( Nodo $lista, int $numero){
    $p = $lista;
    if( $numero === 1 ){
        return $p;
    }else{
        return dame_uno( $p->getNext(),$numero -1 );
    }
}


$lista = new Nodo(5,new Nodo(15,new Nodo(2,new Nodo(34,new Nodo(1,null)))));


//ordenar($lista);
//imprimir_list( $lista);                  

$lista = generarBucle($lista);
imprimir_list( $lista);

//if ( hayBucle( $lista)){
//    echo 'hay buchle.\n';
//}else {
//    echo 'no hay buchle.\n';
//}
//
//print_r( dame_uno( $lista, 4));

