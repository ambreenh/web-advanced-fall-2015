////ARITHMETIC OPERATORS////

//Create and initialize your variables
 	var result = 0;
 	var OctClasses = 3;
	var NovClasses = 4;
	var DecClasses = 3;

//Addition: result = 25	  
	result = OctClasses + NovClasses + DecClasses;
	  
//write result on the page
	var ToGo = "Only" + result + ' ' + "days left to go with this class!"
	document.write(ToGo);

////CONCATENATE OPERATORS////

//Create and initialize your variables
	  
	var State = "How sad are you,";
	var Name = "Ambreen";
//Resulting value of assignment is Hello World!
	  
	var message = ' ' + State + ' ' + Name + ' ' + "?!";
	document.write(message);
	  

	 

///IF... ELSE, SWTICHES///
function showReminder()
	
	{
//pick a day of the week and store it in a var
	
	  var today = dateInput.value;
	  //check today var value and act accordingly
	  switch(today)
	  {
	  //in case value corresponds to Saturday or to Sunday do this:
	  case "Saturday":
	  case "Sunday":
	  alert("Don't forget to work on your mid-term: use HTML, CSS, Responsive Web, and a bit of SASS if you can!");
	  //no need to keep going:
	  break;
	
	  //in case value corresponds to Thursday do this
	  case "Wednesday":
	  alert("Hope you're in class and alert!");
	  //no need to keep going
	  break;
	
	  //in all other cases do this instead
	  default:
	  alert("Just an ordinary weekday: Have you thought about ways you could improve the look and feel of your site?");
	  }
}