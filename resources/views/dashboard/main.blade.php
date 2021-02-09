<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.head')
</head>
<body class="animsition">
    <div class="page-wrapper">
        @include('dashboard.topbar')
        @include('dashboard.sidebar')
        @include('dashboard.page')
    </div>
    @include('dashboard.js')

</body>
</html>
