<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public function index() {
    	$posts = PostModel::get()->toArray();

    	$data['section1'] = collect($posts)->where('section', 1);
    	$data['section2'] = collect($posts)->where('section', 2);

		return view('frontend.home', $data);
	}

	/**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

	public function postDetails($id) {
		$data = PostModel::findOrFail($id);

		return view('frontend.details', ['data' => $data]);
	}
}
