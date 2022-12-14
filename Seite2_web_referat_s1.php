<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <link rel="stylesheet" href="style_web_referat_s1.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script_web_referat_s1.js"></script>
</head>
<body>

<div class="intro">
    <img id="icon_home" src="./g.jpeg" onclick="zurueck()">
    </div>
    <h2 id="unter">Spiele</h2>

    <div class="topnav">
        <a href="./index_web_referat_s1.html">Homepage</a>
        <a href="./seite2_web_referat_s1.html" class="active">Spiele</a>
        <a href="./seite3_web_referat_s1.html">Account <i class="glyphicon glyphicon-user"></i></a>
        <a href="./seite4_web_referat_s1.html">Quellen</a>
        <a href="./signup-login_web_referat_s1.html">Logout</a>
        <div id="search_bar">
        <input type="text" id="myInput" onkeyup="search()" placeholder="Search for games">
        </div>
      </div>



<div class="container">

<div class="text-center mt-5 mb-4">
    <h2>Spiele</h2>
</div>

<input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="Search... ">

</div>

<script type="text/javascript">
    $(document).ready(function() {
        console.log('HI');
        $("#live_search").keyup(function() {
            
            var input = $(this).val();
            alert(input);
        });
    });
</script>
    
</body>
</html>