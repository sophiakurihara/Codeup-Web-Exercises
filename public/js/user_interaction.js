"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
var name = "";

while (name === "") {
	name = prompt("Hi! What is your name?")
}

// TODO: Show an alert message that welcomes the user based on their input.

alert("Welcome, " + name + "!");

// TODO: Ask the user if they like pizza.

var pizza = confirm("Hey, " + name + " do you like pizza??");

if (pizza) {
	alert("Of course! Who doesn't?!");
} else {
	alert("I think something might be wrong with you...");
}
//       Based on their answer show a creative alert message.
