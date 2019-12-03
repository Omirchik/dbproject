@extends('layouts.app')


@section('jscss')
    
@endsection

@section('language')
    <li class="menu_item"><a href="#">{{__('home.language_menu')}}</a>
        <ul class="submenu">
        <li class="submenu_item"><a href="locale/kz">KZ</a></li>
        <li class="submenu_item"><a href="locale/ru">RU</a></li>
        <li class="submenu_item"><a href="locale/en">EN</a></li>
        </ul>
    </li>
@endsection

@section('content')
    
<section class="promo">
    <div id="color-overlay"></div>
    <div class="container">

        <div class="row">

            <div class="col-md-10 offset-md-1">

                <div class="banner">
                    <h1 class="find_des">{{__('home.find_des')}}</h1>
                    <h2 class="choose_u">{{__('home.choose_u')}}</h2>
                    <p class="big_text">
                            {{__('home.big-text')}}
                    </p>
                    <p class="big_text2">
                            {{__('home.big_text2')}}
                    </p>
                    <form action="subjects" method="GET">
                        <button class="send_request_btn">
                                {{__('home.send_request_btn')}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
</section>




@endsection




