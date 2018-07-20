<?php

function Rules_Operating($inputStr,$userName) { 


		$googledataspi = "https://spreadsheets.google.com/feeds/list/1-VL6Fl88f2iBIv3vIqjMbHQZFjSzGJRkKWnHp8gqRQE/od6/public/values?alt=json";
		$json = file_get_contents($googledataspi);
	    $data = json_decode($json, true); 
	    $store_text='';

		if($userName='Tony高志')
		{

			if(stristr($inputStr, 'data') !=false)
			{
			     return  $data['feed']['entry'][0]['content']['$t'];
			}
			else if(stristr($inputStr, '勇') !=false)
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
