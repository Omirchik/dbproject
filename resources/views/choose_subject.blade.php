
@extends('layouts.app')

@section('jscss')
        <script src="{{ asset('js/script.js')}}" defer></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
@endsection


@section('content')

    <div class="container">
            <form id="w0" class="js-form" action="show_direction" method="post">
                @csrf
                <div class="subjects">
                        <div class="card" data-id="0">
                            <input type="hidden" name="item[]"> 
                            <span>казахский /русский язык</span> 
                        </div>
                        <div class="card" data-id="1">
                            <input type="hidden" name="item[]">
                            <span>биология</span>  
                        </div>
                        <div class="card" data-id="2">
                            <input type="hidden" name="item[]">
                            <span>география</span> 
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
                        </div>
                        <div class="card" data-id="15">
                                <input type="hidden" name="item[]">
                                история 
                        </div>
                    </div>
                    <button type="submit" id="profession-filter-btn" class="btn btn-danger">
                            Подобрать Предмет
                    </button>                     
            </form>
    </div>
    
@endsection