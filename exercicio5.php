<?php 

	$altura1 = 1.92;
	$altura2 = 1.96;
	$altura3 = 1.94;
	$idade1 = 23;
	$idade2 = 19;
	$idade3 = 54;
	$sexo1 = 'f';
	$sexo2 = 'f';
	$sexo3 = 'f';
	$media = 0;

	if($altura1 > $altura2 && $altura2 > $altura3){

		echo("A maior altura é: $altura1 e menor altura é: $altura3");

	}elseif($altura2 > $altura1 && $altura1 > $altura3){
		echo("A maior altura é: $altura2 e a menor é: $altura3");
	}elseif($altura3 > $altura1 && $altura1 > $altura2){
		echo("A maior altura é: $altura3 e a menor altura é: $altura2");
	}elseif($altura2 > $altura1 && $altura1 > $altura3){
		echo("A maior altura é: $altura3 e a menor é: $altura2");
	}elseif($altura1 > $altura3 && $altura3 > $altura2){
		echo("A maior altura é: $altura1 e a menor altura $altura2");
	}elseif($altura2 > $altura3 && $altura3 > $altura1){
		echo("A maior altura é; $altura2 e a menor altura é: $altura1");
	}elseif($altura3 > $altura2 && $altura2 > $altura1){
		echo("A maior altura é: $altura3 e a menor altura é: $altura1");
	}

	if($sexo1 == 'f' && $sexo2 == 'f'){
		$media = ($altura1 + $altura2)/2;
		echo("A media da altura das mulheres é: $media");
	}elseif($sexo1 == 'f' && $sexo3 == 'f'){
		$media = ($altura1 + $altura3)/2;
		echo("A média da altura das mulheres é: $media");
	}elseif($sexo2 == 'f' && $sexo3 == 'f'){
		$media=($altura2 + $altura3) / 2;
		echo("A média da altura das mulheres é: $media");
	}else{
		$media = ($altura1 + $altura2 + $altura3)/3;
		echo("A média da altura das mulheres é: $media ");
	}

		if($sexo1 == 'f' && $sexo2 =='f' && $sexo3 == 'm'){

			if($altura1 > $altura2 && $altura2 > $altura3);
			

			echo("")

		}


		
	


 ?>