
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        /* card details start  */
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
        section{
            padding: 80px 0;
        }
        .details-card {
            background: #ecf0f1;
        }

        .card-content {
            background: #ffffff;
            border: 4px;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
        }

        .card-img {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            z-index: 1;
        }

        .card-img img {
            width: 100%;
            height: auto;
            display: block;
        }

        .card-img span {
            position: absolute;
            top: 15%;
            left: 12%;
            background: #1ABC9C;
            padding: 6px;
            color: #fff;
            font-size: 12px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            transform: translate(-50%,-50%);
        }
        .card-img span h4{
            font-size: 12px;
            margin:0;
            padding:10px 5px;
            line-height: 0;
        }
        .card-desc {
            padding: 1.25rem;
        }

        .card-desc h3 {
            color: #000000;
            font-weight: 600;
            font-size: 1.5em;
            line-height: 1.3em;
            margin-top: 0;
            margin-bottom: 5px;
            padding: 0;
        }

        .card-desc p {
            color: #747373;
            font-size: 14px;
            font-weight: 400;
            font-size: 1em;
            line-height: 1.5;
            margin: 0px;
            margin-bottom: 20px;
            padding: 0;
            font-family: 'Raleway', sans-serif;
        }
        .btn-card{
            background-color: #1ABC9C;
            color: #fff;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            padding: .84rem 2.14rem;
            font-size: .81rem;
            -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            margin: 0;
            border: 0;
            -webkit-border-radius: .125rem;
            border-radius: .125rem;
            cursor: pointer;
            text-transform: uppercase;
            white-space: normal;
            word-wrap: break-word;
            color: #fff;
        }
        .btn-card:hover {
            background: orange;
        }
        a.btn-card {
            text-decoration: none;
            color: #fff;
        }
        /* End card section */
    </style>






    <!-- details card section starts from here -->
<div class="container  ">
    <h2 class="text-center mb-3">Trending now</h2>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/nature" alt="">
                                <span><h4>#bringBack</h4></span>
                            </div>
                            <div class="card-desc">
                                <h3>Dear Mr President</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/animals" alt="">
                                <span><h4>heading2</h4></span>
                            </div>
                            <div class="card-desc">
                                <h3>Bring back Zimbabwe</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card">Read</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/tech" alt="">
                                <span><h4>heading3</h4></span>
                            </div>
                            <div class="card-desc">
                                <h3>Header 3</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="#" class="btn-card">Read</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <p>this is a div</p>
                <img class="d-block " src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



</div>