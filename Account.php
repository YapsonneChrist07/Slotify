<?php
    class Account {

        private $con;
        private $errorArray;
        
        public function __construct($con) {
            // Constructor logic here (if needed)
            $this->con = $con;
            $this->errorArray = array();
        }

        public function login($un, $pw){

            $pw = md5($pw);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username='$un' AND password = '$pw'");

            if(mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::$loginFailed);
                return false;
            }
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            // Registration logic here
            $this->validateUsername($un);
            $this->validateFirstname($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray == true)){
                // insert into db
                return $this->insertUseDetails($un, $fn, $ln, $em, $pw);
            }
            else {
                return false;
            }
        }

        public function getError($error){
            if(!in_array($error, $this->errorArray)){
                $error = "";
            }
            return"<span class='errorMessage'>$error</span>";
        }

        private function insertUseDetails($un, $fn, $ln, $em, $pw){
            $encryptedPw = md5($pw);
            $profilePic = "images/head_emerald.png";// Download the file and images
            $date = date("Y-m-d");

            $result = mysqli_query($this->con," INSERT INTO users VALUES('','$un','$fn','$ln','$em','$encryptedPw','$date','$profilePic')");

            return $result;
        }

        private function validateUsername($un) {
            // Username validation logic here
            if(strlen($un) > 25 || strlen($un) <5){
                array_push( $this->errorArray, Constants::$usernameCharacters);
                return;
            }

            $checkUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username = '$un'");
            if(mysqli_num_rows($checkUsernameQuery) != 0){
                array_push($this->errorArray, Constants::$usernameTaken);
                return;
            }
        }
        
        private function validateFirstname($fn) {
            // First name validation logic here
            if(strlen($fn) > 25 || strlen($fn) <2){
                array_push( $this->errorArray, Constants::$firstNameCharacters);
                return;
            }
        }
        
        private function validateLastName($ln) {
            // Last name validation logic here
            if(strlen($ln) > 25 || strlen($ln) <2){
                array_push( $this->errorArray, Constants::$lastNameCharacters);
                return;
            }
        }
        
        private function validateEmails($em, $em2) {
            // Email validation logic here
            if($em != $em2){
                array_push($this->errorArray, Constants::$emailDoNotMatch);
                return;
            }

            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            $checkEmailQuery = mysqli_query($this->con, "SELECT email FROM users WHERE email = '$em'");
            if(mysqli_num_rows($checkEmailQuery) != 0){
                array_push($this->errorArray, Constants::$emailTaken);
                return;
            }

        }
        private function validatePasswords($pw, $pw2) {
            // Password validation logic here
            if ($pw !== $pw2) { 
                array_push($this->errorArray, Constants::$passwordsDoNotMatch);
                return;
            }
        
            if (preg_match('/[^A-Za-z0-9]/', $pw)) {
                array_push($this->errorArray, Constants::$passwordsNotAlphanumeric);
                return;
            }
        
            if (strlen($pw) > 30 || strlen($pw) < 5) {
                array_push($this->errorArray, Constants::$passwordsCharacters);
                return;
            }
        }
        
    }
?>
