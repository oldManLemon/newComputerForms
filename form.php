<?php

header('Refresh: 60; URL=http://bwwiki:49494/comps/index.html');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
//If statement looks for all checkboxes with the name of 'programsRequested[]' it needs to made an implict array in the html
$selectedPrograms  = 'None';
if(isset($_POST['programsRequested']) && is_array($_POST['programsRequested']) && count($_POST['programsRequested']) > 0){
    $selectedPrograms = implode(', ', $_POST['programsRequested']);
}
//Remember to add values to the checkboxes or they don't work.
//Doesn't really matter if this returns blank clean later 
$autoCad = implode(', ', $_POST['autoCadSelector']);
$otherText = $_POST['other']; 

$message = '<html><body><p><strong>Name: </strong></p>' . $firstName . $lastName;
$message .= '<p><strong>Optional Programs: </strong></p>' . $selectedPrograms;
$message .= '<p><strong>AutoCad Years: </strong></p>' . $autoCad;
$message .= '<p><strong>Other Comments: </strong></p>' .$otherText;

 //Need headers, particuraly to say html
/* optional. Specifies additional headers, like From, Cc, and Bcc. The additional headers should be separated with a CRLF (\r\n).

Note: When sending an email, it must contain a From header. This can be set with this parameter or in the php.ini file. */
$headers = "From: boogie@boogie.com \r\n ";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//The mail function
mail('tome@fromme.com', 'New Computer Information: ' .$firstName . ' ' . $lastName , $message,$headers);
/* Syntax of mail Command
mail(to,subject,message,headers,parameters); */


//TODO print results if success or not!
?>


