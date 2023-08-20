<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $boat_class = null, $boat_type = null, $listing_type = "for_rent", $state = null, $city = null, $zipcode = null)
    {
      $min_seats = (is_null ($request->input('min_seats'))) ? 0 : $request->input('min_seats');
      $max_seats = (is_null ($request->input('max_seats'))) ? 100 : $request->input('max_seats');
      $min_length = (is_null ($request->input('min_length'))) ? 0 : $request->input('min_length');
      $max_length = (is_null ($request->input('max_length'))) ? 100 : $request->input('max_length');
      $min_price = (is_null ($request->input('min_price'))) ? 0 : $request->input('min_price');
      $max_price = (is_null ($request->input('max_price'))) ? 1000000 : $request->input('max_price');

      $filters = [
        'class' => $boat_class,
        'boat_type' => $boat_type,
        'listing_type' => $listing_type,
        'state' => $state,
        'city' => $city,
        'zipcode' => $zipcode
      ];

      $listings = DB::table('listings')->where(function($query) use($filters) {
        foreach ($filters as $column => $value) {
          if(!is_null($value)) {
            $query->where($column, $value);
          }
        }
      })
      ->where('published', 1)
      ->where('status', 'available')
      ->whereBetween('seats', [$min_seats, $max_seats])
      ->whereBetween('length', [$min_length, $max_length])
      // ->whereBetween('price', [$request->input('min_price'), $request->input('max_price')])
      ->whereBetween('price', [$min_price, $max_price])
      ->get();

      return $listings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $id)
    {
      $listing = Listing::where([
        'slug' => $slug,
        'id' => $id
      ])->first();
      $photos = Photo::where([
        'listing_id' => $id
      ])->get();

        //! pass $listing to the view
        //return $photos;
        return view('pages/single-listing', ['listing' => $listing, 'photos' => $photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
