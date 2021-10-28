<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
    <div class="wrapper">
        <x-navbar/>
        <div id='scrollTop' class="scrollTop">
            <lord-icon src="https://cdn.lordicon.com/koyivthb.json" trigger="loop" colors="primary:#2d3142,secondary:#ef8354" style="width:70px;height:70px">
            </lord-icon>
        </div>
        {{$slot}}
    </div>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>