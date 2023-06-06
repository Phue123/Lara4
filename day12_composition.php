<?php
Trait Scientist{
    function displayResearchArea(){
        echo "Name :".$this->name ."Research Area :" .$this->area;
    }
}
Trait Researcher{
    public $name,$area,$email,$phone;

    function displayResearchArea(){
        echo "Name :".$this->name ."Research Area :" .$this->area;
    }

    function displayInfo(){
        echo "Name :".$this->name ."Research Area :" .$this->area;
    }
}
class Department{
    private $name,$code,$phone,$description;
    private $lecturers=[];

    function __construct($name,$code,$phone,$description){
        $this->name=$name;
        $this->code=$code;
        $this->phone=$phone;
        $this->description=$description;
    }

    function displayInfo(){
        echo "Name :" .$this->name ."<br>";
        echo "Code :" .$this->code ."<br>";
        echo "Phone :" .$this->phone ."<br>";
        echo "Description :" .$this->description ."<br>";
    }

    function addLecturer($name,$email,$phone,$pos){

        //composition concept : create another object
        $this->lecturers[]= new Lecturer($name,$email,$phone,$pos); //composition
    }

    function showLecturer(){
        foreach($this->lecturers as $lecturer)
        {
            // $lecturer->displayInfo();
            echo "Name :" .$lecturer->name . "Email :" . $lecturer->email ."Position :" .$lecturer->pos ."<br>";
        }
    }

    function addProfessor($lecturer){
        //aggregation concept : added objects from the outside 
        $this->lecturers[]=$lecturer;
    }
}

class Lecturer{
    use Researcher,Scientist{
        Scientist::displayResearchArea insteadof Researcher;
        Researcher::displayInfo as showInfo;
    }
    public $name,$email,$phone,$pos;

    function __construct($name,$email,$phone,$pos){
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->pos=$pos;
        $this->area="Natural Language Prosessing";
    }

    function displayInfo(){
        echo "Name :" .$this->name ;
        echo "Email :" .$this->email ;
        echo "Phone :" .$this->phone ;
        echo "Position :" .$this->pos;
        echo "Area :" .$this->area ."<br>";
    }
}

$se=new Department("Software Engineering","se001","093292094","Software Engineering");

$se->addLecturer("David","david@gmail.com","0923923","Senior Level");
$se->addLecturer("Daw Thiri","dawthiri@gmail.com","03928492","Junior Level");

$se->displayInfo();
$se->showLecturer();
echo "<br>";


$cloud=new Department("Cloud computing","cloud001","02399284","Cloud Computing");

$cloud->addLecturer("Phue","phue@gmail.com","034928424","Senior level");
$cloud->addLecturer("Zaw","zaw@gmail.com","03299284","Senior Level");

$cloud->displayInfo();
$cloud->showLecturer();
echo "<br>";

//two object 
$lecturer1=new Lecturer("Annie","annie@gmail.com","0920324","Professor");
$lecturer2=new Lecturer("June","jone@gmail.com","0934829","Researcher");
$cloud->addProfessor($lecturer1);
$cloud->addProfessor($lecturer2);
$cloud->showLecturer();
echo "<br>";

$lecturer1->displayInfo();
$lecturer1->showInfo();
echo "<br>";
$lecturer1->displayResearchArea();

?>