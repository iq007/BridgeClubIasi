<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 10/03/15
 * Time: 19:31
 */

//add the recipient's address here
$myemail = 'a1b2ff@yahoo.com';

//grab named inputs from html then post to #thanks
if (isset($_POST['name'])) {
    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $optiunecazare = strip_tags($_POST['optiunecazare']);
    /*echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
    echo "<stong>Name:</strong> ".$name."<br>";
    echo "<stong>Email:</strong> ".$email."<br>";
    echo "<stong>Message:</strong> ".$optiunecazare."<br>";*/

    //generate email and send!
    $to = $myemail;
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email\n Message \n $optiunecazare";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email";
    if(mail($to,$email_subject,$email_body,$headers)){
         echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            Rezervarea s-a efectuat cu succes. </div>";
    }
    else
    {
        echo "<div class=\"alert alert-danger alert-dismissible\' role=\"alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.</div>";
    }

}