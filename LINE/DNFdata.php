<?php

function DNF_Operating($inputStr,$userName) { 


		$googledataspi = "https://spreadsheets.google.com/feeds/list/1OfAW6yFnpSoZov_PeK6MP1u0msRNHXDR8jd7-Hekxyk/1/public/values?alt=json";
		$json = file_get_contents($googledataspi);
	    $data = json_decode($json, true); 

	    $序號 =  (int)explode("go",$inputStr)[1];

	    if($序號 > -1)
	    {
		return  buildTextMessage($data['feed']['entry'][$序號]['gsx$內容']['$t']);	
	    } 
}
