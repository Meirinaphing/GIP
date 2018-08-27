
<?php
$intcektgl=1;
$intcektgl1="b";
if(($intcektgl>0 && $intcektgl1=="b") || ($intcektgl>0 &&   $intcektgl1>0) ){
	echo 'asd';
}

$intcektgl=1;
$intcektgl1="b0";
if(($intcektgl>0 && $intcektgl1=="b") || ($intcektgl>0 &&   $intcektgl1!='b0') ){
	echo 'asd';
}

?>