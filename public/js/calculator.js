"use strict";

var leftInput = function(event) {
	var inputNumbers = document.getElementsByClassName("numbers");

	for (var i = 0; i < inputNumbers.length; i++) {
		var leftButton = inputNumbers[i].getAttribute("value");
	}
}
document.getElementById("left_operand").addEventListener("click", leftInput);