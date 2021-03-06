@extends('layouts.admin')

@section('page-title', 'Create Photo')

@section('content')
<div id="mainContent">
  <div class="col-md-6">
    <div class="bgc-white p-20 bd">
      <h1>Create Photo</h1>
      <div class="mT-30">
        <form method="POST" enctype="multipart/form-data"
          action="{{ route('admin.listings.photos.store', ['slug' => $slug, 'id' => $id]) }}">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="Address">Address</label>
            <input type="file" name="image">
            @error('image')
            <div class="error-sub-text">
              {{$message}}
            </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary btn-color">Save Image</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection