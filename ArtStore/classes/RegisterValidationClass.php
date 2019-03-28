<?php

class RegisterValidationClass
{
    private $value;
    private $cssClassName;
    private $errorMessage;
    private $isValid = true;

    public function __construct ($cssClassName, $value, $errorMessage, $isValid)
    {
        $this->cssClassName = $cssClassName;
        $this->value = $value;
        $this->errorMessage = $errorMessage;
        $this->isValid = $isValid;
    }

    public function getClassName() {return $this->cssCLassName;}
    public function getValue() {return $this->value; }
    public function getErrorMessage() {return $this->errorMessage; }
    public function isValid() {return $this->isValid; }

    static public function checkParameter($queryName, $pattern, $errMsg)
    {   
        $error = "";
        $errClass = "";
        $value = "";
        $isValid = true;
        
        if (empty($_POST[$queryName])){
            $error = $errMsg;
            $errClass = "error";
            $isValid = false;
        }
        else {
             $value = $_POST[$queryName];
             if(!preg_match($pattern, $value)){
            $error = $errMsg;
            $errClass = "error";
            $isValid = false;
            }
        }
        return new ValidationResult($errClass, $value, $error, $isValid);
    }
}

?>