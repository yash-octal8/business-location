<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Business;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $locations = Location::with('business.user')->paginate(5);

        
        return view('location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $businesses = Business::all();

        return view('location.create',compact('businesses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
         $request->validate([
            'name' => 'required',
        ]);
        
        Location::create($request->all());

        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        

    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location,$id)
    {
        $locations = Location::find($id);

        $businesses = Business::all();



        return view('location.edit',compact('locations','businesses'));    

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       
        $input = $request->all();
        $location = Location::findOrFail($id);
        $location->update($input);

    
       return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location,$id)
    {
        $location = Location::findOrFail($id);

        $location->delete();

        return redirect()->back();

    }
}
