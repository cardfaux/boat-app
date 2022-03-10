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
        Boat type <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__option">
        More <i class="fa-solid fa-caret-down"></i>
      </div>
      <div class="listings-filter__button">
        Search
      </div>
    </div>
  </div>
</div>
@endsection