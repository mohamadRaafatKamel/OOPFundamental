<?php

class Logger
{
    private static $instance = null;
    public static $testVal = "def";

    private function __construct(){
        // can't make any OPJ now
    }

    public static function getInstance(): self
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getTestVal(): string
    {
        return self::$testVal;
    }
    public function setTestVal(string $testVal): void
    {
        self::$testVal = $testVal;
    }
    public function logInfo($msg)
    {
        echo "Info: ".$msg."<br/>";
    }
    public function logError($msg)
    {
        echo "Error: ".$msg."<br/>";
    }
    public function logWarning($msg)
    {
        echo "Warning: ".$msg."<br/>";
    }
}


// main part

$opj1= Logger::getInstance();
$opj1->logInfo('good info');
$opj1->setTestVal('o1');
$opj2= Logger::getInstance();
$opj2->logError('error');
print_r($opj2->getTestVal());
echo "<br/>";
print_r($opj1 === $opj2);
