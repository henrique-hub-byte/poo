<?php

use A\Cliente;

    require './bibliotecas/lib1/lib1.2.php';
    require './bibliotecas/lib2/lib2.1.php';

    use A\Cliente as C1;
    use B\Cliente as C2;

    $cliente1 = new C1();

    echo '<pre>';
    print_r($cliente1);
    echo '</pre>';

    echo '<hr>';

    $cliente2 = new C2;
    echo '<pre>';
    print_r($cliente2);
    echo '</pre>';

?>