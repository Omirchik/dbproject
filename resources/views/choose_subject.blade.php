
@extends('layouts.app')

@section('jscss')
        <script src="{{ asset('js/script.js')}}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/subjects_style.css') }}" type="text/css">
@endsection

@section('subheader')
        <div class="subheader">
                <div class="container">
                        Hello world choose subjects
                </div>
        </div>
@endsection

@section('content')
        
        <div class="container mycontainer">
                
                <div class="subjects_text">
                        Hello world
                </div>

            <form id="w0" class="js-form" action="show_direction" method="post">
                @csrf
                <div class="subjects">

                        <div class="card-link first" data-id="0">
                                <img src="images/new_sub/kaz_rus.png" class="card_img">
                                <h5 class="title">Казахский /русский язык</h5>
                                <input type="hidden" name="item[]">
                        </div>
                                        
                        <div class="card-link" data-id="1">
                                <img src="images/new_sub/biology.png" class="card_img">
                                <h5 class="title">Биология</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        <div class="card-link" data-id="2">
                                <img src="images/new_sub/geography.png"  class="card_img">
                                <h5 class="title">География</h5>
                                <input type="hidden" name="item[]">
                        </div> 
                        <div class="card-link" data-id="3">
                                <img src="images/new_sub/rus.png" class="card_img">
                                <h5 class="title">Русский язык</h5>
                                <input type="hidden" name="item[]">
                        </div>   
                        
                        <div class="card-link" data-id="4">
                                <img src="images/new_sub/math.png" class="card_img">
                                <h5 class="title">Математика</h5>
                                <input type="hidden" name="item[]">
                        </div>  

                        <div class="card-link" data-id="5">
                                <img src="images/new_sub/world_history.png"  class="card_img">
                                <h5 class="title">Всемирная История</h5>
                                <input type="hidden" name="item[]">
                        </div>  

                        <div class="card-link" data-id="6">
                                <img src="images/new_sub/chemistry.png" class="card_img">
                                <h5 class="title">Химия</h5>
                                <input type="hidden" name="item[]">
                        </div>  
                        
                        <div class="card-link" data-id="7">
                                <img src="images/new_sub/physics.png" class="card_img">
                                <h5 class="title">Физика</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        
                        <div class="card-link" data-id="8">
                                <img src="images/new_sub/foreign.png" class="card_img">
                                <h5 class="title">Иностранный язык</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        <div class="card-link" data-id="9">
                                <img src="images/new_sub/human_rights.png" class="card_img">
                                <h5 class="title">Человек. общество. право</h5>
                                <input type="hidden" name="item[]">
                        </div>   
                        <div class="card-link" data-id="10">
                                <img src="images/new_sub/kaz.png" class="card_img">
                                <h5 class="title">Казахский язык</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        
                        <div class="card-link" data-id="11">
                                <img src="images/new_sub/art.png" class="card_img">
                                <h5 class="title">Творческий экзамен</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        <div class="card-link" data-id="12">
                                <img src="images/new_sub/rus_lit.png" class="card_img">
                                <h5 class="title">Русская литература</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        
                        <div class="card-link" data-id="13">
                                <img src="images/new_sub/kaz_rus_lit.png" class="card_img">
                                <h5 class="title">Казахская /русская литература</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        <div class="card-link" data-id="14">
                                <img src="images/new_sub/kaz_lit.png" class="card_img">
                                <h5 class="title">Казахская литература</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        {{-- <div class="card" data-id="0">
                            <input type="hidden" name="item[]"> 
                            казахский /русский язык 
                        </div>
                        <div class="card" data-id="1">
                            <input type="hidden" name="item[]">
                            биология  
                        </div>
                        <div class="card" data-id="2">
                            <input type="hidden" name="item[]">
                            география 
                        </div>
                        <div class="card" data-id="3">
                                <input type="hidden" name="item[]">
                                русский язык 
                        </div>
                        <div class="card" data-id="4">
                                <input type="hidden" name="item[]">
                                математика 
                        </div>
                        <div class="card" data-id="5">
                                <input type="hidden" name="item[]">
                                всемирная история 
                        </div>
                        <div class="card" data-id="6">
                                <input type="hidden" name="item[]">
                                химия 
                        </div>
                        <div class="card" data-id="7">
                                <input type="hidden" name="item[]">
                                физика
                        </div>
                        <div class="card" data-id="8">
                                <input type="hidden" name="item[]">
                                иностранный язык
                        </div>
                        <div class="card" data-id="9">
                                <input type="hidden" name="item[]">
                                человек. общество. право 
                        </div>
                        <div class="card" data-id="10">
                                <input type="hidden" name="item[]">
                                казахский язык 
                        </div>
                        <div class="card" data-id="11">
                                <input type="hidden" name="item[]">
                                творческий экзамен 
                        </div>
                        <div class="card" data-id="12">
                                <input type="hidden" name="item[]">
                                русская литература
                        </div>
                        <div class="card" data-id="13">
                                <input type="hidden" name="item[]">
                                казахская /русская литература 
                        </div>
                        <div class="card" data-id="14">
                                <input type="hidden" name="item[]">
                                казахская литература
                        </div> --}}
                        
                </div>
                    <button type="submit" id="mybtn" class="btn btn-primary" disabled>
                        &#8594
                    </button>                     
            </form>
    </div>
    
@endsection