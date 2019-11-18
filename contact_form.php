<?php
     // variables
 $to = 'laxatzi@gmail.com';
 $subject = 'Message for your website';
 $error_open = "<label class='error' style='color:red;font-family:monospace;font-size:15px'>";
 $error_close = "</label>";
 $valid_form = true;
 $redirect = "success.php"; // what happens after submitting  succeeds
   // another variable to hold all form_elements names in the form (included those not required)
 $form_elements = array('name', 'email', 'phone','fax', 'message');
  // another variable to hold all form_elements names REQUIRED to be filled
 $required = array('name', 'email', 'message');
 
 //we want to make sure that this "error" variables start out as blank
 // we use a foreach loop to 'update' all error variables without repeating code
 foreach($required as $require){
    $error[$require] = "";
 }

// if submit button clicked and form is submitted...go ahead and process the form
  if(isset($_POST['submit'])) {
   // PROCESS FORM

   // get form data
   foreach($form_elements as $element){
      $form[$element] = htmlspecialchars($_POST[$element]); //htmlspecialchars make sure all characters in the input are valid...this statement is gonna loop through each or our form elements and its gonna set our form array by grab the form data (names) from the form 
   }
    // the next step is to actually check the required fields
    if($form['name'] == ""){
       $error['name'] = $error_open . "Please fill in required(marked with asterisk) fields!" . $error_close;
       $valid_form = false;
    }
    if($form['email'] == ""){
      $error['email'] = $error_open . "Please fill in required(marked with asterisk) fields!" . $error_close;
      $valid_form = false;
   }
   
   //check formating
   
   // for email
   if($error['email'] == '' && !preg_match('/^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/', $form['email']) ) {
      $error['email'] = $error_open . "Please, enter a valid email!" . $error_close;
      $valid_form = false;
   }
   

    // next step is checking form validity => if an element that is not valid we want to display the form again and set these value to false
    if($valid_form){
      // redirect...usually to a page where you have put your mailscript 
      header("Location: ". $redirect);
    }
    else // if for some reason the form doesnt pass validation we want to display the form back to the user
{
   include('form_validation.php');
}
   } // end if
   else{
      foreach($form_elements as $element){
         $form[$element] = '';
      }
      // DISPLAY FORM (since its not submitted yet)
         include('form_validation.php');
   } //end else
?>

