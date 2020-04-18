<?php

//Autoload para usar em nosso namespace
spl_autoload_register(function($nameClass){

	//Isso pode dar problema ao subir para o servidor
	$nameClass = str_replace('\\', '/', $nameClass);
 
//	var_dump($nameClass);

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if(file_exists($filename)){
		require_once($filename);
	}
	//var_dump($filename);

});

?>