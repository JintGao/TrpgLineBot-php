<?php

function Rules_Operating($inputStr,$userName) { 

		if($userName='Tony高志')
		{
			return nomalDiceRoller("2d6+100");	
		}	
		else if($userName='羊(Jasmin)')
		{
			return nomalDiceRoller("2d6+120");	
		}
		else if($userName='Wendy')
		{
			return nomalDiceRoller("2d6+120");	
		}
		else if($userName='Una Tu')
		{
			return nomalDiceRoller("2d6+120");	
		}		
		else if($userName='大楷 Kai.Tsai')
		{
			return nomalDiceRoller("2d6+120");	
		}	
		else if($userName='吳奕歆')
		{
			return nomalDiceRoller("2d6+120");	
		}	
		else if($userName='Charlie')
		{
			return nomalDiceRoller("2d6+120");	
		}	
		else if($userName='魷魚')
		{
			return nomalDiceRoller("2d6+120");	
		}	
		else if($userName='ShiHao')
		{
			return nomalDiceRoller("2d6+120");	
		}	
		else if($userName='Nash.Lee')
		{
			return nomalDiceRoller("2d6+120");	
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

		return null;
}
