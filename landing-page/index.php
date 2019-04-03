<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

        <title>Brother Labs</title>

        <style>
            body, html {
                height: 100%;
                margin: 0;
                font: 400 15px/1.8 "Lato", sans-serif;
                color: #777;
            }

            .bgimg-1, .bgimg-2, .bgimg-3 {
                position: relative;
                /*opacity: 0.65;*/
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

            }
            .bgimg-1 {
                background-image: url("img/1920-1080/brother-labs.jpg");
                height: 100%;
            }

            .caption {
                position: absolute;
                left: 0;
                top: 50%;
                width: 100%;
                text-align: center;
                color: #000;
            }

            .caption span.border {
                background-color: #333;
                color: #fff;
                padding: 18px;
                font-size: 25px;
                letter-spacing: 10px;
                border: 0 !important;
            }

            h3 {
                letter-spacing: 5px;
                text-transform: uppercase;
                font: 20px "Lato", sans-serif;
                color: #111;
            }
            
            #link-btn {
                position: absolute;
                top: 75%;
                left: 0;
                text-align: center;
                max-width: 100% !important;
            }
            
            #link-design, #link-devel {
                border-radius: 50px;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                background-color: transparent;
                border-color: #fff;
                width: 200px;
                padding: 15px 30px;
            }
        </style>
    </head>
    <body>

        <div class="bgimg-1">
            <div class="caption">
                <span class="border">Brother Labs</span><br>
                <span class="border">An Awesome Collaborative Projects</span>
            </div>
        </div>

        <div class="container" id="link-btn">
            <div class="row">
                <div class="col-md">
                    <a class="btn btn-primary btn-lg" id="link-design" href="#">Designer</a>
                </div>
                <div class="col-md">
                    <a class="btn btn-primary btn-lg" id="link-devel" href="#">Developer</a>
                </div>
            </div>

        </div>



        <script src="vendor/jquery/jquery.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>