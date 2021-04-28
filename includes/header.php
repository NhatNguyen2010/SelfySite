<?php
$page_name = basename($_SERVER['SCRIPT_NAME'], ".php");
$navLinks = ["home", "about", "contact"];

function outputNav($navLinks, $page_name) {
  $output = "";
  foreach ($navLinks as $link ) {
    if($link == "home") {
      $href = "index";
    } else {
      $href = $link;
    }

    if($href == $page_name) {
      $theclass = "class='active'";
    } else {
      $theclass = '';
    }
    $output.= "<li><a href='{$href}.php' {$theclass}>". ucfirst($link) ."</a></li>";
  }
  echo $output;
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selfysite | <?php if($page_name != "index") { echo ucfirst($page_name);} else {echo "Home";} ?></title>
    <style media="screen">
    *{
      font-family: sans-serif;
      font-weight: bold;
    }
    footer {
      background: black;
      color: white;
      text-align: center;
      padding: 20px;
    }
    header {
    background: #0cb9b9;
    padding: 5px;
    color: white;
    display:flex;
    position:relative;
    width:100%;
    }
 
    ul{
      text-align:right;
      display:inline-flex;
    }
    nav ul li
{
  padding: 10px;
  list-style: none;
  text-decoration: none;
}

    .active {
    font-family: impact;
    color: #ffe4d0;
    text-decoration: none;
    }
    div#banner
{
  background: white;
  height: 70vh;
  padding: 10vh;
  color: white;
  background-image: url(https://images.alphacoders.com/924/924729.jpg);
  background-size: 100%;
  background-repeat: no-repeat;
  background-position-x: center;
  background-position-y: 1%;
  justify-content: end;
  display: flex;
  padding-top:10px;
  padding-bottom:-200px;
}
.quote{
  position: relative;
  color:red;
  left:500px;
  font-size: 30px;
  text-align: center;
  margin-top: 10vh;
  width: 50%;
}
@media screen and (max-width: 1010px)
{
  .quote{
  font-weight:bold;
  position: relative;
  color:red;
  left:400px;
  font-size: 25px;
  text-align: center;
  margin-top: 10vh;
  width: 50%;
  }
}


#main-col
{
  width: 90%;
  background: pink;
  margin: auto;
  display: flex;
}

.col-3
{
  float: left;
  width: 33%;
  padding: 10px;
}

.col-3 p 
{
  font-size: 150%;
  margin-left: 5%; 
}

.col-four-social-icons
{
    position: fixed;
    top: 27%;
    left: 1%;
}

.col-four-social-icons img
{
    width: 30px;
    margin-top: 10px;
}

.button{
  background-color: #007bff;
  border-color: #007bff;
  color: white;
  text-align: center;
  display: block;
  width: 100%;
  font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  border-radius: 1%;
  font-size: 150%;
  
}
footer
{
  background:   black;
  color: white;
  padding:2%;
  text-align: center;
  width: 100%;
}
.container-5images{
    background: pink;
    justify-content: center;
    display: grid;
    grid-template-columns: auto auto auto;
  }
.container-5images img{
    margin-left: 30px;
    margin-right: 30px;
    height: 50vh;
    width: 40vh;
    border:solid;
    border-color: blue ;
    border-style: double;
}
.Contact{
  font-size:10vh;
  background-color:magenta;
}

    </style>
  </head>
  <body>
    <header>
      <img src="img/meltrylis.jpg" width="50px" style="margin-top:10px;border-radius:50%;float:left; object-fit:cover; height:50px;" alt="">
      <h1>Selfysite</h1>
      <nav>
        <ul>
          <?php
            outputNav($navLinks, $page_name);
           ?>
        </ul>
      </nav>
    </header>
