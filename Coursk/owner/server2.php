<?php
// إنشاء اتصال
$db = mysqli_connect('sql209.infinityfree.com', 'if0_35887786', 'F0xqWy5Gfq0', 'if0_35887786_register');

// التحقق من الاتصال
if ($db->connect_error) {
  die("فشل الاتصال: " . $db->connect_error);
}

if (isset($_POST['submit'])) {
    // استلام البيانات من النموذج عن طريق POST
    $courseName = mysqli_real_escape_string($db, $_POST['name']);
    $instructorName = mysqli_real_escape_string($db, $_POST['instructor']);
   /////////////////////////////////////////////////////////////////////////////////////////////////////افتكرها
    $rate = mysqli_real_escape_string($db, $_POST['rate']);
    $duration = mysqli_real_escape_string($db, $_POST['duration']);
    $link = mysqli_real_escape_string($db, $_POST['link']);
    $category = mysqli_real_escape_string($db, $_POST['categorySelect']);

    // رفع الصورة إلى المجلد المناسب على الخادم
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["courseImageInput"]["name"]);
    move_uploaded_file($_FILES["courseImageInput"]["tmp_name"], $target_file);

    // استعلام SQL لإدخال البيانات إلى قاعدة البيانات
    $sql = "INSERT INTO courses (image, name, instructor, rate, duration, link,category)
    VALUES ('$target_file','$courseName', '$instructorName', '$rate', '$duration', '$link','$category')";

    if ($db->query($sql) === TRUE) {
        echo "تمت إضافة البيانات بنجاح";
    } else {
        echo "حدث خطأ أثناء إضافة البيانات: " . $db->error;
    }
}

// إغلاق الاتصال بقاعدة البيانات
$db->close();
?>
