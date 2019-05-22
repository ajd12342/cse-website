	<?php
	if(file_exists("numberOfHits.txt")){
		$f=fopen("numberOfHits.txt", "r");
		$count=fread($f,filesize("numberOfHits.txt"));
		fclose($f);
		$count=(int)$count+1;
		$f=fopen("numberOfHits.txt", "w");
		fwrite($f, $count);
		fclose($f);
		echo $count;
	}else{
        $f=fopen("numberOfHits.txt", "w");
        $count=1;
		fwrite($f, $count);
		fclose($f);
		echo $count;
	}
	?>
