
@extends('layouts.app')

@section('title')
    Choose Two Subjects
@endsection


@section('content')

    <div class="container">

            <form id="w0" class="js-form" action="/professions/school-items/" method="get">
                <div id="school-items-list" class="school-items-list">
                    <div class="row">
                        <div class="card selectable" data-id="5">
                            <input type="hidden" name="item[]"> 
                            физика 
                        </div>
                        <div class="card selectable" data-id="6">
                            <input type="hidden" name="item[]">
                            математика 
                        </div>
                        <div class="card selectable" data-id="7">
                            <input type="hidden" name="item[]">
                            химия 
                        </div>
                    </div>
                </div>
                    <div class="btn-row">
                    <button type="submit" id="profession-filter-btn" class="btn btn-danger">Подобрать профессию <span></span></button> 
                    </div>
            </form>

        <div id="subject-links">

                
        </div>
    </div>
</div>
    
@endsection