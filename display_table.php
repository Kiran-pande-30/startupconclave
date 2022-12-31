<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
   
   <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Welcome</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

   </head>
   
   <body>

   <?php
        $servername = "localhost";
        $username = "ias2020";
        $password = "ecell123";
        $dbname = "suc_login";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT id, team_name,leader_name, contact, email,sector, other, size, name1, email1, contact1, name2, email2, contact2, name3, email3, contact3, name4, email4, contact4, submitted_at FROM users";
        $result = mysqli_query($conn, $sql);
        
    ?>

   <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Index</th>
                <th scope="col">Team Name</th>
                <th scope="col">Leader Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Sector</th>
                <th scope="col">Other</th>
                <th scope="col">Size</th>
                <th scope="col">Name1</th>
                <th scope="col">Email1</th>
                <th scope="col">Contact1</th>
                <th scope="col">Name2</th>
                <th scope="col">Email2</th>
                <th scope="col">Contact2</th>
                <th scope="col">Name3</th>
                <th scope="col">Email3</th>
                <th scope="col">Contact3</th>
                <th scope="col">Name4</th>
                <th scope="col">Email4</th>
                <th scope="col">Contact4</th>
                <th scope="col">Submission time</th>

            </tr>
        </thead>
        <?php
            while($row = mysqli_fetch_assoc($result)):
        ?>
        <tbody>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["team_name"]; ?></td>
                <td><?php echo $row["leader_name"]; ?></td>
                <td><?php echo $row["contact"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["sector"]; ?></td>
                <td><?php echo $row["other"]; ?></td>
                <td><?php echo $row["size"]; ?></td>
                <td><?php echo $row["name1"]; ?></td>
                <td><?php echo $row["email1"]; ?></td>
                <td><?php echo $row["contact1"]; ?></td>
                <td><?php echo $row["name2"]; ?></td>
                <td><?php echo $row["email2"]; ?></td>
                <td><?php echo $row["contact2"]; ?></td>
                <td><?php echo $row["name3"]; ?></td>
                <td><?php echo $row["email3"]; ?></td>
                <td><?php echo $row["contact3"]; ?></td>
                <td><?php echo $row["name4"]; ?></td>
                <td><?php echo $row["email4"]; ?></td>
                <td><?php echo $row["contact4"]; ?></td>
                <td><?php echo $row["submitted_at"]; ?></td>

            </tr>
        </tbody>
        <?php endwhile; ?>
   </table>
   
   <button type="button" class="btn btn-secondary btn-lg btn-block"><a href = "display_logout.php">Log Out</a></button>
   </body>
   
</html>
