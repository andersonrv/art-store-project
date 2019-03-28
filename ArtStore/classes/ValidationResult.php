<?php

class ValidationResult
{
    public $value;
    private $errorMessage;
    private $isValid = true;

    public function __construct ($value, $errorMessage, $isValid)
    {
        $this->value = $value;
        $this->errorMessage = $errorMessage;
        $this->isValid = $isValid;
    }

    public function getValue() {return $this->value; }
    public function getErrorMessage() {return $this->errorMessage; }
    public function isValid() {return $this->isValid; }

    static public function checkParameter($queryValue, $pattern, $errMsg)
    {   
        $isValid = true;
        
        $value = $queryValue;
        if(!preg_match($pattern, $value))
        {
            $error = $errMsg;
            $isValid = false;
        }
        
        return new ValidationResult($value, $error, $isValid);
    }
}

?>