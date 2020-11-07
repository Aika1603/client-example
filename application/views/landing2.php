
<!doctype html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="https://sso.saepulasep.my.id/global_assets/images/logo_unsika.png">

        <title>Sikeu Unsika</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        
        <!-- Custom styles for this template -->
        <link href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/sticky-footer-navbar.css" rel="stylesheet">
        <style>
            body {
                background:url('assets/bg.png')center ;
                /* background-color: #fff; */
                background-size : cover;
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-blend-mode: difference;
                box-sizing: content-box;
                
            }
            #main {
                margin-top:160px;
            }
            
            a {
                display: block;
                /* text-align: right; */
                text-decoration: none;
                color: #999;
                font-size: 1rem;
                transition: .3s;
            }

            a:hover{
                color:black;
            }

            .btn{
                display: block;
                border:2px solid white;
                width: 150px;
                height: 45px;
                border-radius: 25px;
                outline: none;
                background-image: linear-gradient(to right, #ffc107, #da251c, #ffc107);
                background-size: 200%;
                font-size: 1.2rem;
                color: #fff;
                font-family: 'Poppins', sans-serif;
                text-transform: uppercase;
                margin: 1rem 0;
                cursor: pointer;
                transition: .5s;
            }
            .btn:hover{
                background-position: right;
            }

            /* for responsive view  */
            @media (max-width:768px){
                #icon {
                    display: none;
                }

                 #main {
                    margin-top:60px;
                }
            }
        </style>
    </head>
    <body>
        
        <main role="main" id="main" class="container">
            <div class="row">
                <div class="col-sm-6 animated bounceIn">
                    <h1 class="cover-heading text-left"> <span style="font-size:45px;">Selamat Datang</span> <br /> <small>Sistem Keuangan Unsika
                            <br /> (SIKEU)</small></h1>
                    <p class="lead">Ini adalah contoh landing page sikeu unsika </p>
                    <img src="https://sso.saepulasep.my.id/global_assets/images/logo_unsika.png" alt="Logo UPI.edu" style="width:65px;">
                    <p class="lead">
                        <a href="<?php echo site_url('auth');?>" class="btn">Sign In</a>
                    </p>
                </div>
                <div class="col-sm-6  animated bounceIn" id="icon">
                    <img src="assets/icon2.svg" alt="Icon" style="width:500px; margin-left:20px;">
                </div>

            </div>
            
        </main>

        <footer class="footer animated slideInUp" style="opacity:0.8;">
            <div class="container text-center">
                <span class="text-muted">&copy; SIKEU | <b> Universitas Singaperbangsa Karawang</b> 2020</span>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </body>
</html>
