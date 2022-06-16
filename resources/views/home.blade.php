@extends('layouts.app')
@section('content')
    <div class="jumbotron-dc"></div>
    <div class="comics text-center">
        <div class="d-flex justify-content-center">
            <div class="row mt-5 container">
                @forelse($comics as $comic)
                <div class="col-2 mb-5">
                    <div class="comic">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h4>{{$comic['title']}}</h4>
                </div>
                @empty
                    <p>fanculo</p>
                @endforelse
            </div>
        </div>
        <button class="btn primary-color-bg text-white mb-5"> load more </button>
    </div>
    <div class="d-flex justify-content-center primary-color-bg">
        <div class="row container py-5">
            
            <div class="col text-center d-flex align-items-center text-white">
                <img class="max-height" src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                <p>digital comics</p>
            </div>
            
            <div class="col text-center d-flex align-items-center text-white">
                <img class="max-height" src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                <p>dc merchandise</p>
            </div>
            
            <div class="col text-center d-flex align-items-center text-white">
                <img class="max-height" src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                <p>subsription</p>
            </div>
            
            <div class="col text-center d-flex align-items-center text-white">
                <img class="max-height" src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                <p>comic shop locator</p>
            </div>
            
            <div class="col text-center d-flex align-items-center text-white">
                <img class="max-height" src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                <p>dc power visa</p>
            </div>
             
        </div> 
    </div>
    
@endsection