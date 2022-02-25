<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motivational quotes</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- HEADER -->

    <div class="containter-fluid"> 

        <div id="slajder" class="carousel slide" data-ride="carousel">
                    
            <ul class="carousel-indicators">
                <li data-target="#slajder" data-slide-to="0" class="active"></li>
                <li data-target="#slajder" data-slide-to="1"></li>
                <li data-target="#slajder" data-slide-to="2"></li>
            </ul>
                
            <div class="carousel-inner">
                    
                <?php
                
                    $slike = array 
                    (
                        "images/1.jpg",
                        "images/2.jpg",
                        "images/3.jpg",
                        "images/4.jpg",
                        "images/5.jpg",
                        "images/6.jpg",
                        "images/7.jpg",
                        "images/8.jpg",
                        "images/9.jpg",
                        "images/10.jpg"
                    );
                    
                    $mesano = array_rand ($slike, 3); 
                       
                ?>

                <div class="carousel-item active">
                    <img src="<?php echo $slike[$mesano[0]] ?>" class="d-block w-100" alt="prvi">
                </div>

                <div class="carousel-item">
                    <img src="<?php echo $slike[$mesano[1]] ?>" class="d-block w-100" alt="drugi">
                </div>

                <div class="carousel-item">
                    <img src="<?php echo $slike[$mesano[2]] ?>" class="d-block w-100" alt="treci">
                </div>

            </div>

            <a class="carousel-control-prev" href="#slajder" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slajder" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>

    <!-- NAVBAR -->
    <div class="containter-fluid">

        <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
            
            <ul class="navbar-nav nav-justified">
                <li class="nav-item pl-2 pr-2"> <a class="nav-link" href="index.php"> Home page </a> </li>
                <li class="nav-item pl-2 pr-2"> <a class="nav-link" href="ljubav.php"> Love </a> </li>   
                <li class="nav-item pl-2 pr-2"> <a class="nav-link" href="posao.php"> Career </a> </li>
                <li class="nav-item pl-2 pr-2"> <a class="nav-link" href="zdravlje.php"> Zdravlje </a> </li>
            </ul>

        </nav>

    </div>


    <!-- QUOTATIONS SECTION -->
    <div class="containter-fluid">
    
        <section class="text-center">

            <?php 

                $citatiMotivacija = file('citati/motivacija.txt');
                $nasumicno = rand(0, count($citatiMotivacija) - 1);

                $citat = ""; //parni indeks
                $autor = ""; //neparni indeks

                if($nasumicno % 2 == 0)
                {
                    $citat = $citatiMotivacija[$nasumicno];
                    $autor = $citatiMotivacija[$nasumicno + 1];
                }
                else //($nasumicno % 2 == 1) ako je citat neparan, a autor paran
                {
                    $citat = $citatiMotivacija[$nasumicno - 1];
                    $autor = $citatiMotivacija[$nasumicno];
                }
                
                echo "<p class='font-weight-bold'> $citat </p>"; 
                echo "<p class='font-italic'> $autor </p>";
            
            ?>
            
        <section>
                        
    </div>


    <!-- FOOTER -->
    <div class="container-fluid">
    
        <footer class="footer fixed-bottom w-100 text-center bg-primary p-2">
            
            <?php 
                date_default_timezone_set('Europe/Belgrade');
                $datum = date("d.m.Y.");
                $vreme = date("H:i");  
                echo "<p class='text-light font-weight-bold m-0'> $datum, $vreme </p>";       
            ?>

        </footer>
    
    
    </div>





</body>
</html>