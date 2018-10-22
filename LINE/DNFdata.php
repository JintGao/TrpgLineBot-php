<?php

function DNF_Operating($inputStr,$userName) { 


		$googledataspi = "https://spreadsheets.google.com/feeds/list/1OfAW6yFnpSoZov_PeK6MP1u0msRNHXDR8jd7-Hekxyk/1/public/values?alt=json";
		$json = file_get_contents($googledataspi);
	    $data = json_decode($json, true); 
	    $skill='';

		return  buildTextMessage($data['feed']['entry']['0']['gsx$內容']['$t']);	
	      
	
}
