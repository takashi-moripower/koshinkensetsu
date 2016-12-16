<?php

function get_header() {
	require Config::BASE_DIR . Config::PARTS_PATH . 'header.php';
}

function get_footer() {
	require Config::BASE_DIR . Config::PARTS_PATH . 'footer.php';
}

function get_title() {
	return Config::TITLE;
}

function getFile() {

	$BASE_URL = Config::BASE_URL;

	$url = filter_input(INPUT_ENV, "REQUEST_URI");

	if (strpos($url, $BASE_URL) == 0) {
		$file_name = substr($url, strlen($BASE_URL));
	} else {
		$file_name = NULL;
	}

	$file = "pages/{$file_name}.php";
	
	if (!is_readable($file)) {
		$file = "pages/index.php";
		$file_name = "index";
	}

	Main::$file_name = $file_name;
	return $file;
}

class Html {

	static function css($filenames) {
		if (!is_array($filenames)) {
			$filenames = [$filenames];
		}

		ob_start();
		
		foreach ($filenames as $filename) {
			if( strpos( $filename , '.css' ) == false ){
				$filename .= '.css';
			}
			
			$file_local = Config::BASE_DIR.Config::CSS_PATH.$filename;
			$file_global = Config::BASE_URL.Config::CSS_PATH.$filename;

			
			if (is_readable($file_local)) {
				echo '<link rel="stylesheet" href="' . $file_global . '">';
			}
		}
		$result = ob_get_contents();
		ob_end_clean();
		
		return $result;
	}
	
	static function image( $filename ){
		return Config::BASE_URL.Config::IMG_PATH.$filename;
	}
	
	static function url( $page = "" ){
		return Config::BASE_URL.$page;
	}

}

class Main {

	static $file_name;

}
