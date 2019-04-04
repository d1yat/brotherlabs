<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">

        <title>Brother Labs</title>

        <style>
            body {
                background: url('img/1920-1080/bl-header-img.jpg') no-repeat center center fixed;
                background-size: cover;
            }

            .container {
                position: absolute;
                top: 50%;
                left: 0;
                text-align: center;
                max-width: 100%;
            }

            .container .bl-btn {
                padding: 15px 30px;
                border-radius: 50px;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                color: #fff;
                background-color: transparent;
                border: 1px solid #fff;
            }

            .container h1 {
                display: inline-block;
                background-color: #333;
                color: #fff;
                font-size: 32px;
                padding: 15px;
                letter-spacing: 4px;
                margin-top: 0;
            }
            
            @media only screen and (max-width: 768px) {
                body {
                    background: url('img/1366-768/bl-header-img-small.jpg') no-repeat center center fixed;
                    background-size: cover;
                }
            }
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Brother Labs</h1>
                    <p style="color:#fff; font-weight:600;">An Awesome Collaborative Projects</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <a href="#" class="btn btn-default btn-lg bl-btn">Designer</a>
                </div>
                <div class="col-sm-6">
                    <a href="#" class="btn btn-default btn-lg bl-btn">Developer</a>
                </div>
            </div>
        </div>


        <script src="vendor/jquery/jquery.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>