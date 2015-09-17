<?php



?>
<form method="POST">
  <input type="text" placeholder="string" name="string" />
    <input type="submit"/>
  </form>

<?php
if(isset($_POST['string'])) {
$string = isset($_POST['string']) ? $_POST['string'] : '';
echo $string . "<br>";}
require_once('mylib.php');
echo dateTime();
echo $_SERVER['QUERY_STRING'];
?>
