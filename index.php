<?php
require('hello_world.php');
// require('ajax.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Playground</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script   src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>
</head>
<body>
	<h1>Posting Data with PHP</h1>
	<form method="post" action="hello_world.php">
		<p>What is the 1st program you should write?</p>
		<input type="text" id="user_1st_program_answer" name="user_1st_program_answer" >
		<input type="submit"> 
	</form>

<h2>Your Answer is</h2>
<?php
	if ( !empty($_POST['user_1st_program_answer']) ) {
	         echo $user_1st_program_answer;
	} 
 ?>
<h2>The Correct is</h2>
	
	
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<!-- our form -->  
<form id='userForm'>
    <div><input id="firstname" type='text' name='firstname' placeholder='Firstname' /></div>
    <div><input type='text' name='lastname' placeholder='Lastname' /></div>
    <div><input type='text' name='email' placeholder='Email' /></div>
    <div>
    	<label for="range">Pick a number 1-100</label>
	    <input type="range" min="0" max="100" step="1" id="range_input_id" name="range" oninput="range_output_id.value = range_input_id.value">
	    <output for="range" name"range" id="range_output_id" vaule="" style="margin:0 auto;"></output>
    </div>
    <div><input type='submit' value='Submit' /></div>

</form>
 
<!-- where the response will be displayed -->
<div id='response'></div>


 <script>
$(document).ready(function(){
	// alternatively, select individual input elements
    $('#userForm').submit(function(){
     
        // show that something is loading, fills in response div with this text
        $('#response').html("<b>Loading response...</b>");
         
        /*
         * 'post_receiver.php' - where you will pass the form data
         * $(this).serialize() - to easily read form data
         * function(data){... - data contains the response from post_receiver.php
         */
        $.ajax({
            type: 'POST', //= method:GET, POST, etc. 
            url: 'ajax.php', //=action
            data: $(this).serialize() 
        })
        .done(function(data){
             
            // show the response
            $('#response').html(data);
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;
 
    });
});
</script>
 


<script type="text/javascript" src="assets/javascript.js"></script>
</body>
</html>


