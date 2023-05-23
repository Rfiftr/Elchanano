<?php
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: elshnan.sa@gmail.com" . "\r\n"; 
   
    $tel = "none";
    $name = $_GET['fname'];
    $email = $_GET['mail'];
    if(!empty($_GET['tel'])){

        $tel = $_GET['tel'];
    }
    if(empty($_GET['pirsum'])){$pirsom = " לא ";}else{$pirsom = " כן ";}
    $subject = $_GET['subject'];
    $mass = " כותב ההודעה: " . $name . "<br> פרטי ההתקשרות שלי הם טלפון: " . $tel . "<br> כתובת המייל שלי: " . $email . " <br> נושא ההודעה: " . $subject ."<br>";
    if(!empty($_GET['massage'])){
        $mass .= $_GET['massage'];
    }
    $mass .= "<br> אני " . $pirsom . " מעוניין בפרסום. ";
    if(mail("elchnan.sa@gmail.com", $subject, $mass, $headers)){
        echo "<h1 style='color:red; text-align:center; '> ההודעה התקבלה בהצלחה </<h1>";
        header( "refresh:2; url=index.html" ); 
    }else{
  
        echo "<h1 style='color:red; text-align:center; '> היה בעיה לשלוח את ההודעה ,אנא נסה שנית! </<h1>";
        header( "refresh:3; url=index.html#wrapper" ); 

    }

?>