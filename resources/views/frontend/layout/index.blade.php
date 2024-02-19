<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anta&display=swap');

        .rounded-circle {
            transition: all 0.5s;
        }

        .rounded-circle:hover {
            scale: 1.1;
            box-shadow: 0 0 30px gray;
        }

        .card-text {
            font-family: "Anta", sans-serif;
            font-weight: 200;
            font-style: normal;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo2.jpg') }}" style="width: 70px;" alt="Logo">
        </a> -->
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/productpage"> Product</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catagory
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="height: 500px;   overflow: scroll;">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=alexa-skills">Alexa Skills</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=amazon-devices">Amazon Devices</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=fashion">Amazon Fashion</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=nowstore">Amazon Fresh</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=amazon-pharmacy">Amazon Pharmacy</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=appliances">Appliances</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=mobile-apps">Apps &amp; Games</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=audible">Audible Audiobooks</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=baby">Baby</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=beauty">Beauty</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=stripbooks">Books</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=automotive">Car &amp; Motorbike</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=apparel">Clothing &amp; Accessories</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=collectibles">Collectibles</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=computers">Computers &amp; Accessories</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=todays-deals">Deals</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=electronics">Electronics</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=furniture">Furniture</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=lawngarden">Garden &amp; Outdoors</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=gift-cards">Gift Cards</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=grocery">Grocery &amp; Gourmet Foods</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=hpc">Health &amp; Personal Care</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=kitchen">Home &amp; Kitchen</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=industrial">Industrial &amp; Scientific</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=jewelry">Jewellery</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=digital-text">Kindle Store</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=luggage">Luggage &amp; Bags</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=luxury-beauty">Luxury Beauty</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=dvd">Movies &amp; TV Shows</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=popular">Music</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=mi">Musical Instruments</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=office-products">Office Products</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=pets">Pet Supplies</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=instant-video">Prime Video</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=shoes">Shoes &amp; Handbags</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=software">Software</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=sporting">Sports, Fitness &amp; Outdoors</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=specialty-aps-sns">Subscribe &amp; Save</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=home-improvement">Tools &amp; Home Improvement</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=toys">Toys &amp; Games</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=under-ten-dollars">Under ₹500</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=videogames">Video Games</option>
                        </a>
                        <a class="dropdown-item" href="#">
                            <option value="search-alias=watches">Watches</option>
                        </a>
                        <div class="dropdown-divider"></div>
                        <h5 class="text-center"> Test</h5>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" style="width: 400px;" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>


    <div class="container-fluid bg-light mt-3 p-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/d2.jpg') }}" alt="First slide" height="500px" width="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/download.jpg') }}" alt="Second slide" height="500px" width="auto">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/download1.jpg') }}" alt="Third slide" height="500px" width="auto">
                </div>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle " aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <div class="container-fluid mt-3 p-3">
        <h1 class="text-center bg-light w-100 p-2 rounded">Catagory</h1>

        <div class="container mt-5 d-flex justify-content-center align-items-center flex-wrap">

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>


            <div class="card border-0 m-4" style="width: 10rem;">
                <img class="card-img-top rounded-circle" src="{{ asset('img/logo2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text text-center h3">Test</p>
                </div>
            </div>

        </div>

    </div>


    <?php
    
// echo '<pre>';
// print_r($productimg);
// die;
    $count = count($product);

    for ($i = 0; $i < count($product); $i++) {
    
        // print_r($product);
    ?>
        <div class="container-fluid p-5 ">


            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product[$i]['product_name'] ?></h5>
                    <p class="card-text"><?php echo $product[$i]['description'] ?></p>
                    <p ><?php echo $product[$i]['product_brief'] ?></p>
                    <p>Price :  <?php echo $product[$i]['price'] ?></p>
                    <p>Discounted Price :  <?php echo $product[$i]['discount_price'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

</body>

</html>