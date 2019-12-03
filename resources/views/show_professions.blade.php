@extends('layouts.app')

@section('jscss')
    <script src="{{ asset('js/welcome.js')}}" defer></script>
    <script src="{{ asset('js/choose_prof.js')}}" defer></script>
    
    <link rel="stylesheet" href="{{ asset('css/prof_style.css') }}" type="text/css">

@endsection

@section('subheader')

    <h1>{{__('subjects.prof-header')}}</h1>
    <h2>{{__('subjects.prof-subheader')}}</h2>

@endsection


@section('content')
{{-- <div class="big-container"> --}}

<div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <h5 class="title">
                Hello
            </h5>
            <div class="text-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus enim sunt possimus. Consequatur tempora molestias, in provident expedita ea nesciunt a debitis ab iure blanditiis sit eum! Illum, reprehenderit fuga.
            </div>
        </div>
</div>

<div class="container mycontainer">
        
    <form action="show_specialties" class="profs_form" method="POST">
        @csrf
        <div class="profs_cards">
            
            @for ($i = 0; $i < count($professions)/4; $i++)
                
                <div class="row equal">

                    @for($j = 0; $j < 4 && $i*4 + $j < count($professions); $j++)
                    @php
                    $k = $i*4+$j
                    @endphp
                    <div class="col-3 d-flex pb-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body d-flex flex-column" data-code = "{{$professions[$k]->prof_name}}">
                                <h5 class="card-title">{{$professions[$k]->prof_name}}</h5>
                                <p class="card-text">
                                        {{$professions[$k]->prof_description}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary mt-auto view-btn" data-id="{{$k}}">View</button> 
                            </div>
                        </div>
                    </div>
                    @endfor
                
                </div>
            @endfor
            
        </div>
        <button type="submit" id="mybtn" class="btn btn-success" disabled>
                &#8594
        </button>
    </form>
</div>

{{-- <div class="submit-btn"> --}}
    {{-- <button type="submit" id="profs-choose-btn" class="btn btn-success" disabled>
        &#8594
    </button> --}}
{{-- </div> --}}


{{-- <div class="bg-modal">
        <div class="modal-content">
            <div class="close">+</div>
            <h5 class="title">
                Hello
            </h5>
            <div class="text-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus enim sunt possimus. Consequatur tempora molestias, in provident expedita ea nesciunt a debitis ab iure blanditiis sit eum! Illum, reprehenderit fuga.
            </div>
        </div>
</div> --}}

{{-- </div> --}}


@endsection
