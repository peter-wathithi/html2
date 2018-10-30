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
        $con=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        return$con;

    }
    public function saveRecords($tbName,$firstname,$email,$about,$password)
    {
        $conn=$this->connect();
        mysqli_query($conn, "INSERT into $tbName VALUES ('$firstname','$email','$about','$password')");
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
    $obj->saveRecords("register",$firstname,$email,$about,$password);
    echo "Records Saved ";
}
//var_dump(extract($_POST), isset($save));
?>
