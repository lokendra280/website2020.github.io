 <?php
    $username= $_POST['username'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $message= $_GET['message'];

    $conn = new mysqli('localhost','root','','form');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt =$conn->prepare("insert into regestratio(username,email,mobile,message)values(?,?,?,?)");
        $stmt->bind_param("ssis",$username,$email,$mobile,$message);
        $stmt->execute();
        echo "registration sucessfully....";
        $stmt->close();
        $conn->close();
    }
?>

