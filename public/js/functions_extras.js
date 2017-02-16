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

//how to determine if string has number? used modulus operator on string containing numerical value.

function add(a,b) {
	add = a + b;
	console.log("The sum is " + add);
}

function subtract(a,b) {
	subtract = a - b;
	console.log("The difference is " + subtract);
}

function multiply(a,b) {
	multiply = a * b
	console.log("The product is " + multiply);
}

function divide(a,b) {
	divide = (a/b).toFixed(2);
	console.log("The quotient is: " + divide);
}

function square(a) {
	square = multiply(a, a);
	console.log(square);
}

//basic math functions

function sumOfSquares(a,b) {
	sumOfSquares = add(square(a), square(b));
	console.log(sumOfSquares);
}

