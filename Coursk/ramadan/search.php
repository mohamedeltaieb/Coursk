<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; 
            max-width: 100%;
        }

        .card {
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 255, 0.1); /* اللون الأزرق هنا */
            background-color: #fff;
            width: calc(25% - 40px);
            max-width: 300px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 255, 0.2); /* لون الظل عند التحويم هنا */
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .card-content {
            margin-top: 10px;
        }

        .card-content h2 {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .card-content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .button {
            background-color: #4070F4;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #265DF2;
        }

        h1 {
            font-size: 40px;
            font-weight: bold;
            color: #333; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
            padding: 20px; 
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h2>Search in Category</h2>
        </div>
        <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search ....">
    </div>

    <div id="searchresult" class="container"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#live_search").keyup(function(){
                var input = $(this).val().trim(); // Trim whitespace from the input
                if(input !== "") {
                    $.ajax({
                        url: "serversearch.php",
                        method: "POST",
                        data: {input: input},
                        success: function(data) {
                            $("#searchresult").html(data);
                        }
                    });
                } else {
                    $("#searchresult").html(""); // Clear search results if input is empty
                }
            });
        });
    </script>
</body>
</html>
