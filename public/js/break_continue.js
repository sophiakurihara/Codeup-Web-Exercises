"use strict";

// var randomNumber = Math.floor(Math.random() * 50)+1;
var randomNumber = Math.floor(Math.random() * 50)+1;

if (randomNumber % 2 !== 0) {
	console.log("Random odd number to skip: " + randomNumber); 

	for (var i = 1; i < 50; i++) {
	
		if ((i % 2 !== 0) && (randomNumber !== i)) {
			console.log("Here is an odd number: " + i);
			continue;	
		
		} if (randomNumber == i) {
			console.log("Yikes! skipping number: " + i);
			continue;
		}

	} 
} else {
	console.log("Please refresh the page to generate an odd number.");
}

	
