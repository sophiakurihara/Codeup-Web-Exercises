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
	console.log(Math.floor(Math.random() * (max - min)) + min);
}
//used Math.random to generate random Int btwn specified min and max values.
//+1 to max to make sure max is on # specified.

function isNumeric(input) {
	if (input % 1 == 0) {
		console.log("true");
	} else {
		console.log("false");
	}
}
//OR return !isNaN(input);

//how to determine if string has number? used modulus operator on string containing numerical value.

function add(a,b) {
	return a + b;
}

function subtract(a,b) {
	return a - b;
}

function multiply(a,b) {
	return a * b;

}

function divide(a,b) {
	return (a/b).toFixed(2);

}

function square(num) {
	return multiply(num, num);
}

//basic math functions
//also use return x + y; instead of of console.log().

function sumOfSquares(a,b) {
	return add(square(a), square(b));
	
}


