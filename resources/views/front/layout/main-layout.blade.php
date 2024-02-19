<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('frontend')}}/images/favicon/26.png" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/favicon/26.png" type="image/x-icon" />
    <title>T1</title>

   @include('front.ext.head')

</head>
<body class="theme-color-30 mulish-font">

    {{-- @include('front.widget.loader-structure') --}}

    @include('front.ext.header')

    @yield('content')
    
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>

    @include('front.ext.script')
     

</body>
</html>
