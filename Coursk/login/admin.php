<!DOCTYPE html>
<?php
// Check if the delete button is clicked
if (isset($_POST['delete_btn'])) {
    $delete_id = $_POST['delete_id'];
    
    // Connect to the database
    $db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Prepare and execute the delete query
    $delete_query = "DELETE FROM courses WHERE id = '$delete_id'";
    if ($db->query($delete_query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }

    $db->close();
}
if (isset($_POST['accept_btn'])) {
    $accept_id = $_POST['accept_id'];
    $category = $_POST['category'];

    $db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Move the row to the appropriate table based on category
    switch ($category) {
        case 'backend':
            $new_table = 'back';
            break;
        case 'cs':
            $new_table = 'security';
            break;
        case 'frontend':
            $new_table = 'front';
            break;
        case 'ai':
            $new_table = 'ai';
            break;
        case 'flutter':
            $new_table = 'flutter';
            break;
        case 'ml':
            $new_table = 'macine';
            break;
        case 'ds':
            $new_table = 'datascience';
            break;
        case 'android':
            $new_table = 'android';
            break;
        default:
            $new_table = ''; // Handle default case or error
    }

    if (!empty($new_table)) {
        // Insert into the target table
        $move_query = "INSERT INTO $new_table SELECT * FROM courses WHERE id = '$accept_id'";
        if ($db->query($move_query) === TRUE) {
            // If the target table is not 'search', insert into 'search' table too
            if ($category !== 'search') {
                $search_query = "INSERT INTO search SELECT * FROM courses WHERE id = '$accept_id'";
                if ($db->query($search_query) === TRUE) {
                    echo "Record inserted into 'search' table successfully";
                } else {
                    echo "Error inserting record into 'search' table: " . $db->error;
                }
            }

            // Delete from 'courses' table
            $delete_query = "DELETE FROM courses WHERE id = '$accept_id'";
            if ($db->query($delete_query) === TRUE) {
                echo "Record moved successfully";
            } else {
                echo "Error deleting record: " . $db->error;
            }
        } else {
            echo "Error moving record: " . $db->error;
        }
    } else {
        echo "Invalid category";
    }

    $db->close();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The admin page</title>
    <style>
    
    body {
            background-color: #555; /* خلفية الصفحة باللون الرصاصي */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80px;
            background-color: #f0f0f0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .container h1 {
            font-size: 24px;
            color: #333;
        }

       table {
    margin: auto;
    margin-top: 150px;
    background-color: #fff; /* خلفية الجدول باللون الأبيض */
    box-shadow: 0px 0px 10px rgba(0, 0, 255, 0.3); /* Shadow على الجدول باللون الأزرق */ /* فصل الخلايا في الجدول */
    border-spacing: 0.5px; /* تحديد المسافات بين الخلايا */
}

table th, table td {
    padding: 5px; /* تعديل الهامش داخل الخلايا */
    text-align: center;
    border: 2px solid black;
}

       

    </style>
</head>
<body >
    <div class="container">
        <h1 style="font-size: 30px;">Admin</h1>
    </div>

    <table border="solid">
        <tr>
            <th style="background-color: #000; color: blue; font-weight: bold;">id</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">name</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">instructor</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">rate</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">duration</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">link</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">category</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">image</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">Accept</th>
            <th style="background-color: #000; color: blue; font-weight: bold;">Delete</th>
        </tr>
        <?php include 'lastserver.php'; ?>
    </table>


</body>
</html>
