<?php
/*
|-------------------------------|
| PadsanCMS						|
|-------------------------------|
| UploadCenter Version v1.0		|
|-------------------------------|
| Web   : www.PadsanCMS.com		|
| Email : Info@PadsanCMS.com	|
| Tel   : +98 - 26 325 45 700	|
| Fax   : +98 - 26 325 45 701	|
|-------------------------------|
*/
class QR{
	/* Default QR Parameters */
	var $data = '';
	var $width = 200;
	var $height = 200;
	var $charset = 'utf-8';
	var $error = 'H';

	/* Google Chart URI */
	var $apiuri = 'https://chart.googleapis.com/chart?';
	var $query;

	/* Cache Settings */
	var $cache = true;
	var $cacheDir = 'cache/';
	var $cachePath;

	/**
	* __construct
	* @param string $data
	*/
	function __construct($data){
		$this->data = $data;
	}

	/**
	* getQR
	* @return void
	*/
	function getQR(){
		$this->query = $this->query();
		header('Content-type: image/png');

		if ($this->cache){
			$this->cachePath = $this->cache($this->query);

			/* if cached if exist, simple read cached file */
			if (file_exists($this->cachePath)){
				readfile($this->cachePath);
			}else {
				$this->newQR();
			}
		}else{
			$this->newQR();
		}
	}

	/**
	* New QR From Google's Server
	*/
	function newQR(){
		$url=$this->apiuri . $this->query;

		/* download file from google server */
		$data = $this->httpRequest($url);

		$img = imagecreatefromstring($data);

		switch ($this->cache){
			case true:
			imagepng($img);
			imagepng($img, $this->cachePath);
			break;

			default:
			imagepng($img);
			break;
		}
		imagedestroy($img);
	}

	/**
	* config
	* @param array
	*/
	function config($args){
		$this->width = isset($args['width']) ? $args['width'] : $this->width;
		$this->height = isset($args['height']) ? $args['height'] : $this->height;
		$this->charset = isset($args['charset']) ? $args['charset'] : $this->charset;
		$this->error = isset($args['error']) ? $args['error'] : $this->error;
	}

	/**
	* query
	* @return string
	*/
	function query(){
		// url queries
		$query = array(
		  'cht' => 'qr',
		  'chs' => $this->width .'x'. $this->height,
		  'choe' => $this->charset,
		  'chld' => $this->error,
		  'chl' => $this->data
		);

		// full url
		return http_build_query($query);
	}
  
	function cache($query){
		if(!file_exists($this->cacheDir))
			@mkdir($this->cacheDir);

		return $this->cacheDir . sha1($query) . '.txt';
	}
  
	function httpRequest($url){
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
		$data=curl_exec($ch);
		curl_close($ch);

		return $data;
	}
}
?>