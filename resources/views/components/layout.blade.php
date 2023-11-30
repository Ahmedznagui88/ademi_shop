<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/media/low.png" type="image/x-icon">
    <script defer src="https://unpkg.com/swup@4"></script> 
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>ADEMI</title>
    
</head>
<body class="homepage" >

    <x-nav/>
    
    
    <main id="swup" class="transition-fade">
        <div class="min-vh-100">  
            {{$slot}}
        </div>
        
        <x-footer/>
    </main>

    

    <div class="outline"></div>
    <div class="cursor"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    
</body>
</html>

