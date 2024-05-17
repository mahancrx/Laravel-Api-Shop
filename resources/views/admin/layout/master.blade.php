<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> قالب مدیریتی </title>
    <link rel="shortcut icon" href="/panel/assets/media/image/favicon.png">
    <meta name="theme-color" content="#5867dd">
    <link rel="stylesheet" href="/panel/vendors/bundle.css" type="text/css">
    <link rel="stylesheet" href="/panel/vendors/slick/slick.css">
    <link rel="stylesheet" href="/panel/vendors/slick/slick-theme.css">
    <link rel="stylesheet" href="/panel/vendors/vmap/jqvmap.min.css">
    <link rel="stylesheet" href="/panel/assets/css/app.css" type="text/css">
</head>
<body class="small-navigation">
@include('admin.layout.navigation')
@include('admin.layout.header')
@livewireStyles
<!-- begin::main content -->
@yield('content')

</main>
@livewireScripts
<script src="/panel/vendors/bundle.js"></script>
<script src="/panel/vendors/slick/slick.min.js"></script>
<script src="/panel/vendors/vmap/jquery.vmap.min.js"></script>
<script src="/panel/assets/js/app.js"></script>
</body>
</html>
