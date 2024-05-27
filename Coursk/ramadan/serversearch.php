<?php
$db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$input = $_POST['input'];

// Escape the input to prevent SQL injection
$input = mysqli_real_escape_string($db, $input);

$sql = "SELECT image, name, instructor, rate, duration, link FROM search WHERE (name LIKE '$input%' OR instructor LIKE '$input%')"; 
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card swiper-slide">';
        echo '    <div class="image-content">';
        echo '        <span class="overlay"></span>';
        echo '        <div class="card-image">';
        echo '            <a href="' . $row['link'] . '"><img src="' . $row['image'] . '" alt="" class="card-img"></a>';
        echo '        </div>';
        echo '    </div>';
        echo '';
        echo '    <div class="card-content">';
        echo '        <h2 class="name">' . $row['name'] . '</h2>';
        echo '        <p class="description">Instructor: ' . $row['instructor'] . '</p>';
        echo '        <p class="rate">Rating: ' . $row['rate'] . '</p>';
        echo '        <p class="duration">Duration: ' . $row['duration'] . '</p>';
        echo '';
        echo '        <a href="' . $row['link'] . '"><button class="button">Free</button></a>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "No results found.";
}

$db->close();
?>
