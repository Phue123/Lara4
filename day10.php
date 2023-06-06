<?php
abstract class User{
    public $username;
    private $password,$confirm;
    public static $count;
    public static $userlist;
    protected $role;
    function __construct($username,$password,$confirm,$role="admin"){
        $this->username=$username;
        $this->password=$password;
        $this->confirm=$confirm;
        self::$count++;
        self::$userlist[]=$this;
        $this->role=$role;
    }

    function displayInfo(){
        echo "Name :" . $this->username;
    }

    function checkPassword(){
        if($this->password==$this->confirm){
            return true;
        }else{
            return false;
        }
    }
    public function getPassword(){
        return $this->password;
    }

    public function getConfirm(){
        return $this->confirm;
    }

    public static function displayUsers(){
        foreach(User::$userlist as $user){
            echo "Username :".$user->username .":".$user->password ."<br>";
        }
    }

    //overidden method
    public final function getRole(){
        return $this->role;
    }
    
    abstract function getPermission();
}

class Admin extends User{
    public $role;
    function __construct($username,$password,$confirm,$role){
       parent:: __construct($username,$password,$confirm);
       $this->role=$role;
    }

    function displayInfo(){
        echo "Username :" .$this->username ."<br>";
        echo "Role :" .$this->role ."<br>";
    }

    function getPermission(){
        echo "Admin Role :read,write,edit";
    }

}

class Teacher extends User{
    public $email,$phone,$dept,$pos,$role;
    public static $count1;
    public static $teacherlist;
    function __construct($username,$email,$phone,$dept,$pos,$role,$password,$confirm){
        parent:: __construct($username,$password,$confirm);
            $this->email=$email;
            $this->phone=$phone;
            $this->dept=$dept;
            $this->pos=$pos;
            //$this->role=$role;
            self::$count1++;
            self::$teacherlist[]=$this;
    }

    function displayInfo(){
        echo "Username :" . $this->username ."<br>";
        echo "Email :" . $this->email ."<br>";
        echo "Phone :". $this->phone ."<br>";
        echo "Department :".$this->dept ."<br>"; 
        echo "Position :".$this->pos ."<br>"; 
        echo "Role :".$this->role ."<br>"; 
    }
    static function displayTeacher(){
        foreach(Teacher::$teacherlist as $teacher){
            echo "Teacher :" .$teacher->username .":". $teacher->email .":". $teacher->phone.":". $teacher->dept .":". $teacher->pos .":". $teacher->role .":". $teacher->getPassword() .":". $teacher->getConfirm() ."<br>";
        }
    }

    //protected overiding method
    // public function getRole(){
    //     return $this->role;
    // }

    function getPermission(){
        echo "Teacher permission :add,edit,read";
    }
}

class Student extends User{
    public $email,$phone,$major,$year,$role;
    public static $count2;
    public static $studentlist;
    function __construct($username,$email,$phone,$major,$year,$role,$password,$confirm){
        parent::__construct($username,$password,$confirm);
            $this->email=$email;
            $this->phone=$phone;
            $this->major=$major;
            $this->year=$year;
            $this->role=$role;
            self::$count2++;
            self::$studentlist[]=$this;
    }

    function displayInfo(){
        echo "Username :" . $this->username ."<br>";
        echo "Email :" . $this->email ."<br>";
        echo "Phone :". $this->phone ."<br>";
        echo "Major :".$this->major ."<br>"; 
        echo "Year :" . $this->year ."<br>";
        echo "Role :".$this->role ."<br>";
    }
    public static function displayStudent(){
        foreach(Student::$studentlist as $student){
            echo "Student :" .$student->username .":". $student->email .":". $student->phone.":". $student->major .":". $student->year .":". $student->role .":". $student->getPassword() .":". $student->getConfirm() ."<br>";
        }
    }

    function getPermission(){
        echo "Student role: do not something";
    }
}

$teacher1=new Teacher("Mrs.Chris","chris@gmail.com","+0003928","Cloud computing","Senior Lectureer","teacher","phue","phue");
$teacher2=new Teacher("Ms.Catherine","cattherine@gmail.com","203902940","Cloud Computing","Senior Lecturrer","teacher","internet","internet");
if($teacher1->checkPassword()){
   $teacher1->displayInfo();
}
else{
   echo "Password doesn't match";
}

$student=new Student("David","david@gmail.com","0092049843","CS","Fourth year","student","david","david");
if($student->checkPassword())
   $student->displayInfo();
else
   echo "Password doesn't match";

   echo "Count:" .User::$count ."<br>";
   echo "Nmber of teacher:" .Teacher::$count1 ."<br>";
   echo "Number of student:" .Student::$count2 ."<br>";
   echo "<br>";

echo "Number of user :". sizeof(User::$userlist) ."<br>";
// foreach(User::$userlist as $user){
//     echo "Username :".$user->username .":".$user->getPassword() ."<br>";
// }
User::displayUsers();

// foreach(Teacher::$teacherlist as $teacher){
//     echo "Teacher :" .$teacher->username .":". $teacher->email .":". $teacher->phone.":". $teacher->dept .":". $teacher->pos .":". $teacher->role .":". $teacher->getPassword() .":". $teacher->getConfirm() ."<br>";
// }
Teacher::displayTeacher();

// foreach(Student::$studentlist as $student){
//     echo "Student :" .$student->username .":". $student->email .":". $student->phone.":". $student->major .":". $student->year .":". $student->role .":". $student->getPassword() .":". $student->getConfirm() ."<br>";
// }
Student::displayStudent();

// $user=new User("Phue","phue","phue");
// $user1=new User("Phue","phue","pwint");
// $user->displayInfo();
// echo $user->checkPassword();
// echo "<br>";
// echo $user1->checkPassword();

echo "Teacher role:" .$teacher2->getRole() ."<br>";

$teacher1->getPermission();
echo "<br>";
$student->getPermission();

?>