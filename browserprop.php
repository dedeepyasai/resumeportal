<?php
function table($no,$i){
if($i>10){
	return false;
}else{
	echo $no.'*'.$i.' = '.$no*$i.'<br>';
	table($no,++$i);
}
}
$no=5;
$i=1;
table($no,$i);
?>
