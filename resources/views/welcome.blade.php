@extends('layouts.app')


@section('jscss')
    <script src="{{ asset('js/welcome.js')}}" defer></script>
@endsection

@section('content')
    
<section class="promo">

    <div class="container">

        <div class="row">

            <div class="col-md-10 offset-md-1">
                <div class="banner">
                    <h1>КОМПАНИЯ UBER PARTNERS!</h1>
                    <h2>ПРИГЛАШАЕМ ВОДИТЕЛЕЙ! НА СВОЕМ АВТО!</h2>
                    <p class="big_text">
                            Компания UBER динамически развивающаяся. Компания на рынке занимает лидирующее место среди таксомоторных компания, Компания абсолютно прозрачная вы можете контролировать все процессы у себя в личном кабинете. Бонусная система. Помимо выполненной работы по заказам, компания начисляет бонусы за пиковое время.    
                    </p>
                    <p class="big_text2">
                            Мы одни из партнеров и зарикомендовали себя как одна из лучших коман города Москве. Водители у нас зарабатывают от 30000-120000 в месяц.
                    </p>
                    <form action="subjects" method="GET">
                        <button href="subjects" class="send_request_btn">
                                ОТПРАВИТЬ ЗАЯВКУ!
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    
</section>




@endsection




