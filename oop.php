<?php 
ini_set('display_errors', 1);

class sum {
    public $predefineVal;
    public function __construct($abc)
    {
        $this->predefineVal = $abc;   
    }

    public function bb($val){
       
       return $this->predefineVal+$val;
    }
}

class rahad {
    public function queryResult ($b){
          return new sum($b); 
    }
}

$n = new sum(45);


$firstClass = new rahad();



echo $firstClass->queryResult(30); 




?>