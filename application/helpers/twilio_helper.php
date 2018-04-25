<?php
	use Twilio\Rest\Client;
	//use Twilio\Jwt\ClientToken;
	include_once(APPPATH."libraries/twilio/vendor/autoload.php");

	function getTwilioConfig(){
		$twilio = array(
		  "id"      => "AC02d795462e67377716dbd07f065b1238",
		  "token" 	=> "2b41aea43a4b1c7194900d543c2d9c5c"
		);
		return $twilio;
	}


	function CallToOfficer($phoneNumber){

		$config= getTwilioConfig();
		$AccountSid = $config['id'];
		$AuthToken = $config['token'];

		$client = new Client($AccountSid, $AuthToken);
		
		try {
        	$call = $client->account->calls->create(
        	$phoneNumber,"+14242066751",
        	array("url" => "https://demo.twilio.com/welcome/voice/")
        	);
        	echo "Started call: " . $call->sid;
    	} catch (Exception $e) {
        	echo "Error: " . $e->getMessage();
    	}

	}


	function CallHistory(){

		$config= getTwilioConfig();
		$AccountSid = $config['id'];
		$AuthToken = $config['token'];
		$client = new Client($AccountSid, $AuthToken);
		foreach ($client->calls->read() as $call) {
    		echo $call->direction;
		}

	}





?>