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
            <label class="form-label" for="Marina">Marina Name</label>
            <input type="text" class="form-control" name="marina" id="Marina" placeholder="ex: Flat Rock" style=""
              autocomplete="off" value="{{old('marina')}}">
            @error('marina')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="SlipNumber">Slip Number</label>
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
            <label class="form-label" for="Address2">Address 2</label>
            <input type="text" class="form-control" name="address2" id="Address2"
              placeholder="ex: Building #, Unit #, etc." style="" autocomplete="off" value="{{old('address2')}}">
            @error('address2')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="mb-3 col-md-6">
              <label class="form-label" for="City">City</label>
              <input type="text" class="form-control" name="city" id="City" placeholder="ex: New York" style=""
                autocomplete="off" value="{{old('city')}}">
              @error('city')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="State">State</label>
              <select name="state" id="State" class="form-control">
                <option value="AL" @selected(old('state')=='AL' )>Alabama</option>
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
              <label class="form-label" for="ZipCode">Zip</label>
              <input type="text" class="form-control" name="zipcode" id="ZipCode" placeholder="ex: 15476"
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
              <label class="form-label" for="Class">Class</label>
              <input type="text" class="form-control" name="class" id="Class" placeholder="ex: A, I, II, etc"
                autocomplete="off" value="{{old('class')}}">
              @error('class')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="BoatType">Type</label>
              <input type="text" class="form-control" name="boat_type" id="BoatType" placeholder="ex: Pontoon"
                autocomplete="off" value="{{old('boat_type')}}">
              @error('boat_type')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label" for="Length">Length</label>
              <input type="text" class="form-control" name="length" id="Length" placeholder="ex: 28" autocomplete="off"
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
              <label class="form-label" for="Seats">Seats</label>
              <input type="text" class="form-control" name="seats" id="Seats" placeholder="ex: 8" autocomplete="off"
                value="{{old('seats')}}">
              @error('seats')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-4">
              <label class="form-label" for="ListingType">Listing Type</label>
              <select name="listing_type" id="ListingType" class="form-control">
                <option value="for_rent" @selected(old('listing_type')=='for_rent' )>For Rent</option>
                <option value="for_sale" @selected(old('listing_type')=='for_sale' )>For Sale</option>
              </select>
              @error('listing_type')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3 col-md-2">
              <label class="form-label" for="Price">Price</label>
              <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="price" id="Price"
                placeholder="ex: 99.99" autocomplete="off" value="{{old('price')}}">
              @error('price')
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
