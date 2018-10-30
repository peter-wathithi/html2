<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11/10/2018
 * Time: 19:04
 */

class Database
{

    var $host="127.0.0.1";
    var $user="root";
    var $pass="";
    var $db="user";
    public function connect()
    {
        $con=mysqli_connect("127.0.0.1","root","","user");
        return $con;

    }

    public function login ($class_work,$firstname,$password)
    {
        $connn=$this->connect();
        $result = mysqli_query($connn,"SELECT * FROM $class_work WHERE  $firstname,$password)");
        $rows=mysqli_num_rows("claswork");
        echo $rows;

    }
    public function saveRecords($tbName,$firstname,$text,$email,$password)
    {
        $conn=$this->connect();
        mysqli_query($conn, "INSERT into $tbName VALUES ('$firstname','$text','$email','$password')");
    }

}
//var_dump($_POST);
?>
<?php
$obj=new Database();
extract($_POST);
//Saved Records Inside Database
if(isset($save))
{
//here admin is table name, $userName and $pass  entered by html form
    $obj->saveRecords("class_work",$firstname,$email,$about,$password);
    echo "Records Saved ";
}
//var_dump(extract($_POST), isset($save));
if (isset($login)){
    $obj->login("class_work","$firstname","$password");
}
?>

