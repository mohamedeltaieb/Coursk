<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container" style="max-width: 50%;">
    <div class="text-center mt-5 mb-4">
        <h2>Search in Category</h2>
    </div>
    <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search ....">
</div>

<div id="searchresult"></div>

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
