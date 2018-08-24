<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


class jobs extends Controller{
    function  __construct(){
        parent::__construct();
    }
    function index(){
        $this->view->bannerImages = array(  'jobbbanner1.jpeg',
        'jobbbanner2.jpeg' );
        $this->view->render('jobs/index');

    }
    function sendApplication(){
        $subject = "Atvinnu umsokn fra " . $_POST["name"];
        $body = "Nafn : " . $_POST["name"] . "<br>" .
                "Email : " . $_POST["email"] . "<br>" .
                "Símanúmer : " . $_POST["phoneNumber"] . "<br>" . 
                "<br> <br> Um Mig <br> " . $_POST["aboutYourSelf"]; 
        


        //Búa til service klasa sem sér um þetta allt
        $mail = new PHPMailer(true);  
        try {
     
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "ssl";
            $mail->Host = EmailPasword;
            $mail->Port = EmailPort;
            $mail->isHtml();
            $mail->Username = EmailLogin;
            $mail->Password = EmailPasword;
            if( $this->fileValidation() ){
                $mail->addAttachment($_FILES["attachment"]["tmp_name"]);
            }

            $mail->SetFrom(EmailSentFrom);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->AddAddress(EmailSentTo);

            $mail->Send();

        } catch (Exception $e) {
        //    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        $this->view->bannerImages = array(  'jobbbanner1.jpeg',
        'jobbbanner2.jpeg' );
        $this->view->render('jobs/sendApplication');
    }

    private function fileValidation(){

        if ( $_FILES["attachment"]["error"] == 4 ){
            return false;
        }
        else if ( $_FILES["attachment"]["size"] >= 5000 ){
            return false;
        }
        else if($_FILES["attachment"]["type"] != ""){
            return false;
        }  
        else if($_FILES["attachment"]["type"] != ""){
            return false;
        }        
        else if($_FILES["attachment"]["type"] != ""){
            return false;
        }        
        else if($_FILES["attachment"]["type"] != ""){
            return false;
        }
        else{
            return true;
        }
    }
}
