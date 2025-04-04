<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>

<h2>Student List</h2>

<?php
$students = array("Azeem", "Adarsh", "Aromal", "Yedhu", "Zabi");
echo "<h3>Original Student List:</h3>";
echo "<pre>";
print_r($students);
echo "</pre><br>"; 

asort($students);
echo "<h3>Student List Sorted in Ascending Order:</h3>";
echo "<pre>";
print_r($students);
echo "</pre><br>"; 

arsort($students);
echo "<h3>Student List Sorted in Descending Order:</h3>";
echo "<pre>";
print_r($students);
echo "</pre><br>";  
?>

</body>
</html>
