<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROLAND BBOSA</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body{
            font-family:Roboto, sans-serif;
            background-color:#0D0D0D;
            color:#FFFFFF;
            justify-content: center;
            align-items: center;
            align-content: center;
        }

        h1 {
            margin-top: 100px;
            letter-spacing: 1px;
            padding: 15px;
            background: black;
            color: white;
            font-size: 60%;
            width: 30%;
            border-radius: 30px 30px 0px 0px;
        }
        h5 {
            letter-spacing: 1px;
            padding: 15px;
            background: #221E1E;
            color: white;
            font-size: 50%;
            width: 30%;
            border-radius: 0px 0px 30px 30px;
        }

        a {font-size: 0px; padding: 0px; margin: 0px;}
        img{height:0px; width: 0px; visibility: 0;}
        object{
            flex:1 0 12.5rem;
            margin:0.625rem;
            /*border:2px solid #FFFFFF;*/
        }
        object{
            display: inline-block;
            position: relative;
            max-height: 300px;
            background-size:cover;
            box-shadow:0.3rem 0.4rem 0.4rem rgba(0, 0, 0, 0.4);
            transition:transform 500ms ease-in;
            filter:grayscale(100%);
            /*border:2px solid #FFFFFF;*/
        }
        object:hover{
            transform:scale(1.10);
            filter:grayscale(0%);
        }

        .social{
            display: inline-grid;
            position: relative;
            justify-content: center;
            text-align: center;
            align-content: center;
            box-shadow: 0 5px 4px rgba(0,0,0,.5);
        }

        .social {
            margin-top: 50px;
            margin-right: 10px;
            width: 50px;
            height: 50px;
            border-radius: 50px;
            background: white;
        }

        .social a {padding: 15px; text-decoration: none; color: black;}
        .social a:hover {color: white;}

        .social:hover{
            background: black;
            color: white;
        }
        
    </style>
</head>
<body>
    <center><h1>ROLAND BBOSA</h1></center>
    <p><center><h5>Graphics Designer | 3D Artist | Python developer</h5></center></p>
    <center>
    <div class="social"><a href="https://www.instagram.com/jusroland/" class="fa fa-instagram" target="_blank"></a></div>
    <div class="social"><a href="https://twitter.com/BbosaRoland" class="fa fa-twitter" target="_blank"></a></div>
    <div class="social"><a href="https://github.com/rolandbbosa" class="fa fa-github" target="_blank"></a></div>
    </center>

    <div style="height: 50px;"></div>

    <center>
    <?php include 'includes/fetch.php' ?>
    </center>
    
</body>
</html>