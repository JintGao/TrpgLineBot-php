<?php

function Rules_Operating($inputStr,$userName) { 

	
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

		return null;
}
