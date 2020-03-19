@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vue JS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Let's use Vue.JS</h2>

                    <div id="app">
                        <div class="card mt-4">
                            <div class="py-4 card-body">
                                <first-component></first-component>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
              <div class="swiper-slide">Slide 4</div>
              <div class="swiper-slide">Slide 5</div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
          </div>

    </div>
</div>
@endsection
