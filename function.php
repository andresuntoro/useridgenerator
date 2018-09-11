<?php

	/**
	* 
	*/
	class generateUserID{

		private $unik;
		private $start;
		private $length;
		private $hash;
		private $algo;
		
		function __construct($start = '0', $length = '7', $default_hash = 'md5')
		{
			$this->unik = uniqid(rand(), true);
			$this->start = $start;
			$this->length = $length;
			$this->hash = $default_hash;
		}

		public function generate($userdata = '', $upperchar = false)
		{
			//Set-Up Algo
			$this->algo = hash_hmac($this->hash, $userdata, $this->unik);
			//Generate
			$result = substr($this->algo, $this->start, $this->length);

			//Checking 
			if (!empty($userdata)) {

				//check the condition if the $uppercase is set to true or false
				if ($upperchar) {
					$result = strtoupper($result);
				}

				return $result;
			}
		}
	}


	/**
	* 
	*/
	function generateUserID($userdata = '', $upperchar = false){
		//Configuration
		$unik = uniqid(rand(), true);
		$start = 0;
		$length = 7;
		$algo = hash_hmac('md5', $userdata, $unik);
		//End Configuration

		//Generate
		$result = substr($algo, $start, $length);

		//Checking 
		if (!empty($userdata)) {

			//check the condition if the $uppercase is set to true or false
			if ($upperchar) {
				$result = strtoupper($result);
			}

			return $result;
		}
	}

?>
