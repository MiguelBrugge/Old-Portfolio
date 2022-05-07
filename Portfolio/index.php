<!DOCTYPE html>
<html lang="en">
<head>

  <title>Miguel's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link href="CSS/PortfolioCSS.css" rel="stylesheet">

  <style>
  body {
      position: relative; 
  }
  </style>

  <link rel="icon" type="image/x-icon" href="Images/SiteIcon.png">

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">

<nav class="navbar navbar-expand-sm navbarBg navbar-dark fixed-top">

<div class="container-fluid ms-5 me-5">

  <a class="navbar-brand fw-bold logo"><span class="secondTextColor">M</span>iguel<br><span class="secondTextColor">B</span>rugge</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link navButton" href="#Home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navButton" href="#AboutMe">About Me</a>
      </li>
      <!-- <div class="dropdown">
        <button type="button" class=" dropdown-toggle nav-link navButton dropDown" data-bs-toggle="dropdown" >
          Projecten
        </button>
        <ul class="dropdown-menu dropDownMenu">
          <li><button class="dropDownButton" href="#Projecten" type="button" data-bs-toggle="offcanvas" data-bs-target="#PokemonCanvas">
                        Pokemon Game
              </button>
          </li>
        </ul>
      </div> -->
      <li class="nav-item">
        <a class="nav-link navButton" href="#Projecten">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navButton" href="#Contact">Contact</a>
      </li>
      <li class="nav-item ms-2">
        <a class="nav-link navButton" href="https://www.instagram.com/miguel_brugge/"><img class="socialLink" src="Images/InstagramLogo.png" alt="link LinkedIn"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navButton" href="https://twitter.com/Miguel_Brugge"><img class="socialLink" src="Images/TwitterLogo.png" alt="link LinkedIn"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navButton" href="https://github.com/MiguelBrugge"><img class="socialLink" src="Images/GitHubLogo.png" alt="link LinkedIn"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navButton" href="https://www.linkedin.com/in/miguel-brugge-780b66239/"><img class="socialLink" src="Images/LinkedInLogo.png" alt="link LinkedIn"></a>
      </li>
    </ul>
</div>
  </div>
</nav>

<div id="Home">
    <?php include("Content/Home.php"); ?>
</div>

<div id="AboutMe">
    <?php include("Content/AboutMe.php"); 
          include("Content/Skills.php");
    ?>
</div>

<div id="Projecten">
    <?php include("Content/Projecten.php"); ?>
</div>

<div id="Contact">
    <?php include("Content/Contact.php"); ?>
</div>

</body>
</html>
