<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Web application Development" />
    <meta name="keywords" content="Todo List" />
    <meta name="author" content="Dai Trung Duong Luong" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
    <title>Photoshow</title>
</head>
<body>
@include('inc.topbar')
<br>
<div class="row">
    @include('inc.messages')
    @yield('content')
</div>


</body>
</html>
