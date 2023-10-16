<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $businesses = Business::with('user')->paginate(5);
        
        // dd($businesses);
        
        return view('business.dashboard',compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $input = $request->validate([
            'name' => 'required',
            'address' => 'required|max:255',
            'email' => 'required|email|unique:businesses,email'
        ]);
        
        
        $input['user_id'] = Auth::id();

        Business::create($input);

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $business = Business::with(['user','locations'])->find($id);


        $locations = implode(', ',Arr::pluck($business->locations, 'name'));

    
        return view('business.show',compact('business','locations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $business = Business::with('user')->find($id);

        return view('business.edit',compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,Business $business)
    {
        $input = $request->validate([
            'name' => 'required',
            'address' => 'required|max:255',
            'email' => 'required|email|unique:businesses,email'
        ]);

        $business->update($input);

        return redirect()->route('dashboard');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return redirect()->route('dashboard');
    }
}
