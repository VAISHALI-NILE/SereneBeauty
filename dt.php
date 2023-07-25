<?php
                use Twilio\Rest\Client;

                // Update the path below to your autoload.php,
                // see https://getcomposer.org/doc/01-basic-usage.md
                require_once '/path/to/vendor/autoload.php';

                // Twilio configuration
                $sid = "AC6992369bb06913cf9d02db0b1d23369e";
                $token = "eb6c299f121b93f5044a9dd5c879a03b";
                $twilio = new Client($sid, $token);

                // Check if the form is submitted
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Get form input values
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $messageContent = $_POST['message'];

                    // Your Twilio phone number (replace with your Twilio number)
                    $twilioPhoneNumber = "+12298007219";

                    // Recipient's phone number (replace with the number you want to send the message to)
                    $recipientPhoneNumber = "+919763633212";

                    // Compose the message to be sent
                    $message = "Message from: $name ($email)\n\n$messageContent";

                    // Send the message using Twilio
                    $twilio->messages->create(
                        $recipientPhoneNumber,
                        array(
                            "from" => $twilioPhoneNumber,
                            "body" => $message
                        )
                    );

                    // Redirect to a thank-you page or display a success message
                    header("Location: thank_you_page.php");
                    exit();
                }
                ?>
                