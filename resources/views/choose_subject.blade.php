
@extends('layouts.app')

@section('jscss')
        <script src="{{ asset('js/welcome.js')}}" defer></script>
        <script src="{{ asset('js/script.js')}}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/subjects_style.css') }}" type="text/css">
@endsection

@section('subheader')
        <h1>{{__('subjects.banner-header')}}</h1>
        <h2>{{__('subjects.banner-subheader')}}</h2>
@endsection

@section('content')
        
        <div class="container mycontainer">
                
            <form id="w0" class="js-form" action="show_direction" method="post">
                @csrf
                <div class="subjects">

                        <div class="card-link first" data-id="0">
                                <img src="images/new_sub/kaz_rus.png" class="card_img">
                                <h5 class="title">{{__('subjects.kaz_rus_lan')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>
                                
                        <div class="card-link" data-id="1">
                                <img src="images/new_sub/biology.png" class="card_img">
                                <h5 class="title">{{__('subjects.biology')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        <div class="card-link" data-id="2">
                                <img src="images/new_sub/geography.png"  class="card_img">
                                <h5 class="title">{{__('subjects.geography')}}</h5>
                                <input type="hidden" name="item[]">
                        </div> 

                        <div class="card-link" data-id="3">
                                <img src="images/new_sub/rus.png" class="card_img">
                                <h5 class="title">{{__('subjects.rus_lan')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>   
                                
                        <div class="card-link" data-id="4">
                                <img src="images/new_sub/math.png" class="card_img">
                                <h5 class="title">{{__('subjects.math')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>  

                        <div class="card-link" data-id="5">
                                <img src="images/new_sub/world_history.png"  class="card_img">
                                <h5 class="title">{{__('subjects.world_history')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>  

                        <div class="card-link" data-id="6">
                                <img src="images/new_sub/chemistry.png" class="card_img">
                                <h5 class="title">{{__('subjects.chemistry')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>  
                                
                        <div class="card-link" data-id="7">
                                <img src="images/new_sub/physics.png" class="card_img">
                                <h5 class="title">{{__('subjects.physics')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>
                                
                        <div class="card-link" data-id="8">
                                <img src="images/new_sub/foreign.png" class="card_img">
                                <h5 class="title">{{__('subjects.foreign')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        
                        <div class="card-link" data-id="9">
                                <img src="images/new_sub/human_rights.png" class="card_img">
                                <h5 class="title">{{__('subjects.human_rights')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>   

                        <div class="card-link" data-id="10">
                                <img src="images/new_sub/kaz.png" class="card_img">
                                <h5 class="title">{{__('subjects.kaz_lan')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        <div class="card-link" data-id="11">
                                <img src="images/new_sub/art.png" class="card_img">
                                <h5 class="title">{{__('subjects.creation')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>

                        <div class="card-link" data-id="12">
                                <img src="images/new_sub/rus_lit.png" class="card_img">
                                <h5 class="title">{{__('subjects.rus_lit')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>
                                
                        <div class="card-link" data-id="13">
                                <img src="images/new_sub/kaz_rus_lit.png" class="card_img">
                                <h5 class="title">{{__('subjects.kaz_rus_lit')}}</h5>
                                <input type="hidden" name="item[]">
                        </div> 
                                <div class="card-link" data-id="14">
                                <img src="images/new_sub/kaz_lit.png" class="card_img">
                                <h5 class="title">{{__('subjects.kaz_lit')}}</h5>
                                <input type="hidden" name="item[]">
                        </div>
                        
                </div>
                    <button type="submit" id="mybtn" class="btn btn-primary" disabled>
                        &#8594
                    </button>                     
            </form>
    </div>
    
@endsection