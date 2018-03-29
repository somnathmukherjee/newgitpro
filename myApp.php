<?php
namespace App\lib2;
header('Content-type: text/plain');
require_once('lib1.php');
require_once('lib2.php');


echo MyConst;
echo '</br>';
echo myFunction()."<br>";
echo myClass::whoAmI()."<br>";