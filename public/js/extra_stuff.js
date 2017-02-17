"use strict";

//toggles all characters in a string. reverse all characters to opposite case. special characters will not change.
function charToggle(string) {
  
  var returnValue = "";
  
  var newArray = string.split("");
  for(var i = 0; i < string.length; i++) {
    if (newArray[i] == newArray[i].toUpperCase()) {
      returnValue += newArray[i].toLowerCase();
    } else if (newArray[i] == newArray[i].toLowerCase()) {
      returnValue += newArray[i].toUpperCase();
    } else {
      returnValue += newArray[i];
    }
  }
    return returnValue;
}
   


//number at the end of a string. true if number == # of chars in string. else, false.

function stringLength(string) {
	var newArray = string.split("");
    var charNum = newArray[newArray.length - 1]
    console.log("Number of characters is: " + charNum + "?");
    if ((newArray.length) == charNum) {
        return true;
    } else {
        return false;
    }
}


//convert an amount to coins : 25, 10, 5, 1
//created a random number generator to simulate this converter
var coins = [25, 10, 5, 1];
var amount = Math.floor(Math.random () * 101)+1;

console.log("I have " + amount + " cents. I would need these coins: ")

function amountTocoins(amount, coins) {

 if (amount === 0) 
  {
     return [];
   } 
 else
   {
     if (amount >= coins[0]) 
       {
        var left = (amount - coins[0]);
        return [coins[0]].concat( amountTocoins(left, coins) );
        } 
      else
        {
         coins.shift();
         return amountTocoins(amount, coins);
        }
    }
} 
console.log(amountTocoins(amount, coins));




















