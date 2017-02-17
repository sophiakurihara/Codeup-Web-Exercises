(function(){
    "use strict";

    // TODO: Create person object
    var person = {

    // TODO: Create firstName and lastName properties in your person object; assign your name to them	
    	firstName: "Sophie",
    	lastName: "Sudiacal",
    	
    // TODO: Add a sayHello method to the person object that
     //       alerts a greeting using the firstName and lastName properties
    	sayHello: function(){
    		alert("Hi there, " + this.firstName + " " + this.lastName + "!");
    	}
 	}
 		person.sayHello = function (){
    		console.log("Hello from " + this.firstName + " " + this.lastName + "!");
 		}
 		
 		person.sayHello();


    // Say hello from the person object.
    // person.sayHello();
})();
