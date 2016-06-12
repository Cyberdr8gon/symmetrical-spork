<?php
class jsonObject {
    public $jsonFileName = "";
    public $jsonString = "";
    public $jsonObject;

    function __construct($fileName) {
        $jsonFileName =$fileName;
        $this->loadFile($jsonFileName);
        $this->loadObject();
        $this->testObject();

    }

    function loadFile($fileName) {
        $file_handle = fopen($fileName, "r");
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            if($this->jsonString != null)
            {
                $this->jsonString .= $line;
            } else
            {
                $this->jsonString = $line;
            }
        }
        fclose($file_handle); 
    }

    function loadObject() {
        $this->jsonObject = json_decode($this->jsonString, true);
    }
    
    function writeQuestions($jsonFileName) {

    }

    function testObject() {
       var_dump($this->jsonObject); 
    }
}
?>
