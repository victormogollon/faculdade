<?php
if (!empty($_POST['data'])) {
  file_put_contents('data.json' , $_POST['data']);
}else{

  echo file_get_contents('data.json');
}

?>