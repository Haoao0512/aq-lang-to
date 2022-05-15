<?php 
include 'connect.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table {
            border: 1px solid;
        }
    </style>
</head>
<body>
        <div class="container">
    <table class="table table-striped">
        <thead>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>Gender</td>
            <td>Height</td>
            <td>Birthdate</td>
            <td>Nationality</td>
        </thead>
    <tbody>
        <?php 
        $sql = "SELECT * FROM artist INNER JOIN moneymaker ON artist.artist_id = moneymaker.artist_id";

        $result = mysqli_query($connect, $sql);
        if($result) {
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $firstname=$row['firstname'];
                $lastname=$row['lastname'];
                $gender=$row['gender'];
                $birthdate=$row['birthdate'];
                $nationality=$row['nationality'];

                echo "
                <thead>
                <tr>
                    <th scope="row">' .$id. '</th>
                    <th scope="row">' .$firstname. '</th>
                    <th scope="row">' .$lastname. '</th>
                    <th scope="row">' .$gender. '</th>
                    <th scope="row">' .$birthdate. '</th>
                    <th scope="row">' .$nationality. '</th>
                </tr>
            </thead>
                ";
            }
        }   else {
            echo "NO DATA INSERTED";
        }
        mysqli_close($connect);
        ?>
    </tbody>
</table>
        </div>
</body>
</html>


