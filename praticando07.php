<?php
    try {
        echo '<h3>**** try ****</h3>';
        /* $select = "select * from Clientes";
        mysqli_query($select); */

        if(!file_exists('arquivo_que_não_existe')){
            throw new Exception('o arquivo não esta disponivel, instanciamos um objeto nativo que vai car no catch de exeption');
        }
    }catch(ERROR $e){
        echo '<h3> *** catch Error ***</h3>';
        echo "deu ruim o select";
        echo '<p>Segue informação sobre o erro'. $e .'</p>';
    }catch(Exception $e){
        echo '<h3> *** catch Exception ***</h3>';
        echo "o arquivo n existe";
        echo '<p>Segue informação sobre o erro'. $e .'</p>';
    }


    finally{
        echo '<h3>**** finally ****</h3>';
    }

?>