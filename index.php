<!DOCTYPE html>
<html>
<head>
  <title>CineMood</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .stars { color: orange; }
    @media screen and (max-width: 600px) {
      .w3-sidebar { display: none; }
      .w3-main { margin-left: 0 !important; }
    }

    .w3-theme-l5 { color:#000 !important; background-color:#fcf3f7 !important; }
        .w3-theme-l4 { color:#000 !important; background-color:#f5d6e3 !important; }
        .w3-theme-l3 { color:#000 !important; background-color:#ecacc8 !important; }
        .w3-theme-l2 { color:#fff !important; background-color:#e283ac !important; }
        .w3-theme-l1 { color:#fff !important; background-color:#d85a91 !important; }
        .w3-theme-d1 { color:#fff !important; background-color:#ba2c69 !important; }
        .w3-theme-d2 { color:#fff !important; background-color:#a5275e !important; }
        .w3-theme-d3 { color:#fff !important; background-color:#912252 !important; }
        .w3-theme-d4 { color:#fff !important; background-color:#7c1d46 !important; }
        .w3-theme-d5 { color:#fff !important; background-color:#67183a !important; }

        .w3-theme-light { color:#000 !important; background-color:#fcf3f7 !important; }
        .w3-theme-dark { color:#fff !important; background-color:#67183a !important; }
        .w3-theme-action { color:#fff !important; background-color:#67183a !important; }

        .w3-theme { color:#fff !important; background-color:#ce3175 !important; }
        .w3-text-theme { color:#ce3175 !important; }
        .w3-border-theme { border-color:#ce3175 !important; }

        .w3-hover-theme:hover { color:#fff !important; background-color:#ce3175 !important; }
        .w3-hover-text-theme:hover { color:#ce3175 !important; }
        .w3-hover-border-theme:hover { border-color:#ce3175 !important; }

         #m{
            font-family:Trebuchet MS;
        }

    
        #img1{
            position:absolute;
            right:350px;
            top: 40px;
            height:100px;
            width: 100px;
            
        }
        #img2{
            position:absolute;
            left:15px;
            bottom:420px;
            height:180px;
            width: 200px;
            
        }
    
        #img3{ position:absolute;
            right:150px;
            bottom: 450px;
            height:180px;
            width: 200px;
            }
        #img4{ position:absolute;
            right:70px;
            top:25px;
            height:180px;
            width: 200px;
            }
        #img5{ 
            position:absolute;
            left:360px;
            bottom:425px;
            height:180px;
            width: 100px;
            }
            #img6{ 
            position:absolute;
            left:200px;
            bottom:460px;
            height:180px;
            width: 200px;
            }
            #img7{
            position:absolute;
            right:200px;
            bottom:460px;
            height:180px;
            width:200px;

            }
          
  </style>
</head>
<body class=" w3-theme-light" >
<div class="w3-bar w3-theme w3-padding">
    <h1 class="w3-cursive w3-wide w3-center">Films et Séries</h1>
        <p class="w3-center">Bienvenue sur notre site de critiques !</p>
        <img id="img1" src="img/movie.png" alt="Movie">
        <img id="img2" src="img/tv.png" alt="TV vintage rose">
        <img id="img3" src="img/cutt.png" alt="cut">
        <img id="img4" src="img/disney.png" alt="disneypixart">
        <img id="img5" src="img/popp.png" alt="popcorn rose">
        <img id="img6" src="img/movies.png" alt="movies">
        <img id="img7" src="img/netflix.png" alt="netflix">
      

</div>


<div class="w3-sidebar w3-theme-l2 w3-bar-block" style="width:200px;">
  <a href="index.php?page=presentation" class="w3-bar-item w3-button">Présentation</a>
  <a href="index.php?page=critiques" class="w3-bar-item w3-button">Critiques</a>
  <a href="index.php?page=editcritique" class="w3-bar-item w3-button">Ajouter une critique</a>
  <a href="#" class="w3-bar-item w3-button">🔍 Rechercher</a>
                <a href="#" class="w3-bar-item w3-button">What to Watch</a>
                <a href="#" class="w3-bar-item w3-button">Top 10 films</a>
                <a href="#" class="w3-bar-item w3-button">Top 10 series </a>
                <a href="#" class="w3-bar-item w3-button">Forum</a>
</div>

<div class="w3-main" style="margin-left:200px; padding:20px;">
  <?php
    if (!isset($_GET['page']) || $_GET['page'] == 'presentation') {
      include("init.php");
    } else if ($_GET['page'] == 'critiques') {
      include("critiques.php");
    } else if ($_GET['page'] == 'editcritique') {
      include("editcritique.php");
    }
  ?>
</div>

<footer class="w3-container w3-theme w3-padding w3-center w3-">
  <p id="m">Site créé par Imene M <?= date("Y") ?> | <a href="#">Tiktok</a> | <a href="#">Instagram</a></p>
</footer>
</body>
</html>