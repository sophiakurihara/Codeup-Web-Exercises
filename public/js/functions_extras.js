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



//how to determine if string has number?

function add(a,b){
	console.log("The sum is: " + (a + b));
}

function subtract(a,b) {
	console.log("The difference is: " + (a - b));
}

function multiply(a,b) {
	console.log("The product is: " + (a * b));
}

function divide(a,b) {
	console.log("The quotient is: " + (a / b).toFixed(2));
}

function square(a) {

}