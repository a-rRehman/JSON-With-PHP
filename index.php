<!DOCTYPE html>
<html>

<head>
    <title>JSON Data Display</title>
</head>

<body>
    <h1>Employees</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>

        <?php
$data = file_get_contents('data.json');

$employees = json_decode($data, true)['employees'];
$employees = json_decode($data, true)['owners'];

foreach ($employees as $employee) {
    echo '<tr>';
    echo '<td>' . $employee['name'] . '</td>';
    echo '<td>' . $employee['position'] . '</td>';
    echo '<td>' . $employee['salary'] . '</td>';
    echo '</tr>';
}
?>
    </table>
</body>

</html>