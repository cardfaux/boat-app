@extends('layouts.admin')

@section('page-title', 'Edit a Listing')

@section('content')
<div id="mainContent">
  <form method="POST" action="{{ route('admin.listings.update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
    @csrf
    @method('PUT')
    <div class="row">
      <div class="col-md-9">
        <div class="bgc-white p-20 bd">
          <h1>Edit Listing</h1>
          <div class="mT-30">

            <div class="mb-3">
              <label class="form-label" for="Title">Title</label>
              <input type="text" class="form-control" name="title" id="Title" placeholder="ex: Nice, fresh pontoon"
                style="" autocomplete="off" value="{{old('title', $listing->title)}}">
              @error('title')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="Marina">Marina</label>
              <input type="text" class="form-control" name="marina" id="Marina" placeholder="ex: Flat Rock" style=""
                autocomplete="off" value="{{old('marina', $listing->marina)}}">
              @error('marina')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="SlipNumber">SlipNumber</label>
              <input type="text" class="form-control" name="slipnumber" id="SlipNumber" placeholder="ex: 33" style=""
                autocomplete="off" value="{{old('slipnumber', $listing->slipnumber)}}">
              @error('slipnumber')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="Address">Address</label>
              <input type="text" class="form-control" name="address" id="Address" placeholder="ex: 1234 Main St"
                style="" autocomplete="off" value="{{old('address', $listing->address)}}">
              @error('address')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label class="form-label" for="address2">Address 2</label>
              <input type="text" class="form-control" name="address2" id="address2"
                placeholder="ex: Apartment, studio, or floor" style="" autocomplete="off"
                value="{{old('address2', $listing->address2)}}">
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
                  autocomplete="off" value="{{old('city', $listing->city)}}">
                @error('city')
                <div class="error-sub-text">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="mb-3 col-md-4">
                <label class="form-label" for="state">State</label>
                <select name="state" id="state" class="form-control">
                  <option value="FL" @selected(old('state', $listing->state)=='FL' )>Florida</option>
                  <option value="NY" @selected(old('state', $listing->state)=='NY' )>New York</option>
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
                  autocomplete="off" value="{{old('zipcode', $listing->zipcode)}}">
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
                  autocomplete="off" value="{{old('class', $listing->class)}}">
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
                <input type="text" class="form-control" name="length" id="length" placeholder="ex: 28"
                  autocomplete="off" value="{{old('length', $listing->length)}}">
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
                  value="{{old('seats', $listing->seats)}}">
                @error('seats')
                <div class="error-sub-text">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-md-12">
                <h3>Details</h3>
                <label class="form-label" for="description">Description</label>
                <textarea rows="4" class="form-control" name="description" id="description"
                  placeholder="ex: talk about listing"
                  autocomplete="off">{{old('description', $listing->description)}}</textarea>
                @error('description')
                <div class="error-sub-text">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="bgc-white p-20 bd">
          <div class="mT-30">
            <h3>Settings</h3>
            <div class="form-group">
              <label class="form-label" for="status">Status</label>
              <select name="status" id="status" class="form-control">
                <option value="draft" @selected(old('status', $listing->status) == 'draft')>Draft</option>
                <option value="published" @selected(old('status', $listing->status) == 'published')>Published</option>
              </select>
              @error('status')
              <div class="error-sub-text">
                {{$message}}
              </div>
              @enderror
            </div>
            <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction: column;">

              <a href="{{route('admin.listings.photos', ['slug' => $listing->slug, 'id' => $listing->id])}}"
                onclick="return confirm('did you save your updates?')" class="btn cur-p btn-outline-success"
                style="width: 100%; margin-top: 1rem; color: black;">Photos</a>
            </div>
            <div class="form-group" style="display: flex; margin-top: 1rem; flex-direction: column;">
              <button type="submit" class="btn btn-primary btn-color" style="width: 100%;">Save</button>
              <a href="{{route('admin.listings.delete', ['slug' => $listing->slug, 'id' => $listing->id])}}"
                onclick="return confirm('are you sure you want to delete this listing')"
                class="btn btn-danger btn-color" style="width: 100%; margin-top: 1rem;">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection