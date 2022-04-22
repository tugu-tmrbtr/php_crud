<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users table</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
      include_once "menu.html";
    ?>

    <div class="container">
    <table>
        <h1 style="padding: 10px; font-size:20px">User information</h1>
        <tr>
            <th>Code</th>
            <th>Lastname</th>
            <th>Firstname</th>
            <th>Age</th>
            <th>Sex</th>
        </tr>
        
        <?php
			include('conn.php');
			$sql = "SELECT * FROM `students`";
            $result = $conn -> query($sql);
            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
		        ?>
		        <tr>
                <td><?php echo $row["st_code"]?></td>
                <td><?php echo $row["st_lastname"]?></td>
                <td><?php echo $row["st_firstname"]?></td>
                <td><?php echo $row["st_age"]?></td>
                <td><?php echo $row["st_sex"]?></td>
			    <td>
                    <a href="editform.php?id=<?php echo $row['userid']; ?>">Edit</a>
				    <a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
			    </td>
		    </tr>
		    <?php
            }
            echo "</table>";
        }
		?>
    </div>
</body>
</html>