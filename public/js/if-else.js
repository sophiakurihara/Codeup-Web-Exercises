"use strict";

//Grading Exercise
var grades = 79; 

if ((grades > 80) && (grades <= 100)) {
	grades = "You're awesome!"
} else if ((grades < 80) && (grades >= 0)) {
	grades = "You need to practice more."
} else {
	grades = "Please enter a valid grade from 0-100."
}

console.log(grades);

//Discounted purchase exercise
var Cameron = 180
var Ryan = 250
var George = 320


var amountCameron = 180;

if (amountCameron > 200) {
	amountCameron = (amountCameron - amountCameron * 0.35)
} else {
	amountCameron	
}

var amountRyan = 250;

if (amountRyan > 200) {
	amountRyan = (amountRyan - amountRyan * 0.35)
} else {
	amountRyan
}

var amountGeorge = 320;

if (amountGeorge > 200) {
	amountGeorge = (amountGeorge - amountGeorge * 0.35)
} else {
	amountGeorge
}


console.log("Cameron | Before discount: $" + (Cameron) + " |After discount (if any): $" + (amountCameron));
console.log("Ryan | Before discount: $" + (Ryan) + " |After discount (if any): $" + (amountRyan));
console.log("George | Before discount: $" + (George) + " |After discount (if any): $" + (amountGeorge));


//Coin flip exercise --> make sure to use '==' to find value equality
var flipACoin = Math.floor(Math.random()* 2);

if (flipACoin == 0) {
	flipACoin = "Buy a car."
} else if (flipACoin == 1) {
	flipACoin = "Buy a house."
}

console.log(flipACoin);






