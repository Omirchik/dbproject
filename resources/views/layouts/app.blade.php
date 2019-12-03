<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Home</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700i&display=swap&subset=cyrillic-ext" rel="stylesheet"> --}}
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
        
        @yield('jscss')
        
    </head>
    <body>

      <header>   

        <nav class="nav">
            <ul class="menu">
              <li class="menu_item"><a href="/">{{__('home.home_menu')}}</a></li>
              <li class="menu_item"><a href="#">{{__('home.about_menu')}}</a></li>
              <li class="menu_item"><a href="#">{{__('home.contact_menu')}}</a></li>
              @yield('language')
            </ul>
          </nav>
        
        </header>
        <div class="subheader">
            {{-- <div class="container"> --}}
                <div id="color-overlay"></div>
                @yield('subheader')
            
              {{-- </div> --}}
        </div>

      @yield('content')


      <footer class="footer">
          <div class="mt-5 pt-5 pb-5 footer">
              <div class="container">
                  <div class="row">
                  <div class="col-lg-5 col-xs-12 about-company">
                      <h2>{{__('home.contacts')}}</h2>
                      <p class="pr-5 text-white-50">
                        {{__('home.contacts-text')}}
                      </p>
                      <p>
                          <a href="#"><img src="\images\icons\vk.png" alt="VK"></i></a>
                          <a href="#"><img src="\images\icons\facebook.png" alt="F"></a>
                          <a href="#"><img src="\images\icons\telegram.png" alt="F"></a>
                      </p>
                  </div>
                  <div class="col-lg-3 col-xs-12 links">
                      <h4 class="mt-lg-0 mt-sm-3">{{__('home.links')}}</h4>
                      <ul class="m-0 p-0">
                          <li>- <a href="/">{{__('home.home_menu')}}</a></li>
                          <li>- <a href="#">{{__('home.about_menu')}}</a></li>
                          <li>- <a href="#">{{__('home.contact_menu')}}</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-xs-12 location">
                  <h4 class="mt-lg-0 mt-sm-4">{{__('home.location')}}</h4>
                      <p>{{__('home.location-at')}}</p>
                      <p class="mb-0"><img src="\images\icons\phone_small.png" alt="phone"><span class="contacts_pm">(705) 673-9100</span></p>
                      <p><img src="\images\icons\message.png" alt="phone"><span class="contacts_pm">170103152@stu.sdu.edu.kz</span></p>
                  </div>
                  </div>
                  <div class="row mt-5">
                  <div class="col copyright">
                      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
                  </div>
                  </div>
              </div>
          </div>
      </footer>

    </body>
</html>
