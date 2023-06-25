@extends('layouts.front')
@section('title', 'My Wishlist')
@section('content')
@include('components.navbar')
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="{{ asset('images/ic_best.svg') }}" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        My Wishlist
                    </h3>
                    <p class="paragraph">
                        Dolor space comfortable moments
                    </p>
                </div>
            </div>
            <div class="row">
                @component('components.home_card')
                    @slot('cover', 'images/house7.png')
                    @slot('title', 'Omah Nyonya')
                    @slot('price', '1000')
                    @slot('location', 'Solo')
                    @slot('rating', '3.7')
                @endcomponent
            </div>
        </div>
    </section>
@endsection