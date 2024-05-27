<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine-Learning</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around; 
    }

    .card {
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 255, 0.1); /* اللون الأزرق هنا */
        background-color: #fff;
        max-width: 300px;
        flex: 0 1 calc(25% - 40px); 
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

        header{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top:0; left: 0;
    z-index: 1000;
    padding:1.5rem 7%;
    background:var(--gradient);
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}

.header #logo img{
    width: 80px;
}
.header .navbar a{
    font-size: 1.7rem;
    margin-left: 1.5rem;
    color: var(--maincolor);

}
.header .navbar a:hover{
   color: black;
}
.header .icons{
    font-size: 1.5rem;
   
}

.header .icons div{
    margin-left: 1rem;
    cursor: pointer;
}
.header .icons div:hover{
    color: var(--maincolor);
}
.header .icons #menu-bars{
    display: none;
}
.header .search-box{
    position: absolute;
    top: 110%;
    right: 100%;
    width: 40%;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.header .search-box input{
    padding: 1.5rem;
    border-radius: 15px;
    width: 70%;
    border: none;
}
.header .search-box.active{
    right: 2rem;
}
.header .navbar.active{
    left: 0;
}

.search-box {
    position: absolute;
    top: 100%;
    right: 0;
    width: 100px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 5px;
    display: none;
}

.search-box.active {
    display: block;
}

.search-icon {
    cursor: pointer;
}

.download-container {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Adjust as needed */
        }

        .Roadmap {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .Roadmap:hover {
            background-color: #0056b3;
        }

</style>

<body>


<body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let searchIcon = document.querySelector('.search-icon');
        let searchBox = document.querySelector('.search-box');

        searchIcon.addEventListener('click', function () {
            searchBox.classList.toggle('active');
        });
    });
</script>

<header class="header">

<a href="../coursk.php" class="logo" style="color: black;font-size: 20px;"><i class="fas fa-user-graduate" style="color: black;font-weight: bold;">Coursk</i></a>
<nav class="navbar">



    <a class="active" href="" style="margin-left: 100px;" ></a>
    <a href="#contact" style="font-weight: bold;margin-left: 100px;"></a>



</nav>
</header>



<h1 style="font-size: 35px;margin-bottom: 20px;">Machine-Learning</h1>
    <div class="container">
        
    <div class="download-container">
    <a href="../Roadmao/ai-data-scientist.pdf"><button  class="Roadmap" >Roadmap</button></a>
            </a>
        </div>

        <?php include 'servermachine.php'; ?>
    </div>
</body>
</html>
