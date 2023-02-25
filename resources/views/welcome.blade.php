<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Study Shop</title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            header{
                padding-top: 10px;
                padding-left: 10px;
                background: linear-gradient(to right, #1a202c 20%, #1f62c3 60%, #1c87c9);
            }
            nav{
                display: flex;
                justify-content: flex-end;
                padding-right: 22px;
                background: linear-gradient(to right, #1a202c 20%, #1f62c3 60%, #1c87c9);
            }
            #menu{
                padding-right: 12px;
            }
            main{
                display: flex;
            }
            input{
                padding:4px 10px;
                border:0;
                font-size:16px;
            }
            .search {
                width: 80%;
            }
            .submit{
                width: 70px;
                background-color: #1a202c;
                color:#ffffff;
            }
            a{
                text-decoration: none;
                color: #000000;
            }
            nav ul{
                list-style-type: none;
            }
            nav ul li{
                float: left;
                padding: 10px;
            }
            nav ul li:hover{
                background-color: #1a202c;
            }
            #cart img{
                width: 38px;
            }
            #search_bar{
                width: 50%;
                padding-top: 6px;
            }
            #lsb{
                width: 30%;
            }
            #content{
                width: 70%;
            }
            footer{
                background: linear-gradient(to right, #1a202c 20%, #1f62c3 60%, #1c87c9);
                text-align: center;
            }
        </style>

    </head>
    <body>
    <header>
        <h1><a href="#">Study Shop</a></h1>
    </header>
    <nav>
        <div id="search_bar">
            <form>
                <input type="text" name=text" class="search" placeholder="Search here !">
                <input type="submit" name="submit" class="submit" value="Search">
            </form>
        </div>
        <div id="menu">
            <ul>
                <li><a href="#">Cathalog</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Personal account</a></li>

            </ul>
        </div>
        <div id="cart">
            <a href="#"><img src="{{ asset('images/carticon.png') }}" alt="Cart"></a>
        </div>
    </nav>
    <main>
        <div id="lsb">

        </div>
        <div id="content">

        </div>
    </main>
    <footer>
        Our graduation project &copy; 2023
    </footer>
    </body>
</html>
