<?php

function Rules_Operating($inputStr,$userName) { 


		$googledataspi = "https://spreadsheets.google.com/feeds/list/1Hux0vPFA47hZgjPYcoHvMzHP4Q_azPZYDZKnD6H5r78/od6/public/values?alt=json";
		$json = file_get_contents($googledataspi);
	    $data = json_decode($json, true); 
	    $store_text='';

		if($userName='Tony高志')
		{

			if($inputStr=='判資料')
			{
			     return  buildTextMessage($data['feed']['entry'][0]['content']['$t']);
			}
			else if($inputStr=='判勇')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$勇武加值']['$t']);		
			}
			else if($inputStr=='判敏')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$靈敏加值']['$t']);
			}
			else if($inputStr=='判魅')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$魅力加值']['$t']);
			}
			else if($inputStr=='判意')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$意志加值']['$t']);
			}
			else if($inputStr=='判智')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$智慧加值']['$t']);
			}
			else if($inputStr=='判精')
			{
			     return nomalDiceRoller("2d6".$data['feed']['entry'][0]['gsx$精神加值']['$t']);
			}
		}	
		else if($userName='羊(Jasmin)')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}
		}
		else if($userName='Wendy')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}
		}
		else if($userName='Una Tu')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}	
		}		
		else if($userName='大楷 Kai.Tsai')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}	
		}	
		else if($userName='吳奕歆')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}
		}	
		else if($userName='Charlie')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}	
		}	
		else if($userName='魷魚')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}	
		}	
		else if($userName='ShiHao')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}	
		}	
		else if($userName='Nash.Lee')
		{
			if(stristr($inputStr, '勇') !=false)
			{
			     return nomalDiceRoller("2d6+1");		
			}
			else if(stristr($inputStr, '敏') !=false)
			{
			     return nomalDiceRoller("2d6+2");
			}
			else if(stristr($inputStr, '魅') !=false)
			{
			     return nomalDiceRoller("2d6+3");
			}
			else if(stristr($inputStr, '意') !=false)
			{
			     return nomalDiceRoller("2d6+4");
			}
			else if(stristr($inputStr, '智') !=false)
			{
			     return nomalDiceRoller("2d6+5");
			}
			else if(stristr($inputStr, '精') !=false)
			{
			     return nomalDiceRoller("2d6+6");
			}
		}	
	

		return null;
}
