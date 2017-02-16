"use strict";


function logVariable(color) {
	console.log(color);
}

var result = logVariable("blue");
console.log(result);
// var result returns a String with a value of "blue"

function identity(name) {
	console.log(name);
}

var result2 = logVariable("Sophie");
console.log(result2);
//var result2 returns a String with a value of "Sophie"

function getRandomIntBetween(min, max) {
	console.log(Math.floor(Math.random() * (max + 1)) + min);
}
//used Math.random to generate random Int btwn specified min and max values.
//+1 to max to make sure max is on # specified.

function isNumeric(input) {
	if (input )
}