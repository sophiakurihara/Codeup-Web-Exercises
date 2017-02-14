"use strict";

//generates a random number btwn 50-100
var allCones = Math.floor(Math.random() * 50) + 50;

//generates random number between 1 and 5

var cones = Math.floor(Math.random() * 5) + 1;

//ice cream cone loop simulator
do {
	console.log("I have " + allCones + " cones.");
	console.log(cones + " cones sold...")
	allCones -= cones
	console.log(allCones + " cones left.")
	
	if (allCones == 0) {
		console.log("Yayy! I sold all my cones!");
	}

	if ((cones > allCones) && (allCones !== 0)) {
		console.log("Can't sell you " + cones + " cones, I only have " + allCones);
		console.log("Did you want to buy my last " + allCones + " cone/s?")
		console.log(allCones + " more cones sold..");
		allCones -= allCones
		console.log("Yayy! I sold all my cones!");
	} 

} while ((allCones - cones >= 0));

//multiply by 2 loop.
var i = 2;
while(i <= 65536) {
	console.log(i);
	i = i * 2;
}