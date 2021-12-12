<!DOCTYPE html>
<html lang="zxx">
    <head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/js/toastr.min.js"></script>
  <link href="assets/css/toastr.css" rel="stylesheet">

    </head>
    <body>
        
        <?php
//echo "test";
 
 //die();
        if (isset($_POST)) {
          $subject =  "Enquiry for Android software Development";
            $first_name = trim($_POST['firstname']);
			 $last_name = trim($_POST['lastname']);
            //echo trim($_POST['name']);//die();
            $email = trim($_POST['email']);
          
            $phone = trim($_POST['phone']);
            $message = trim($_POST['message']);
            //echo $message;
        //die();
		
			
$errors= array();
/* 
If you have attached file then enable this */

/* $file_name = $_FILES['attachment']['name'];
$file_size =$_FILES['attachment']['size'];
$file_tmp =$_FILES['attachment']['tmp_name'];
$file_type=$_FILES['attachment']['type']; */

/*$file_ext=strtolower(end(explode('.',$_FILES['attachment']['name'])));

$extensions= array("jpeg","jpg","png");

if(in_array($file_ext,$extensions)=== false){
$errors[]="extension not allowed, please choose a JPEG or PNG file.";
}

if($file_size > 2097152){
$errors[]='File size must be excately 2 MB';
}*/

			
		           //echo trim($_POST['message']);die();
            require_once 'class-phpmailer.php';
            require_once 'class-smtp.php';
            $phpmailer = new PHPMailer();

            $phpmailer->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            $phpmailer->IsSMTP(); // telling the class to use SMTP
            $phpmailer->SMTPAuth = true;
            $phpmailer->SMTPSecure = "ssl";
          // $phpmailer->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $phpmailer->Host = "smtp.gmail.com"; // SMTP server

            $phpmailer->Port = 465;
            $phpmailer->IsHTML(true);
            $phpmailer->Username = "dhirajgardi47@gmail.com";   //host email id 
            $phpmailer->Password = "D8421g@47";
            $phpmailer->To = "pavanchavan265@gmail.com";    //your email id
            //$phpmailer->To = $to_email;
            //$phpmailer->AddCC(dhirajgardi47@gmail.com', 'Dhiraj Gardi');
            

            $phpmailer->AddReplyTo = $email;
            $phpmailer->CharSet = "UTF-8";
            $phpmailer->From = $email;
	
            $phpmailer->FromName = $first_name;
			
           $phpmailer->Subject = "Project Enquiry";
            $phpmailer->Body .= "Hello Sir/Madam," . "<br><br>";
            $phpmailer->Body .= "<b>First Name:</b> " . $first_name. "<br>";
           $phpmailer->Body .= "<b>Last Name:</b> " . $last_name. "<br>";
            $phpmailer->Body .= "<b>Email:</b> " . $email . "<br>";
		
			
            //$phpmailer->AddAttachment($file_tmp, $file_name);
            $phpmailer->Body .="<b>Phone:</b> " . $phone . "<br>";
            $phpmailer->Body .= "<b>Message :</b> " . $message . "<br>" ;
			//$phpmailer->Body = "<b>attachment:</b> " . $file_name ;
            $phpmailer->WordWrap = 50; // set word wrap
            $phpmailer->AddAddress($phpmailer->To);


           

            if (!$phpmailer->Send()) {
						echo "<script language='javascript'>
			alert('Your enquiry not sent. Please contact on our mobile.')
        window.location.replace('http://localhost/php_mailer/index.php');
            </script>";
				
 echo "Mailer Error: " . $phpmailer->ErrorInfo;
                echo "error occured";
exit(); 
            } else {
				echo "<script language='javascript'>
			alert('Your enquiry sent successfully. We will contact you shortly.')
        window.location.replace('http://localhost/php_mailer/index.php');
            </script>";
				
exit();

                $emailSent = true;
            }
        }
        ?>
    </body>

</html>		
