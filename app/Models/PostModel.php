<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = ['title', 'description', 'video_or_post', 'section', 'status', 'file'];


    public function validationRules($video_or_post = null) {
    	return [
    		'title' => 'required|max:191',
    		'description' => 'required',
    		'video_or_post' => 'required|numeric',
    		'section' => 'required|numeric',
    		'file' => $video_or_post == 2 ? 'required|mimes:jpeg,jpg,png' : 'required',
    	];
    }
}
