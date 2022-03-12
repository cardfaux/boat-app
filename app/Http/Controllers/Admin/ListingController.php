<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// connect the Listing model to this Listing controller
use App\Models\Listing;
use App\Helper\Helper;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/listings/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/listings/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zipcode' => 'required|integer',
            'class' => 'required',
            'length' => 'required|integer',
            'seats' => 'required|integer'
        ]);

        $listing = new Listing();
        $listing->title = $request->get('title');
        $listing->marina = $request->get('marina');
        $listing->slipnumber = $request->get('slipnumber');
        $listing->address = $request->get('address');
        $listing->address2 = $request->get('address2');
        $listing->city = $request->get('city');
        $listing->state = $request->get('state');
        $listing->zipcode = $request->get('zipcode');
        $listing->class = $request->get('class');
        $listing->length = $request->get('length');
        $listing->seats = $request->get('seats');

        $listing->slug = Helper::slugify("{$request->marina}-{$request->slipnumber}-{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");

        $listing->save();
        
        return redirect("/admin/listings/{$listing->slug}/{$listing->id}/edit")->with('success', 'Created New Listing Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin/listings/edit');
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
