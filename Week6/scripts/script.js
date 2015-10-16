$(document).ready(function(){
	
    var now = moment().format("dddd, MMMM Do, YYYY, h:mm:ss A");

	$('#date-display').click(function() { 
	     // Saturday, June 9th, 2007, 5:46:21 PM
			$('#demo').append(now);
	    }); // end date-display function 

	$('#color-change').click(function(){
        if ($('#col2').hasClass('orange')) {
            $('#col2').removeClass('orange').addClass('green');
        }
        else {
            $('#col2').removeClass('green').addClass('orange');
        }
    }); //ends color-change function
   
}); // ends document load function
