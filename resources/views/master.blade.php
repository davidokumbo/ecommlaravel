<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm project</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content') 
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        padding-top:100px;
        height:500px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-products{
        height: 600px;
    }
    .slider-text{
        background-color:#35443584;
    }
    .trending-image{
       
        height:100px;
    }
    .trending-item{
        float: left;
        width:20%;
    }
    .trending-wrapper{
        margin:30px;
    }
    .detail-img{
        height:200px; 
    }
    .cart-list-divider{

        border-bottom:1px solid #ccc;
        margin-bottom:20px
    }
</style>
</html>