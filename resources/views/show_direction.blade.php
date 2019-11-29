@extends('layouts.app')
    
@section('jscss')
    <script src="{{ asset('js/choose_direction.js')}}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
@endsection
@section('content')

    <div class="container">

        <form action="show_professions" class="direction_form" method="POST">
            @csrf
            <div class="direction_cards">
                @foreach ($directions as $direction)
                    
                    <div class="card-dir">
                        {{ $direction->prof_direction}}
                    </div>

                @endforeach
            </div>
            <div class="submit-btn">
                <button type="submit" id="direction-choose-btn" class="btn btn-success" disabled>
                    Подобрать Направление
                </button>
            </div>
            
        </form>
</div>

@endsection
