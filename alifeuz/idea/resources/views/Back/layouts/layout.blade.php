<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Twitter -->
    <!-- Facebook -->
    <!-- Meta -->
    <title>Admin Template</title>
    <!-- vendor css -->
    <link href="/Back/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/Back/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="/Back/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="/Back/lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="/Back/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="/Back/lib/highlightjs/github.css" rel="stylesheet">
    <link href="/Back/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="/Back/lib/medium-editor/default.css" rel="stylesheet">
    <link href="/Back/lib/summernote/summernote-bs4.css" rel="stylesheet">
    <!-- Amanda CSS -->
    <link rel="stylesheet" href="/Back/css/amanda.css">
</head>

<body>
@include('Back.Block.header')
@include('Back.Block.left')
<div class="am-mainpanel" style="position: relative">
   @yield('content')
</div>
<script src="/Back/lib/jquery/jquery.min.js"></script>
<script src="/Back/lib/popper.js/popper.js"></script>
<script src="/Back/lib/bootstrap/bootstrap.js"></script>
<script src="/Back/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="/Back/lib/jquery-toggles/toggles.min.js"></script>
<script src="/Back/lib/d3/d3.js"></script>
<script src="/Back/lib/rickshaw/rickshaw.min.js"></script>
<script src="/Back/lib/medium-editor/medium-editor.js"></script>
<script src="/Back/lib/summernote/summernote-bs4.min.js"></script>
<script src="/Back/js/amanda.js"></script>
<script src="/Back/js/ResizeSensor.js"></script>
<script src="/Back/js/dashboard.js"></script>
<script src="/Front/js/jquery.maskedinput.js"></script>
@stack("js")
</body>
</html>
