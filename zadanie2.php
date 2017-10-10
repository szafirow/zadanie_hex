<?php
#zlicz liczbe zer od 0 do n / n wprowadzamy
//substr_count


function policzZera($n){
$count=0;
	for($i=0;$i<=$n;$i++){
		
		if(substr_count($i, '0')>=1){
			$count++;
		}
	}
	
	echo $count;
}


$n = 105;
policzZera($n);