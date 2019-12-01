<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

        @yield('jscss')
        
    </head>
    <body>

      <header>   
        <nav>
          <div class="container">
              <ul class="menu"> 
                <li class="menu_item"><a href="#" class="menu_link">Главная</a></li>
                <li class="menu_item"><a href="#" class="menu_link">О нас</a></li>
                <li class="menu_item"><a href="#" class="menu_link">Контакты</a></li>
              </ul>
          </div>
        </nav>
            
        </header>
        @yield('subheader')

      @yield('content')

    </body>
</html>
