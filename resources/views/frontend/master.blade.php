<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Blog store - Blog Category Bootstrap Responsive Website Template | Index : W3layouts</title>

  @include('frontend.includes.style')
</head>

<body>
<!--header-->
@include('frontend.includes.header')
<!--/header-->
@yield('content')
<!-- //home page section -->
  <!-- footer -->
  @include('frontend.includes.footer')
  <!-- footer -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  @include('frontend.includes.script')

  </body>

  </html>
