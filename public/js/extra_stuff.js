"use strict";

//toggles all characters in a string. reverse all characters to opposite case. special characters will not change.

    // function enterString(string) {
    //     var stringArray = enterString.split("");
    //     for (var i = 0; i < stringArray.length; i++) {
    //         if (stringArray[i].isUpperCase) {
    //             stringArray[i].toLowerCase
    //         } else {
    //             stringArray[i].toUpperCase
    //         }
    //     console.log(stringArray);
    //     }

    // }

//number at the end of a string. true if number == # of chars in string. else, false.

    // function stringLength(string) {
    // 	var newArray = stringLength.split("");
    // }


//convert an amount to coins : 25, 10, 5, 1
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



















