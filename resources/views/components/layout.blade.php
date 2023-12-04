<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/media/low.png" type="image/x-icon">
    
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>ADEMI</title>
    
</head>
<body class="homepage" @if (Route::CurrentRouteName() == 'ad.index') style="background-color: #F6F1EE" @endif >

    <x-nav/> 
    
   
        
        <div class="min-vh-100">  
            
            {{$slot}}
        </div>
        
        <x-footer/>
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
 

    
</body>
</html>

