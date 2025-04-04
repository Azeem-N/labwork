<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: url('indiancricket.jpg'); 
            background-size: cover; 
            background-position: center; 
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            padding: 20px;
            color: white;
            margin: 0;
        }

        .container {
            width: 200px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(230, 226, 226, 0.8); 
            border-radius: 8px;
        }

        table {
            width: 200px;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

       
        tr {
            background-color: white; 
        }

        tr:hover {
            background-color: #f2f2f2; 
        }

      

    </style>
</head>
<body>

<h2>Indian Cricket Players</h2>

<div class="container">

<?php

$players = array(
    "Virat Kohli", 
    "Rohit Sharma", 
    "MS Dhoni", 
    "Shikhar Dhawan", 
    "Hardik Pandya", 
    "Jasprit Bumrah", 
    "KL Rahul", 
    "Ravindra Jadeja", 
    "Cheteshwar Pujara", 
    "Kagiso Rabada"
);


echo "<table>";
echo "<tr><th>Player Name</th></tr>"; 

foreach ($players as $player) {
    echo "<tr><td>$player</td></tr>";
}

echo "</table>";

?>

</div>


</body>
</html>
