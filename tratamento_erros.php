<?php
  try{
    echo '<h3> *** try  ***</h3>';

    /* $sql = 'select * from clientes';
    mysqli_query($sql);
 */
    if(!file_exists('require_arquivo.a.php')){
        throw new Exception('o arquivo deveria estar disponivel'. date('d/m/y H:i') .'as x horas mas não estava
        vamos seguir mesmo assim');
    }

  }catch(error $e){
    echo '<h3> *** catch error ***</h3>';
    echo '<p style="color: red">' . $e .' </p>';
  } catch(Exception $e) {

    echo '<h3> *** catch Exception ***</h3>';
    echo '<p style="color: red">' . $e .' </p>';
  }

  finally{
   echo '<h3> *** finaly  ***</h3>';
  }
?>