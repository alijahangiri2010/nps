<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rate as RateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RateController extends Controller
{
    public function save_rate(Request $request)
    {
        Validator::make($request->all(), [
            'rate' => 'required|integer|between:0,10',
        ])->validate();
        
        RateModel::create([
            'ip_address' => $request->ip(),
            'rate' => $request->input('rate'),
        ]);

        return redirect(route('congrats'));
    }

    // public function reports()
    // {

    //     $data = RateModel::get();

    //     return view('reports', ['a' => $data]);
    // }
}
