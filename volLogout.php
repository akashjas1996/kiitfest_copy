<?php
  require_once('db_connection.php');
  echo '<script type="text/javascript">';
    unset($_SESSION['myusername']);
    session_destroy();
    echo 'setTimeout(function(){window.location.href = "index.php";},100)';
    echo '</script>';
  //header( "Refresh:1; url=index.php", true, 303);//

?>
