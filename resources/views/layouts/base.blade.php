<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/sidebars.css">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="/css/base_layout.css">
  <title>Document</title> 
</head>
<body>
  <div class="konten">
    {{-- Sidebar --}}
    @include('layouts.sidebar')
    {{-- Contents --}}
    <div class="container" style="background-color: pink; height: 1080px" id="konten">
      ini konten
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  <script src="/js/sidebars.js"></script>
  <script>
    var winHeight = window.innerHeight;
    document.getElementById('konten').style.minHeight = winHeight.toString() + 'px';
  </script>
</body>
</html>