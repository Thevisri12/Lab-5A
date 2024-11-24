
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <?php 
        $name = ": Thevisri Sivam";
        $Matric = ": DI220074";
        $Course = ": Bachelors of Computer Science ";
        $Year_of_study = ": 3";
        $Address = ": Klang, Selangor";
        

    ?>
    <br>
    <h1>My Details</h1>
    <br>
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td> 
        </tr>
        <tr>
            <td>Matric Id</td>
            <td><?php echo "$Matric"; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$Course"; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$Year_of_study"; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$Address"; ?></td> 
        </tr>
    </table>
    
</body>
</html>
