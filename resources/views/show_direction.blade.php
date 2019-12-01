@extends('layouts.app')
    
@section('jscss')
    <script src="{{ asset('js/choose_direction.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
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

        <form action="show_professions" class="direction_form" method="POST">
            @csrf
            <div class="direction_cards">
                @foreach ($directions as $direction)
                    
                    <div class="card-dir">
                        {{ $direction->prof_direction}}
                    </div>

                @endforeach
            </div>
            
            <button type="submit" id="direction-choose-btn" class="btn btn-info" disabled>
                &#8594
            </button>
            
        </form>
</div>

@endsection
