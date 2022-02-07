<?php
	//Fully Qualified name
	spl_autoload_register(function (string $nomeDaClasse){
		//echo $nomeDaClasse."<br>";
		$dir = str_replace('cefet\\projeto', 'src', $nomeDaClasse);
		$dir = str_replace('\\', DIRECTORY_SEPARATOR, $dir);
		$nomeDoArquivo = $dir.'.php';

		if(file_exists($nomeDoArquivo)){
			//echo $nomeDoArquivo;
			require_once($nomeDoArquivo);
		}

	});
?>