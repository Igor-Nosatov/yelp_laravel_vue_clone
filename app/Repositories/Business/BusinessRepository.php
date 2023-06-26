<?php

declare(strict_types=1);

namespace App\Repositories\Business;

use App\Http\Requests\Business\BusinessStoreRequest;
use App\Http\Requests\Business\BusinessUpdateRequest;
use App\Models\Business;
use App\Repositories\Business\BusinessInterface;
use Illuminate\Support\Facades\Auth;

class BusinessRepository implements BusinessInterface
{
    public function store(BusinessStoreRequest $request):?array
    {
        $business = Business::create([
            'name'=>$request->name,
            'price_level'=>$request->price_level,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'postal_code'=>$request->postal_code,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'website'=>$request->website,
            'description'=>$request->description,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude
        ]);
        return $business;
    }

    public function update(BusinessUpdateRequest $request, Business $business): ?bool
    {
        $business = Business::find($business);
        $business->update([
            'name'=>$request->name,
            'price_level'=>$request->price_level,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'postal_code'=>$request->postal_code,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'website'=>$request->website,
            'description'=>$request->description,
            'latitude'=>$request->latitude,
            'longitude'=>$request->longitude,
        ]);
        return true;
    }


    public function delete(Business $business): ?bool
    {
        $business = Business::find($business);
        $business->delete();
        return true;
    }
}
