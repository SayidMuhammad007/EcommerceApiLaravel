<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(){
        return auth()->user()->favorites()->paginate(20);
    }

    public function store(Request $request){
        auth()->user()->favorites()->attach($request->product_id);
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function destroy($product_id){
        if(auth()->user()->favorites()->where('product_id', $product_id)){
            auth()->user()->favorites()->detach($product_id);
            return response()->json([
                'status' => 'success',
            ]);
        }
        return response()->json([
            'status' =>'error',
            'message'=>'Favorite does not find with this ID'
        ]);
    }
}
