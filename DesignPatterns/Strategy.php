<?php
// interface
interface OutputInterface
{
    public function load();
}
// 1st implement
class SerializedArrayOutput implements OutputInterface
{
    public function load()
    {
        return 'i am serialize <br/>';
    }
}
//2nd implement
class JsonStringOutput implements OutputInterface
{
    public function load()
    {
        return 'i am json <br/>';
    }
}
//3rd implement
class ArrayOutput implements OutputInterface
{
    public function load()
    {
        return 'i am array <br/>';
    }
}

// -------------------------------------------------------------

class client
{
    private $output;
    
    // type-hinting only works for validating function arguments
    public function setOutput(OutputInterface $outputType)
    {
        $this->output = $outputType;
    }

    public function loadOutput()
    {
        return $this->output->load();
    }
}

class jsonClient extends client
{
    function jsonClient()
    {
        $this->setOutput(new JsonStringOutput());
    }
}

class arrayClient extends client
{
    function arrayClient()
    {
        $this->setOutput(new ArrayOutput());
    }
}

// --------------------------------------------------------------

// main 

$clientLoveJson = new jsonClient();
$clientLoveArray = new arrayClient();

// Lave an array?
echo $clientLoveArray->loadOutput();

// Lave some JSON?
echo $clientLoveJson->loadOutput();
