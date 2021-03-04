<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title> 
    @include('includes.head-content')

</head>

<body data-sidebar="dark">
<!-- Begin page -->
<div id="layout-wrapper">

@include('includes.header-include')
@include('includes.left-side-bar-include')

@yield('content')

@include('includes.footer-include')

<!-- JAVASCRIPT -->

@include('includes.js-include')
   
</div>
</body>
</html>






























