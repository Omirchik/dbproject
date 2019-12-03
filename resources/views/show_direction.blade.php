@extends('layouts.app')
    
@section('jscss')
    <script src="{{ asset('js/welcome.js')}}" defer></script>
    <script src="{{ asset('js/choose_direction.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/direction.css') }}" type="text/css">
@endsection

@section('subheader')
    <h1>{{__('subjects.dir-header')}}</h1>
    <h2>{{__('subjects.dir-subheader')}}</h2>
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
            
            <button type="submit" id="mybtn" class="btn btn-info" disabled>
                &#8594
            </button>
            
        </form>
</div>

@endsection
