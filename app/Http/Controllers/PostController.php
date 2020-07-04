<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use Validator;
use Session;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = PostModel::orderBy('created_at','DESC')->get();
        return view('backend.post.post',['data'=>$data]);
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
        $obj = new PostModel;
        $requested_data = $request->all();

        //Form Validation
        $validation = Validator::make($requested_data, $obj->validationRules($request->video_or_post));
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        //URL Validation
        if ($request->video_or_post == 1 && !filter_var($request->file, FILTER_VALIDATE_URL)) { 
            $validation->errors()->add('file', 'Please enter a valid URL!');
            return back()->withErrors($validation)->withInput();
        }

        if ($request->video_or_post == 1 && filter_var($request->file, FILTER_VALIDATE_URL)) { 
            $str_arr = explode("=", $request->file);
            $requested_data['file'] = $str_arr[1];
        }

        //Move Image
        if ($request->video_or_post == 2 && $request->hasFile('file')) {
            $image_type = $request->file('file')->getClientOriginalExtension();
            $path = "backend_assets/images/";
            $name = time() . "." . $image_type;
            $full_path = $path . $name;
            $request->file('file')->move($path, $name);
            $requested_data['file'] = $full_path;
        }

        $obj->fill($requested_data)->save();
        Session::put('toastr','Post Created Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = PostModel::findOrFail($id);
        if ( $data->status == 1 ) {
            $data->update(['status' => 0]);  

            Session::put('toastr','Post Unpublished Successfully');
            return back();  
        }
        else {
            $data->update(['status' => 1]);  

            Session::put('toastr','Post Published Successfully');
            return back(); 
        }
        
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
        $data = PostModel::findOrFail($id);

        if ( $data->video_or_post == 2 ) {
            if( File::exists($data->file )){
                File::delete( $data->file);
            }
        }
        $data->delete();

        Session::put('toastr','Post Deleted Successfully');
        return back(); 
    }
}
