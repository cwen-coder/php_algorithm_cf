<?php
fscanf(STDIN,"%d",$count);
for($i = 0; $i < $count; $i++) {
	fscanf(STDIN, "%d%d",$m,$n);
	$j = $i+1;
	echo "Scenario #".$j.":\n";
	if(($m & 1) && ($n & 1)) fprintf(STDOUT, "%.2f",$m * $n + 0.41) ;
	else fprintf(STDOUT, "%.2f",$m * $n) ;
	echo "\n\n"; 
	
}
