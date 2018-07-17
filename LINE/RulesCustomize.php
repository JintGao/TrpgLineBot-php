<?php

function Rules_Operating($inputStr,$imgsReplyUrl) {
	
		else if(stristr($inputStr, '勇') !=false)
		{

			return nomalDiceRoller("2d6");		

		}
		else if(stristr($inputStr, '敏') !=false)
		{

			return nomalDiceRoller("2d6");
		}
		else if(stristr($inputStr, '魅') !=false)
		{

			return nomalDiceRoller("2d6");
		}
		else if(stristr($inputStr, '意') !=false)
		{

			return nomalDiceRoller("2d6");
		}
		else if(stristr($inputStr, '智') !=false)
		{
			return nomalDiceRoller("2d6");

		}
		else if(stristr($inputStr, '精') !=false)
		{
			return nomalDiceRoller("2d6");

		}
}