<?php
require("dbconn.php");
if($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Decode the JSON data
    $json = file_get_contents('php://input');//data1["username"];
    $data1 = json_decode($json, true);
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $Gender = $_POST["Gender"];
        $Mobile_Number = $_POST["Mobile_Number"];
        $sql = "insert into login values('$username','$password')";
        // $sql1 = "INSERT INTO patient_info(username, name, age, Gender, Mobile_Number) VALUES ('username', '$name', '$age', '$Gender', '$Mobile_Number')";

        
        $sql1 = "insert into patient_infousername,name,age,Gender,Mobile_Number) values('username','$name','$age','$Gender','$Mobile_Number')";
        mysqli_query($dbconn,"INSERT INTO bsmwtusername, pbp, phr, pso2, pdys, pfat, ebp, ehr, eso2, edys, efat, t1, t2) 
VALUES ('username', '', '', '', '', '', '', '', '', '', '', '', '')");
 mysqli_query($dbconn,"INSERT INTO asmwtusername, pbp, phr, pso2, pdys, pfat, ebp, ehr, eso2, edys, efat, t1, t2) 
 VALUES ('username', '', '', '', '', '', '', '', '', '', '', '', '')");

        if(mysqli_query($dbconn, $sql) && mysqli_query($dbconn,$sql1)){
            $response = array('status' => 'success', 'message' => 'data inserted succesfully');
          echo json_encode($response);
    }
    else{
        $response = array('status'=> 'fail','message'=>"data not intrested");
    }
    
    }
}

?>