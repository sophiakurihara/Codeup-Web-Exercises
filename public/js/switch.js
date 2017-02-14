"use strict";

//Walmart discount exercise
var luckyNumber = Math.floor(Math.random()* 6);

switch(luckyNumber) {
	case 0:
		console.log("I'm sorry, you did not get a discount. Your total is $60");
		break;
	case 1:
		console.log("Congratulations! You have received a 10% discount. Your total is $54.");
		break;
	case 2:
		console.log("Congratulations! You have received a 25% discount. Your total is $45.");
		break;
	case 3:
		console.log("Congratulations! You have received a 35% discount. Your total is $39.");
		break;
	case 4:
		console.log("Congratulations! You have received a 50% discount. Your total is $30.");
		break;
	case 5:
		console.log("Congratulations! Please enjoy your items for FREE. Thanks for choosing Walmart!");
		break;
}	

//Number --> Month // I used a random number generator. // default case is only if entering # manually.
var monthName = Math.floor(Math.random()*13)+1;

switch(monthName) {
	case 1:
		console.log("1 | January");
		break;
	case 2:
		console.log("2 | February");
		break;
	case 3:
		console.log("3 | March");
		break;
	case 4:
		console.log("4 | April");
		break;
	case 5:
		console.log("5 | May");
		break;
	case 6:
		console.log("6 | June");
		break;
	case 7:
		console.log("7 | July");
		break;
	case 8:
		console.log("8 | August");
		break;
	case 9:
		console.log("9 | September");
		break;
	case 10:
		console.log("10 | October");
		break;
	case 11:
		console.log("11 | November");
		break;
	case 12:
		console.log("12 | December");
		break;
	default:
		console.log("That is not a valid month number. Enter a number from 1-12.");
}




