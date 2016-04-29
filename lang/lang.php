<?php
	//lang
	if( isset($_GET["lang"]) ){
		if( $_GET["lang"] == 'en' || $_GET["lang"] == 'tc' ){
			$lang = $_GET["lang"];
		}else{
			$lang = 'tc';
		}
	}else{
		$lang = 'tc';
		header("Location:?lang=tc");
	}

	//get lang form link
	include_once dirname(__FILE__)."../../lang/lang.$lang.php";