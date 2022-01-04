<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class AgencyController extends Controller
{
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = Agency::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%')->orWhere('code', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = Agency::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = Agency::create($request->all());
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = Agency::all();
        return $data;
    }
}
