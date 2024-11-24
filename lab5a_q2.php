<?php 
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ],
];
?>

<!DOCTYPE html>
<html>
<head><title>Lab5a Q2</title>
<style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['name'] ?></td>
            <td><?= $student['program'] ?></td>
            <td><?= $student['age'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>