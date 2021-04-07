<!DOCTYPE html lang="en"> <!-- declares website language and language of code -->
<html>

<head>
    <!--defines elements of page -->
	<meta charset="utf-8">   <!-- defines the characters to be used in webpage -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="Team Blog">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,PHP">
    <meta name="author" content="Callum Wishart">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Arvo:wght@700&display=swap" rel="stylesheet">    <!-- imports fonts for website -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- imports fonts for website -->
    <link rel="preconnect" href="https://fonts.gstatic.com"><!-- imports fonts for website -->
<link rel="preconnect" href="https://fonts.gstatic.com"><!-- imports fonts for website -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;600;900&display=swap" rel="stylesheet">
    <title>MAGS O Team</title> <!-- title of webpage -->
    
    <!-- link to css -->
    <link href="style_sheet.css" rel="stylesheet">
    
</head>
<body>
    <div class="grid-container"> <!-- wraps all content in div so wrapper can be used -->
        <div class="item1">    <!-- header element -->
            <h1 class="header">MAGS ORIENTEERING</h1> <!-- name of website / logo -->
        </div>
        
        <!--navbar-->
        <div class="nav">
            <ul>
                <li>
                    <a class="home_link" href="index.php">HOME</a> <!-- links to other pages -->
                    <a href="news.php">IMAGES</a>    <!-- links to other pages -->
                    <a href="contact.php">CONTACT</a>   <!-- links to other pages -->
                        <div class="dropdown"><!--dropdown link-->
                            <a href="events.php">
                                <button class="dropbtn">EVENTS</button>
                            </a>
                            <div class="dropdown-content">
                                <a class="dropdown-link" href="events.php">Schools Events</a>
                                <a class="dropdown-link" href="events.php">Club Events</a>
                                <a class="dropdown-link" href="events.php">All</a>
                            </div>
                        </div>
                </li>
            </ul>
        </div>