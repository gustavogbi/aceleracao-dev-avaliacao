<?php

require_once('ex1.php');

$obj = (new MyExpenses('02292465165', '25/02/2021'))->totalizaMes("Abril");

echo $obj;


 ?>