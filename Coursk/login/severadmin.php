<?php
// Your database connection and query code here

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

        // Static buttons for each row
        echo "<td>";
        echo "<button onclick='action(" . $row['id'] . ", \"accept\")' style='background-color: green;'>Accept</button>";
        echo "<button onclick='action(" . $row['id'] . ", \"reject\")' style='background-color: red;'>Reject</button>";
        echo "</td>";

        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>0 result</td></tr>";
}

// Close database connection
$db->close();
?>
