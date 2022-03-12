@extends('layouts.admin')

@section('page-title', 'Create a Listing')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create a Listing</h1>
      <div class="mT-30">
        <form method="POST" action="{{ route('admin.listings.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="Title">Title</label>
            <input type="text" class="form-control" name="title" id="Title" placeholder="ex: Nice, fresh pontoon"
              style="" autocomplete="off" value="{{old('title')}}">
            @error('title')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="Marina">Marina</label>
            <input type="text" class="form-control" name="marina" id="Marina" placeholder="ex: Flat Rock" style=""
              autocomplete="off" value="{{old('marina')}}">
            @error('marina')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="SlipNumber">SlipNumber</label>
            <input type="text" class="form-control" name="slipnumber" id="SlipNumber" placeholder="ex: 33" style=""
              autocomplete="off" value="{{old('slipnumber')}}">
            @error('slipnumber')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="Address">Address</label>
            <input type="text" class="form-control" name="address" id="Address" placeholder="ex: 1234 Main St" style=""
              autocomplete="off" value="{{old('address')}}">
            @error('address')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="address2">Address 2</label>
            <input type="text" class="form-control" name="address2" id="address2"
              placeholder="ex: Apartment, studio, or floor" style="" autocomplete="off" value="{{old('address2')}}">
            @error('address2')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="city">City</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="ex: New York" style=""
                autocomplete="off" value="{{old('city')}}">
              @error('city')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="state">State</label>
              <select name="state" id="state" class="form-control">
                <option value="FL" @selected(old('state')=='FL' )>Florida</option>
                <option value="NY" @selected(old('state')=='NY' )>New York</option>
              </select>
              @error('state')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label" for="zipcode">Zip</label>
              <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="ex: 15476"
                autocomplete="off" value="{{old('zipcode')}}">
              @error('zipcode')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="class">Class</label>
              <input type="text" class="form-control" name="class" id="class" placeholder="ex: Pontoon"
                autocomplete="off" value="{{old('class')}}">
              @error('class')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="length">Length</label>
              <input type="text" class="form-control" name="length" id="length" placeholder="ex: 28" autocomplete="off"
                value="{{old('length')}}">
              @error('length')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="seats">Seats</label>
              <input type="text" class="form-control" name="seats" id="seats" placeholder="ex: 8" autocomplete="off"
                value="{{old('seats')}}">
              @error('seats')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection