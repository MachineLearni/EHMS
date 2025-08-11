<?php 

// SpringEdge Send SMS class File 
/*
 * USE:
 *  
    include 'sendsms.php';
    $sendsms=new sendsms("1i6xxxxxxxxxxxxxx", "BUxxxx");
    $sendsms->send_sms("99xxxxxxxx", "test sms");
 */

class sendsms
{
 	private $api_url;
 	private $apikey;
 	private $senderid;

	function __construct($apikey,$senderid)
	{
		$this->api_url = 'https://instantalerts.co/api/web/send/?apikey=65ats54o74z9309t545098ih32597pr74&sender=SEDEMO&to=919035xxxxx&message=Test+message&format=json';
		$this->apikey = $apikey;
		$this->senderid = $senderid;
	}
	/**
	 * function to send sms
	 * 
	 */
	function send_sms($to, $message)
	{
		$type="xml";
		$message = urlencode($message);
		$params = "web/send/?apikey=$this->apikey&sender=$this->senderid&to=$to&message=$message";
		
		$this->execute($params);
	}
	
	
	/**
	 * function to process API request
	 */
	function execute($params)
	{
		$eurl = $this->api_url.$params;		
                $output = file_get_contents($eurl);
		return $output;
	}    
}
?>
