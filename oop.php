<?php
     
     class tom {
      public $name,$age;
      public function __construct($name,$age){
      $this->name=$name;
      $this->age=$age;
      }
      public function info(){
          echo 'amar name:'.$this->name."\n".'amar boyos:'.$this->age;
                            }   
            }
    
//new class teacher
            class teacher extends tom{
                private $subjet;
                public function __construct($name,$age,$subjet){
                parent::__construct($name,$age);
                $this->subjet=$subjet;
                }
                public function in(){
                    parent::info();
                    echo '  ami akjon teacher, ami ' .$this->subjet.' poray';
                }
                                        }
    //new class student 
            class student extends tom{
                private $roll;
                public function __construct($name,$age, $roll){
                    parent::__construct($name,$age);
                    $this->roll=$roll;
                      }
                public function info(){
                    parent::info();
                    echo '  amar roll'.$this->roll;
                }
                
            }
            
 $student = new Student("করিম", 15, 101);
$teacher = new Teacher("রহিম স্যার", 40, "গণিত");

$student->info();
echo "\n";
$teacher->in();

echo "RAHAD";


?>