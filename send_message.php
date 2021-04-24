<?php 
    if(isset($_POST['submit']))
    {
                            $user_name = $_POST['name'];
                            $user_email = $_POST['email'];
                            $user_subject = $_POST['subject'];
                            $user_message = $_POST['message'];

                            $email_form = 'noreply@akash.com';
                            $email_subject = 'New form submission';
                            $email_body = 'Name: $user_name, \n'.
                                            'Email ID: $user_email, \n'.
                                            'Subject: $user_subject, \n'.
                                            'User Message: $user_message, \n';
                            
                            $to_email = 'akashsingh27101998@gmail.com';
                            $headers = "Form: $email_form \r\n";
                            $headers .= "Reply-To: $user_email \r\n";

                            // $response = file_get_contents($url);
                            // $response = json_decode($response);

                            if(mail($to_email, $user_name, $user_email, $user_subject, $user_message, $email_body, $headers))
                            {
                                echo "Message Sent Successfully";
                            }
                                

                            // if($response->success)
                            // {
                            //     mail($to_email, $user_subject, $email_body, $headers)
                            //     echo "Message Sent Successfully";
                            // }
                            else 
                            {
                                echo "<span>Invalid, Please Try Again</span>";
                            }
    }
?>