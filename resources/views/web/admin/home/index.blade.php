@extends('layout.app')

@section('content')
    <div class="geex-content__section-wrapper">
        <div class="geex-content__feature mb-40">
            <div class="geex-content__feature__card">
                <div class="geex-content__feature__card__text">
                    <p class="geex-content__feature__card__subtitle">Orders</p>
                    <h4 class="geex-content__feature__card__title">{{ $order }}</h4>
                </div>
                <div class="geex-content__feature__card__img">
                    <img src="assets/img/feature/feature-2.svg" alt="feature" />
                </div>
            </div>
            <div class="geex-content__feature__card">
                <div class="geex-content__feature__card__text">
                    <p class="geex-content__feature__card__subtitle">Category Food</p>
                    <h4 class="geex-content__feature__card__title">{{ $categoryTotal }}</h4>
                </div>
                <div class="geex-content__feature__card__img">
                    <img src="assets/img/feature/feature-3.svg" alt="feature" />
                </div>
            </div>
            <div class="geex-content__feature__card">
                <div class="geex-content__feature__card__text">
                    <p class="geex-content__feature__card__subtitle">Foods</p>
                    <h4 class="geex-content__feature__card__title">{{$food}}</h4>
                </div>
                <div class="geex-content__feature__card__img">
                    <img src="assets/img/feature/feature-1.svg" alt="feature" />
                </div>
            </div>
        </div>
    </div>
@endsection
