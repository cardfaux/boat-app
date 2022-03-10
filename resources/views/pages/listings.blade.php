@extends('layouts.main')

@section('content')
<div class="listings-page">
  <div class="listings-city">
    <img class="lisitings-city__img"
      src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
    <h1 class="listings-city__title">Flat Rock</h1>
  </div>
  <div class="listings-filter">
    <div class="listings-filter__wrapper">
      <div class="listings-filter__option">
        Any Price <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        All Seats <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        Boayt type <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
  <div class="listings-properties">
    <div class="container">
      <div class="row">
        @for ($i = 1; $i <= 12; $i++) <div class="col-sm-6 col-lg-4 col-xl-3">
          <div class="listings-properties__item">
            <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg">
            <span class="listings-properties__item-price">$75</span>
            <span class="listings-properties__item-details"><i class="fa-solid fa-bed"></i> 6 <i
                class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler-triangle"></i> 200hp</span>
            <span class="listings-properties__item-address">
              Flat Rock Marina<br>
              Miami Beach, FL 23456
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              Marina Company
            </span>
          </div>
      </div>
      @endfor

    </div>
  </div>



</div>
</div>
@endsection