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
        @foreach ($listings as $listing)
        <div class="col-sm-6 col-lg-4 col-xl-3">
          <a href="/listing/{{ $listing->slug }}/{{ $listing->id }}" class="listings-properties__item">
            {{-- <img src="https://images.dwell.com/photos/6405098978284392448/6466705949096243200/large.jpg"> --}}
            @foreach ($photos as $photo)
            @if ($photo->featured)
            @if ($photo->listing_id == $listing->id)
            <img class="listing-top__img" src="/img/{{ $photo->name }}" alt="listing featured photo">
            @endif
            @endif
            @endforeach
            <div class="listings-properties__saved ">
              <i class="fa-solid fa-heart"></i>
            </div>

            <span class="listings-properties__item-price">${{ $listing->price }} / hr.</span>
            <span class="listings-properties__item-details">
              <i class="fa-solid fa-sailboat"></i> {{ $listing->boat_type }}
              <i class="fa-solid fa-chair"></i> {{ $listing->seats }}
              <i class="fa-solid fa-ruler-horizontal"></i> {{ $listing->length }}'</span>
            <span class="listings-properties__item-address">
              {{ $listing->address }} {{ $listing->address2 }},<br>
              {{ $listing->city }}, {{ $listing->state }} {{ $listing->zipcode }}
            </span>
            <div class="listings-properties__item-line"></div>
            <span class="listings-properties__item-owner">
              {{ $listing->marina }}
            </span>
          </a>
        </div>
        @endforeach
      </div>
    </div>



  </div>
</div>
@endsection
