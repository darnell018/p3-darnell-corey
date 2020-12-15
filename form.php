<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'goreactiv.io' // Put you mail domain here
	,
	'REACTIV' // Put your site name / form name here
	,
	'corey@goreactiv.io' // Where will the form notification be sent?
	,
	'forms@goreactiv.io' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
