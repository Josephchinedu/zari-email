<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    define('db_host', 'localhost');
    define('db_user', 'nextiftk_zari');
    define('db_pass', 'Ability_2020');
    define('db_name', 'nextiftk_zari');
    
    class dbh{
        public $host = db_host;
        public $user = db_user;
        public $pass = db_pass;
        public $dbname = db_name;
        public $conn;
        public $error;
 
        public function __construct(){
            $this->connect();
        }
 
        private function connect(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if(!$this->conn){
                $this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
                return false;
            }
        }
        

        public function save($fullName, $email, $password, $country, $phoneNumber, $registerDate){
            $verification = sha1(rand(1,999999).$email.microtime());
            $today = date("Y-m-d h:i:s");
            $verified = "YES";

            $stmt = $this->conn->prepare("INSERT INTO `members` (fullName, email, password, country, phoneNumber, registerDate, verified, verifyDate) VALUES(?,?,?,?,?,?,?,?)") or die($this->conn->error);
            
            $stmt->bind_param("ssssssss", $fullName, $email, $password, $country, $phoneNumber, $registerDate, $verified, $today);
            if($stmt->execute()){
                
                $stmd = $this->conn->prepare("INSERT INTO `verification` (email, verification, dateCreated) VALUES(?,?,?)") or die($this->conn->error);
            
                $stmd->bind_param("sss", $email, $verification, $today);
                if($stmd->execute()){
                    
                    $subject = 'nextpredict Registration'; // Give the email a subject
                    $headers = 'From: nextpredict Registration <support@nextpredict.com>' . "\r\n"; // Set from headers
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $headers .= "X-Priority: 1\n"; // Urgent message!
                    /*$message = '<!DOCTYPE HTML>     
                                <html>
                                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                </head>
                                <body>
                                    <div style="background-color:white; width: 80%; margin:auto; dborder:solid; dborder-width:thin; bdorder-color:#EEE; position: relative; font-size:15px; padding-top:2em; padding:1em; font-family:Verdana, Geneva, sans-serif; color:#000;">
                                        <div class="container" style="background:#000; width:100%; padding:10px;">
                                            <center><img src="../../images/mainlogo.png" style="width: 90px; height: 90px;" /></center>
                                        </div>
                                        
                                        <div style="padding:10px;">
                                            <p style="font-size:15px; dtext-align:center;">
                                                Hello '.$fullName.',
                                            </p>
                                            <p style="font-size:15px; dtext-align:center;">
                                                Kindly, click on the link below to verify your email and complete your nextpredict registration.
                                            </p>
                                            <br>
                                            <p><a href="https://nextpredict.com/verify.php?ver='.$verification.'" style="text-decoration:none">Verify Email</a></p>
                                            <br>
                                            <p>
                                            Regards,</p>
                                            <p><b>nextpredict Support Team</b><br>
                                            <a href="http://www.nextpredict.com" style="text-decoration:none">www.nextpredict.com</a></p>
                                            
                                            <center><span style="font-size:10px;"><i>Never Lose a Bet</i></span></center>
                                        </div>
                                    </div>
                                </body>
                                </html>';*/
                    $message = '<!DOCTYPE HTML>     
                                <html>
                                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
                                </head>
                                <body>
                                    <div style="background-color:white; width: 80%; margin:auto; dborder:solid; dborder-width:thin; bdorder-color:#EEE; position: relative; font-size:15px; padding-top:2em; padding:1em; font-family:Verdana, Geneva, sans-serif; color:#000;">
                                        <div class="container" style="background:#000; width:100%; padding:10px;">
                                            <center><img src="../../images/mainlogo.png" style="width: 90px; height: 90px;" /></center>
                                        </div>
                                        
                                        <div style="padding:10px;">
                                            <p style="font-size:15px; dtext-align:center;">
                                                Hello '.$fullName.',
                                            </p>
                                            <p style="font-size:15px; dtext-align:center;">
                                                Congratulations, your nextpredict account has been successfully created.
                                                <br>Kindly click on the link below to log into your account.
                                            </p>
                                            <br>
                                            <p><a href="https://nextpredict.com/login.php" style="text-decoration:none">Log in</a></p>
                                            <br>
                                            <p>
                                            Regards,</p>
                                            <p><b>nextpredict Support Team</b><br>
                                            <a href="http://www.nextpredict.com" style="text-decoration:none">www.nextpredict.com</a></p>
                                            
                                            <center><span style="font-size:10px;"><i>Never Lose a Bet</i></span></center>
                                        </div>
                                    </div>
                                </body>
                                </html>';
                    if(mail($email, $subject, $message, $headers)){

                        $stmd->close();
                        $stmt->close();
                        $this->conn->close();
                        return true;
                    }
                }
            }
        }
    }

?>