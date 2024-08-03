<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $apartments = Apartment::latest()->paginate(6);
        return view('apartments.index', compact('apartments'));
    }

    public function create()
    {
        return view('apartments.create');
    }

    public function store(Request $request)
    {
            $name = $request->input('name');
            $address = $request->input('address');
            $price_per_sqm = $request->input('price_per_sqm');
            $info = $request->input('info');
            $details = $request->input('details');
            $image_url = $request->input('image_url');
            $status = $request->input('status');
            $apartment = new Apartment();
            $apartment -> name = $name ;
            $apartment -> address = $address ;
            $apartment -> price_per_sqm = $price_per_sqm ;
            $apartment -> info = $info ;
            $apartment -> details = $details ;
            $apartment -> image_url = $image_url ;
            $apartment -> status = $status ;
            $apartment -> save();
            return redirect()->route('apartments.index');


    }
}
