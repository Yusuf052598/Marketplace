<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ Session::token() }}" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/Front/Marketplace/css/slick.css" />

    <link rel="stylesheet" href="/Front/Marketplace/css/style.css" />
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">--}}
    @stack('css')
    <title>MarketPlace</title>
</head>
<body>
<article class="wrapper">
    <section class="container">
        @include('Front.Marketplace.Block.header')
        <main class="main">
          @include('Front.Marketplace.Block.section')
          @yield('content')
        </main>
       @include('Front.Marketplace.Block.footer')
    </section>
</article>
<script src="https://kit.fontawesome.com/8c5f8983b2.js" crossorigin="anonymous"></script>
<script src="/Front/Marketplace/js/jquery-3.3.1.min.js"></script>
<script src="/Front/Marketplace/js/slick.min.js"></script>
<script src="/Front/Marketplace/js/script.js"></script>
<script src="/Front/Marketplace/js/jquery.maskedinput.js"></script>
@stack('js')
</body>
</html>
