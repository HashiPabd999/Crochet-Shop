<?php
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog page</title>
</head>
<style type="text/css">

    body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

    /* Container layout */
    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); /* 4 items in a row */
        gap: 20px;
        padding: 40px;
        margin-top:10%;
    }

    /* Each card */
    .container div {
        background: white;
        padding: 15px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    /* Hover effect */
    .container div:hover {
        transform: translateY(-5px);
    }

    /* Image styling */
    .container img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 8px;
    }

    /* Title */
    .container h4 {
        margin: 10px 0;
        color: #444;
    }

    /* Button */
    .container button {
        padding: 8px 15px;
        border: none;
        background-color: #90841c;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .container button:hover {
        background-color: #5a4a0a;
    }

</style>
<body>
    <div class="container">
        <div>
            <img src='assets/access.png'>
            <h4>Accessories<h4>
           <a href="AccessoryPage.php"> <button>view</button></a>
        </div>
         <div>
            <img src='assets/plushy.png'>
            <h4>Plushies<h4>
           <a href="PlushyPage.php"> <button>view</button> </a>
        </div>
        <div>
            <img src='assets/jewel.png'>
            <h4>Jewelleries<h4>
            <a href="JewelPage.php"><button>view</button></a>
        </div>
        <div>
            <img src='assets/flower.png'>
            <h4>Flowers<h4>
            <a href="FlowerPage.php"><button>view</button></a>
        </div>
        
    </div>
    
</body>
</html>