<?php      
    session_start();
    include('db.php');  
    if (isset($_POST['login_submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // $hashed_password = md5($password);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            foreach($result as $row){
                $user_id = $row['id'];
                $user_team_name = $row['team_name'];
                $user_leader_name = $row['leader_name'];
                $user_contact = $row['contact'];
                $user_email = $row['email'];
            }
            $_SESSION['auth'] = true;
            $_SESSION['auth_user'] = [
                'user_id' => $user_id,
                'user_team_name' => $user_team_name,
                'user_leader_name' => $user_leader_name,
                'user_contact' => $user_contact,
                'user_email' => $user_email
            ];
            $_SESSION['status'] =  "Logged In Successfully !!";
            header('LOCATION:Questionaire.php');
        } 
        else{
            $_SESSION['status'] =  "Invalid Credentials";
            header('LOCATION:login.php');
        }
} 
?>  
