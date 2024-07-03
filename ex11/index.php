<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    .clear {
        clear: both;
    }
    .header {
        font-family: Arial, Helvetica, sans-serif;
        padding: 12px;
    }
    .header-content {
        display: flex;
        max-width: 1400px;
        width: 100%;
        margin: auto;
        justify-content: space-between;
    }
    .header-content .logo img {
        width: 100px;
    }
    .header-content .search {
        margin: 0 60px;
        max-width: 850px;
        width: 100%;
    }
    .header-content .search-bar {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        display: flex;
    }
    .header-content .search-bar i {
        padding-left: 12px;
        padding-right: 12px;
        color: #717171;
    }
    .header-content .search-bar input {
        flex: 15;
        outline: none;
        border: none;
        position: relative;
    }
    .header-content .search-bar button {
        flex: 2;
        border: none;
        border-left: 1px solid #ccc;
        cursor: pointer;
        color: #0a68ff;
    }
    .header-content .hint ul {
        list-style: none;
        padding: 4px 0;
    }
    .header-content .hint li {
        float: left;
    }
    .header-content .hint ul::after {
        content: "";
        display: block;
        clear: both;
    }
    .header-content .hint a {
        padding: 0 8px;
        font-size: 14px;
        text-decoration: none;
        color: #717171;
    }
    .header .user .top {
        display: flex;
        justify-content: space-around;
    }
    .list {
    max-width: 1200px;
    width: 100%;
    margin: auto;
    font-family: Arial, Helvetica, sans-serif;
    }
    .wrapper {
        float: left;
        width: 33.33333%;
        margin: auto;
        font-family: Arial, Helvetica, sans-serif;
    }
    .item    {
        margin: 40px;
    }
    img {
        width: 100%;

    }
    .body {
        font-size: 20px;
        min-height:120px;
    }
    .price {
        font-weight: bold;
    }
    .price .op {
        font-weight: normal;
        opacity: 0.6;
    }
    .price .red {
        color: red;
    }
    .header .user .top .home p,
    .header .user .top .acc p,
    .header .user .top .cart {
        margin: 0;
        color: #717171;
        cursor: pointer;
        padding: 8px 0;
    }
    .header .user .bot p {
        color: #717171;
        font-size: 14px;
    }
    .header .user .bot span {
        color: #000;
        font-size: 12px;
        text-decoration: underline;
    }
    .footer {
        height: 50px;
        margin-top: 20px;
        background-color: #0a68ff;
        text-align: center;
        line-height: 50px;
        color: #fff;
    }
</style>
<body>
    <div class="main">
        <?php
        include('header.php');
        include('product.php');
        include('footer.php');
        ?>
    </div>
    
</body>
</html>