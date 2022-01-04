<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Resources\DefaultResource;

class CourseController extends Controller
{
    
    public function index($keyword,$count){
        ($keyword == '-') ? $keyword = '' : $keyword;
        $data = Course::where(function ($query) use ($keyword) {
            $query->where('name', 'LIKE', '%'.$keyword.'%');
        })
        ->orderBy('id','DESC')->paginate($count);
        return DefaultResource::collection($data);
    }

    public function store(Request $request){
        $data = \DB::transaction(function () use ($request){
            if($request->editable){
                $data = Course::findOrFail($request->id);
                $data->update($request->except('editable'));
                return $data;
            }else{
                $data = Course::create($request->all());
                return $data;
            }
        });
        return new DefaultResource($data);
    }

    public function api(){
        $data = Course::all();
        return $data;
    }

}
