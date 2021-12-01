<?php 

	//Retorna la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}

	function base_files_url()
	{
		return "https://apps.contactamos.co/prenomina/plantanorte/Generales/Files/";
	}

	//Muestra información formateada
	function dep($data)
	{
		$format = print_r("<pre>");
		$format = print_r($data);
		$format = print_r("</pre>");

		return $format;
	}

	//Elimina exceso de espacios en palabras
	function strClean($strCadena)
	{
		$string = preg_replace(['/\s+/','/^\s|\s$/'], [' ',''], $strCadena);	
		$string = trim($string); //ELimina espacios en blanco al inicio y al final
		$string = stripslashes($string); //Elimina las \ invertidas
		$string = str_ireplace("<script>", "", $string);
		$string = str_ireplace("</script>", "", $string);
		$string = str_ireplace("<script src>", "", $string);
		$string = str_ireplace("<script type=>", "", $string);
		$string = str_ireplace("SELECT * FROM", "", $string);
		$string = str_ireplace("DELETE FROM", "", $string);
		$string = str_ireplace("INSERT INTO", "", $string);
		$string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
		$string = str_ireplace("DROP TABLE", "", $string);
		$string = str_ireplace("OR '1'='1'", "", $string);
		$string = str_ireplace('OR "1"="1"', "", $string);
		$string = str_ireplace('OR ´1´=´1´', "", $string);
		$string = str_ireplace("is NULL; --", "", $string);
		$string = str_ireplace("LIKE '", "", $string);
		$string = str_ireplace('LIKE "', "", $string);
		$string = str_ireplace("OR 'a'='a", "", $string);
		$string = str_ireplace('OR "a"="a', "", $string);
		$string = str_ireplace("OR ´a´=´a", "", $string);
		$string = str_ireplace("--", "", $string);
		$string = str_ireplace("^", "", $string);
		$string = str_ireplace("[", "", $string);
		$string = str_ireplace("]", "", $string);
		$string = str_ireplace("==", "", $string);

		return $string;
	}

	//Genear una contraseña de 10 caracteres
	function passGenerator($length = 10)
	{
		$pass = "";
		$longitudPass = $length;
		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYSabcdefghijklmnopqrstuvwxyz1234567890";
		$longitudCadena = strlen($cadena);

		for($i = 1; $i < $longitudPass; $i++)
		{
			$pos = rand(0, $longitudCadena - 1);
			$pass .= substr($cadena, $pos, 1);
		}

		return $pass;
	}

	//Genear un token
	function token($length = 10)
	{
		$r1 = bin2hex(random_bytes(10));
		$r2 = bin2hex(random_bytes(10));
		$r3 = bin2hex(random_bytes(10));
		$r4 = bin2hex(random_bytes(10));
		$token = $r1 . "-" . $r2 . "-" . $r3 . "-" . $r4;		

		return $token;
	}

	//Delimitadores decimal y millar Ej: 24,1989.00
	const SPD = ",";
	const SPM = ".";

	//Símbolo de moneda
	const SMONEY = "$";

	//Formato para valores monetarios
	function formatMoney($cantidad)
	{
		$cantidad = SMONEY . number_format($cantidad,2,SPD,SPM);

		return $cantidad;
	}

	function formatMoneySS($cantidad)
	{
		$cantidad = number_format($cantidad,2,SPD,SPM);

		return $cantidad;
	}

	//Formato fecha
	function formatDate($fecha)
	{
		if ($fecha != "0000-00-00"){

			if ($fecha != ""){

				$fecha = date("d/m/Y", strtotime($fecha));

			}
		} else{
			$fecha = "";
		}

		return $fecha;
	}

	//Formato tiempo
	function formatTime($fechahora)
	{
		if($fechahora != ""){ $fechahora = date("d/m/Y h:i a", strtotime($fechahora)); }

		return $fechahora;
	}

	//Formato fecha semana
	function formatDateWeek($fecha)
	{	
		$semana = ["domingo","lunes","martes","miércoles","jueves","viernes","sábado"];

		if($fecha != ""){ $fecha = $semana[date("w", strtotime($fecha))] . ", " . date("d/m/Y", strtotime($fecha)); }

		return $fecha;
	}

	//Formato para valores númericos
	function formatNumber($cantidad)
	{
		$cantidad = number_format($cantidad,0,SPD,SPM);

		return $cantidad;
	}	

	function formatDecimal($cantidad)
	{
		$cantidad = number_format($cantidad,2,SPD,SPM);

		return $cantidad;
	}	

?>