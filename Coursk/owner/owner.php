<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="owner3.css">

    <!-- CSS -->
    <link rel="stylesheet" href="owner4.css">
    <link rel="apple-touch-icon" href="h.jpg">
    <link rel="icon" type="image/png" href="h.jpg"/>                            
</head>
<body>
    <div class="container">
        <h1 style="font-size: 50px;">Owner</h1>
        <h2 style="font-size: 24px; position: absolute; left: 0; top: 0; transform: translateY(100%); margin-left: 10px; margin-bottom:100px; ">CoursK</h2>
    </div>


 <form action="server2.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="courseNameInput">Course Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="instructorNameInput">Instructor Name:</label>
        <input type="text" id="instructor" name="instructor" required>
    </div>
    <div>
        <label for="rateInput">Rate:</label>
        <input type="text" id="rate" name="rate" required>
    </div>
    <div>
        <label for="durationInput">Duration:</label>
        <input type="text" id="duration" name="duration" required>
    </div>
    <div>
        <label for="linkInput">Link:</label>
        <input type="text" id="link" name="link" required>
    </div>
    <div>
        <label for="categorySelect">Select Category:</label>
        <select id="categorySelect" name="categorySelect" required>
            <option value="all">All</option>
            <option value="cs">Cyber Security</option>
            <option value="frontend">Frontend Development</option>
            <option value="backend">Backend Development</option>
            <option value="ai">AI</option>
            <option value="ml">Machine Learning</option>
            <option value="flutter">Flutter</option>
            <option value="ds">Data Science</option>
        </select>
    </div>
    <div>
        <label for="courseImageInput">Course Image:</label>
        <input type="file" id="courseImageInput" name="courseImageInput" accept="image/*" required>
    </div>
    <div>
        <button type="submit" name="submit">Add</button>
    </div>
</form>

   <script>
        function downloadFile() {
            alert("Wait for your data to be reviewed");
        }
    </script>
   
    <script src="owner1.js"></script>


    <script src="owner2.js"></script>

    <script>
        // Function to preview the uploaded image
        function previewImage(event) {
            var image = document.getElementById('previewImage');
            image.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
</html>
