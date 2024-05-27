<?php
$db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT id, name, instructor, rate, duration, link, category ,image FROM courses";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";       
        echo "<td>" . $row['instructor'] . "</td>";
        echo "<td>" . $row['rate'] . "</td>";
        echo "<td>" . $row['duration'] . "</td>";
        echo "<td>" . $row['link'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['image'] . "</td>";
       echo "<td>
                <form method='post' action='admin.php'>
                    <input type='hidden' name='accept_id' value='" . $row['id'] . "'>
                    <input type='hidden' name='category' value='" . $row['category'] . "'>
                    <button type='submit' name='accept_btn' style='background-color: green;'>Accept</button>
                </form>
              </td>";
       echo "<td>
                <form method='post' action='admin.php'>
                    <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                    <button type='submit' name='delete_btn' style='background-color: red;'>Delete</button>
                </form>
              </td>"; 
        echo "</tr>";
    }
} else {
    echo "0 result";
}

$db->close();
?>
