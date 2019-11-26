@extends('layouts.app')

@section('jscss')
    <script src="{{ asset('js/choose_prof.js')}}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/prof_style.css') }}" type="text/css">

@endsection

@section('content')

<div class="container">

    <form action="show_specialties" class="profs_form" method="POST">
        @csrf
        <div class="profs_cards">
            @for ($i = 0; $i < count($professions)/4; $i++)
                
                <div class="row equal">

                    @for($j = 0; $j < 4 && $i*4 + $j < count($professions); $j++)
                    
                    <div class="col-3 d-flex pb-3">
                        <div class="card" style="width: 18rem;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{$professions[$i*4+$j]->prof_name}}</h5>
                                    <p class="card-text">
                                            {{$professions[$i*4+$j]->prof_description}}
                                    </p>
                                    <div class="btns mt-auto">
                                            <a href="#" class="btn btn-primary">View</a>
                                            <a href="#" class="btn btn-primary">add</a>
                                    </div>
                                        
                                </div>
                        </div>
                    </div>
                    @endfor
                
                </div>
            @endfor
        </div>
        <div class="submit-btn">
                <button type="submit" id="profs-choose-btn" class="btn btn-success" disabled>
                    Следующий
                </button>
        </div>
    </form>
</div>

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



@endsection
