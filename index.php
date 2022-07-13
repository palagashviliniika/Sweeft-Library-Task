<?php
require "classes/booksView.php";

//instantiatingview class
$results = new BooksView();

//fetching all books
$books = $results->getBooks();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookinder</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookinder</title>
    <link rel="stylesheet" href="Style/header.css">
    <link rel="stylesheet" href="Style/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Style/popular3.css">
    <link rel="stylesheet" href="Style/footer.css">
    <link rel="stylesheet" href="Style/advanced.css">
    <script src="app.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body>
<div class="header">
    <div class="header_inner">
        <div class="header1">
            <a class="fa fa-bookmark night" href="" ></a>
            <a class="name night" href="" id="header1">bookinder</a>
        </div>
        <div class="header2">
            <a class="h2" href="">home</a>
            <a class="h2" href="">features</a>
            <a class="h2" href="">about us</a>
            <a class="h2" href="">news</a>
            <a class="h2" href="">videos</a>
            <a class="h2" href="">contacts</a>
        </div>
    </div>
</div>


<div class="popular3">
    <div class="container_popular3">
        <div class="headline">popular posts</div>

        <div class="container second">

            <script>
                for(var i=0; i<books.length; i++){
                    document.write(
                        "<div class='post'>"+
                        "<div class='img' style='background-image: url("+books[i].url+")'>"+

                        "</div>"+
                        "<div class='popular_description'>"+
                        "<h3 class='h3_art'>"+"<a href='' class='popular_article'>"+

                        books[i].dasaxeleba+

                        "</a>"+"</h3>"+
                        "<div class='popular_subtitle'>"+
                        "<div class='fa fa-star'>"+"</div>"+
                        "<a class='popular_subtext'>"+books[i].avtori+" - "+books[i].gamomcemloba+", "+books[i].weli+ "</a>"+
                        "</div>"+

                        "<div class='popular_subtitle second'>"+
                        "<div class='fa fa-heart'id='icon'>"+"</div>"+
                        "<a class='like_subtext'>"+books[i].Janri+"<br>"+books[i].fasi+" ₾"+"</a>"+
                        "</div>"+
                        "</div>"+
                        "</div>"
                    );
                }
            </script>

        </div>
    </div>
</div>

<div class="advanced">


    <div class="search">
        <div class="formname">search</div>

        <div class="div">
            <input type="text" placeholder="დასახელება" class="input" id="dasaxeleba">
        </div>

        <div class="div">
            <input type="text" placeholder="ავტორი" class="input">
        </div>

        <div class="div">
            <input type="text" placeholder="გამომცემლობა" class="input">
        </div>

        <div class="div">
            <input type="text" placeholder="გამოცემის წელი" class="input">
        </div>

        <div class="div">
            <select  placeholder="ჟანრი" class="select">
                <option value="პოემა">პოემა</option>
                <option value="ლირიკა">ლირიკა</option>
                <option value="კომედია">კომედია</option>
            </select>
        </div>


        <input type="button" value="ძებნა" onclick="find_book();" class="search_btn">


    </div>


    <div class="search register">
        <div class="formname">add book</div>
        <div class="div">
            <input id="autor" type="text" placeholder="ავტორი *" class="input">
        </div>

        <div class="div">
            <input type="text" placeholder="დასახელება *" class="input" id="r_dasaxeleba">
        </div>

        <div class="div">
            <input type="text" placeholder="გამომცემლობა" class="input">
        </div>

        <div class="div">
            <input type="text" placeholder="გამოცემის წელი" class="input">
        </div>

        <div class="div">
            <select  placeholder="ჟანრი" class="select" id="Janri">
                <option value="პოემა">პოემა</option>
                <option value="ლირიკა">ლირიკა</option>
                <option value="კომედია">კომედია</option>
            </select>
        </div>

        <input type="button" value="დამატება" onclick="add_book();" class="search_btn second">

    </div>
</div>

<footer class="footer">
    <div class="line"></div>
    <div class="container footer">
        <div class="footer_description">
            <div class="fa fa-book"></div>
            <div class="footer_text">Sweeft Library Task - Nika Palagashvili</div>
        </div>
        <div class="footer_navigation">
            <a class="hf" href="">features</a>
            <a class="hf" href="">about us</a>
            <a class="hf" href="">news</a>
            <a class="hf" href="">videos</a>
            <a class="hf" href="">contacts</a>
        </div>
    </div>
    <div class="copyright">
        © Copyright 2019 logo Here  – All Rights Reserved.
    </div>
</footer>



</body>
</html>

</body>
</html>