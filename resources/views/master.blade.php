<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2f62560271.js" crossorigin="anonymous"></script>
    <title>Project</title>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}       
</body>
<style>
    .navbar{
        background-color: black;
    }

    .login-btn{
        margin-right: 0;
    }
    
    .nav-link, .navbar-brand, .btn{
        color: white;
    }
    .custom-login{
        height: 80vh;
        padding-top: 200px;
    }

    .footer{
        bottom: 0;
    }

    img.slider-img{
        height: 400px !important;
        display: inline-block;
        margin-top: 20px;
    }

    .custom-product{
        height: 200vh;
    }

    .product-all{
        margin-top: 100px;
    }

    .product-all h1{
        margin-left: 310px;
        margin-bottom: 60px;
    }

    #carouselExampleCaptions {
        background-color: rgb(5, 12, 29);
        height: 610px;
    }

    .carousel-inner {
        color: white;
        text-align: center;
        height: 610px;
    }

    .carousel-item {
        height: 600px;
    }

    .custom-card {
        width: 350px; /* Set a fixed width for the card */
        height: auto; 
        margin-bottom: 50px;
        background-color: rgb(240, 236, 236); 
        border: none;
    }
    .custom-card .card-img-top {
        height: 200px; /* Set a fixed height for the card image */
        object-fit: cover; /* Ensure the image covers the designated area */
        transition: transform .2s;
    }

    .custom-card:hover {
        transform: scale(1.1); 
    }
    .custom-card .card-body {
        background-color: whitesmoke; 
    }
    
    .card-title {
        text-align: center;
    }

    .custom-card a{
        color: black;
    }

    .detail-img{
        height: 400px;
        margin-top: 100px;
        margin-bottom: 20px;
    }

    .detail-page{
        height: 76.6vh;
        background-color: rgb(248, 248, 248);
        font-family: Arial, Helvetica, sans-serif;
    }

    .detail-info h1 {
        color: black;
        font-size: 36px;
        margin-top: 100px;
        margin-bottom: 20px;
    }

    .detail-info h3 {
        color: black;
        font-size: 20px;
        margin-bottom: 20px;
        font-weight: normal;
    }

    .detail-info h4 {
        color: black;
        font-weight: normal;
        font-size: 16px;
        line-height: 1.4;
        margin-bottom: 20px;
        margin-right: 25px;
        text-align: justify;
    }

    .detail-info a {
        color: blue;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 20px;
        display: inline-block;
    }
    .cartlist-all{
        margin: 30px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
        margin-top:20px;
    }
    .cartlist-image{
        width: 300px;
        height: auto;
    }

    .cartlist-info{
        text-align: justify;
        margin: 10px;
    }

    .cartlist-info h5{
        font-weight: normal;
        font-size: 18px;
    }

    .btn-warning{
        margin-top: 10px;
    }
    
    .ordernow-all{
        height: 120vh;
    }

    .payment-method img{
        height: 50px;
        margin-left: 10px;
    }

    .myorder-info{
        text-align: justify;
        margin-top: 22%;
    }

    .myorder-info h5{
        font-weight: normal;
        font-size: 22px;
    }
</style>
</html>