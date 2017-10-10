<?php

#Sortowanie malejace

$liczby = array(1, 2 , 3, 4, 5);
rsort($liczby);

for ($k=0; $k <= 4; $k++) //pętla wypisująca wartości
  echo $liczby[$k]."<br \>"; 
  
echo '<hr>';  
#Sortowanie roznace

$liczby = array(1, 2 , 3, 4, 5);
asort($liczby);

for ($k=0; $k <= 4; $k++) //pętla wypisująca wartości
  echo $liczby[$k]."<br \>";   
  
  
echo '<hr>';    
#Sortowanie bąbelkowe

$tabela=array('12','123','1','5','756','234','43','24');
$n=8; 
 
for($i=$n;$i>=0;$i--){     
 
	for($j=0;$j<$i-1;$j++){
	 
		if($tabela[$j]>$tabela[$j+1]){ 
			$tmp=$tabela[$j];  
			$tabela[$j]=$tabela[$j+1];
			$tabela[$j+1]=$tmp;
		}
	}
}
 
for($i=0;$i<$n;$i++) echo($tabela[$i].'  '); //wypisanie posortowanych wartosci tabeli  