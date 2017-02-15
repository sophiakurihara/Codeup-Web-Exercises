"use strict";

//half-triangle with numbers
 for (var i = 1; i <=10; i++) {
 	var print = "";
 	for (var j = 1; j <= i; j++){
 		print += (i % 10);
  }
  console.log(print);
}



//times table

var randomNumber = Math.floor(Math.random() * 11)+1;

for (var i = 1; i <= 10; i++) {
	console.log(randomNumber + " * " + i + " = " + (randomNumber*i));
}

//odds or evens


for (var i = 1; i <= 10; i++) {
	var anotherRandom = Math.floor(Math.random() * 201)+20;
	if (anotherRandom % 2 == 0) {
		console.log(anotherRandom + " is even.");
	} else {
		console.log(anotherRandom + " is odd.");
	}
}

//decreasing by 5's

for (var i = 100; i > 0; i-= 5) {
	console.log(i);
}