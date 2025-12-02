<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webpage Layout</title>
    <style>
        /* CSS for All */
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 1%;
        }
        .img-responsive {
            width: 100%;
        }
        .img-curve {
            border-radius: 15px;
        }

        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .text-left {
            text-align: left;
        }
        .text-white {
            color: white;
        }

        .clearfix {
            clear: both;
            float: none;
        }

        a {
            color: #5d9e5f;
            text-decoration: none;
        }
        a:hover {
            color: #5d9e5f;
        }

        .btn {
            padding: 1%;
            border: none;
            font-size: 1rem;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #5d9e5f;
            color: white;
            cursor: pointer;
        }
        .btn-primary:hover {
            color: white;
            background-color: #5d9e5f;
        }
        h2 {
            color: #2f3542;
            font-size: 2rem;
            margin-bottom: 2%;
        }
        h3 {
            font-size: 1.5rem;
        }
        .float-container {
            position: relative;
        }
        .float-text {
            position: absolute;
            bottom: 50px;
            left: 40%;
        }
        fieldset {
            border: 1px solid white;
            margin: 5%;
            padding: 3%;
            border-radius: 5px;
        }

        .error {
            padding: 2%;
            color: red;
        }
        .success {
            padding: 2%;
            color: green;
        }

        /* CSS for navbar section */
        .logo {
            width: 10%;
            float: left;
        }
        .menu {
            line-height: 60px;
        }
        .menu ul {
            list-style-type: none;
        }

        .menu ul li {
            display: inline;
            padding: 1%;
            font-weight: bold;
        }

        /* CSS for Food Search Section */
        .food-search {
            /* Note: The image path is relative and may not display locally without the file */
            background-image: url(../images/fosyyyy.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 7% 0;
        }

        .food-search input[type="search"] {
            width: 50%;
            padding: 1%;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
        }

        .food-search2 {
            /* Note: The image path is relative and may not display locally without the file */
            background-image: url(../images/ibg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 7% 0;
        }

        .food-search2 input[type="search"] {
            width: 50%;
            padding: 1%;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
        }

        /* CSS for Categories */
        .categories {
            padding: 4% 0;
        }

        .box-3 {
            width: 28%;
            float: left;
            margin: 2%;
        }

        /* CSS for Food Menu */
        .food-menu {
            background-color: #ececec;
            padding: 4% 0;
        }
        .food-menu-box {
            width: 43%;
            margin: 1%;
            padding: 2%;
            float: left;
            background-color: white;
            border-radius: 15px;
        }

        .food-menu-img {
            width: 20%;
            float: left;
        }

        .food-menu-desc {
            width: 70%;
            float: left;
            margin-left: 8%;
        }

        .food-price {
            font-size: 1.2rem;
            margin: 2% 0;
        }
        .food-detail {
            font-size: 1rem;
            color: #747d8c;
        }
        
        /* CSS for Social Section */
        .social ul {
            list-style: none;
        }

        .social ul li {
            display: inline;
            padding: 0 10px;
        }
    </style>
</head>
<body>

    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="https://facebook.com/qr?id=61556230419409"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" alt="Facebook"/></a>
                </li>
                <li>
                    <a href="https://t.me/casestore26order"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"/></a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/@casestore26order"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt="Twitter"/></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/invites/contact/?igsh=nyn4dw5p2gey&utm_content=tw8ykz3"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"/></a>
                </li>
            </ul>
        </div>
    </section>
    </body>
</html>