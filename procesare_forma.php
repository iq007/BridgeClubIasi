<?php
    /**
 * Created by PhpStorm.
 * User: stefan
 * Date: 10/03/15
 * Time: 19:31
 */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once('ext/sendgrid-php/sendgrid-php.php');
    require_once('ext/db/db.php');

    $api_user   =  getenv("SENDGRIDUSER") ? getenv("SENDGRIDUSER") : 'test';
    $api_key =  getenv("SENDGRIDAPIKEY") ? getenv("SENDGRIDAPIKEY") : 'test';

    $sendgrid = new SendGrid($api_user, $api_key, array('turn_off_ssl_verification'=>true));
    $email    = new SendGrid\Email();


    $myemail = "a1b2ff@yahoo.com";
    $subject = "Memorial Emil Alexandrescu - Rezervare cazare";

    $nume = strip_tags($_POST['name']) ? strip_tags($_POST['name']) : "necunoscut";
    $fromemail = strip_tags($_POST['email']) ? strip_tags($_POST['email']) : "necunoscut@necunoscut.ro";
    $telefon = strip_tags($_POST['telefon']) ? strip_tags($_POST['telefon']) : "necunoscut";
    $start = strip_tags($_POST['start']) ? strip_tags($_POST['start']) : "01/01/2015";
    $stop = strip_tags($_POST['stop']) ? strip_tags($_POST['stop']) : "01/01/2015";

    $optiunecazare = isset($_POST['optiunecazare']) ? strip_tags($_POST['optiunecazare']) : 0;

    try {
        $datas = $database->select("optiunicazare", "*", ["ID[=]" => $optiunecazare]);
        foreach ($datas as $data) {
            $descriereCazare = $data['Hotel'] . " - " . $data['Camera'];
        }
        $email->addTo($myemail)
            ->setFrom($api_user)
            ->setSubject($subject)
            ->setHtml(
                "Nume: " . $nume . "\n" .
                "E-mail: " . $fromemail . "\n" .
                "Telefon: " . $telefon . "\n" .
                "Optiune cazare: " . $descriereCazare . "\n" .
                "Start: " . $start . "\n" .
                "Stop:" . $stop
            );



        $last_id = $database->insert("cazari" ,
            [
                "Nume" => $nume,
                "Telefon" => $telefon,
                "Email" => $fromemail,
                "OptiuneID" => $optiunecazare,
                "Start" => date("Y-m-d", strtotime($start)),
                "Stop" => date("Y-m-d", strtotime($stop))
            ]);


        if($last_id == 0){
            echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.
            ". var_dump($database->error()) ."</div>";
        }
        else {
            $sendgrid->send($email);

            echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            Rezervarea s-a efectuat cu succes. </div>";
        }
    }
    catch(Exception $e){
        echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.</div>";

    }



