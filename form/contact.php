<?php
include 'db_con.php';


  $user_name= $_POST['name'];
  $user_email = $_POST['email'];
  $user_message = $_POST['message'];
  $user_mobile= $_POST['mobile'];
  $user_subject = $_POST['subject'];


                  // Email Code for MyMedical ID
                
                        $to      = 'contact@avibhede.in';
                        $subject = $user_name." - ".$user_subject;
                        $message = 'Contact Number:'.$user_mobile."  Message: ".$user_message;
                        $headers = "From:  $user_name $user_email" . PHP_EOL .
                            "X-Mailer: PHP/" . phpversion();
                        
                        mail($to, $subject, $message, $headers);
                        
                        echo "success";
                        
                
                //  Email code end    
                
 


?>
