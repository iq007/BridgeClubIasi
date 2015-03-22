<?php
    /**
 * Created by PhpStorm.
 * User: stefan
 * Date: 10/03/15
 * Time: 19:31
 */
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL);

    require_once('ext/sendgrid-php/sendgrid-php.php');

    $api_user   =  getenv("SENDGRIDUSER") ? getenv("SENDGRIDUSER") : 'test';
    $api_key =  getenv("SENDGRIDAPIKEY") ? getenv("SENDGRIDAPIKEY") : 'test';

    $sendgrid = new SendGrid($api_user, $api_key, array('turn_off_ssl_verification'=>true));
    $email    = new SendGrid\Email();


    $myemail = 'a1b2ff@yahoo.com';
    $subject = "Meomrial Emil Alexandrescu - Rezervare cazare";

    $name = isset($_POST['name']) ? strip_tags($_POST['name']) : 'necunoscut';
    $fromemail = isset($_POST['email']) ? strip_tags($_POST['email']) : 'necunoscut@necunoscut.ro';
    $optiunecazare = isset($_POST['optiunecazare']) ? strip_tags($_POST['optiunecazare']) : '';


    $email->addTo($myemail)
        ->setFrom($api_user)
        ->setSubject($subject)
        ->setHtml($name + " " + $optiunecazare);

    $sendgrid->send($email);


    /*



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
        echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.</div>";
    }

    */

    echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.</div>";

