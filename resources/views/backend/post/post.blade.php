@extends('backend.index')
@section('main_section')
<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Post</li>
    </ol>
    <div class="row">
        <div class="col-lg-12 post_modal">
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal">Create Post</button>
        </div>
    </div>
    <!-- Modal -->
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create Post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ url('/post') }}" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            @csrf
              <div class="form-group">
                <label >Title</label>
                <input type="text" class="form-control" placeholder="Title" name="title" value="{{ old('title') }}">
                <small class="form-text text-danger">{{ $errors->first('title') }}</small>
              </div>
                
              <div class="form-group">
                <label >Descriptipn</label>
                <textarea class="form-control" placeholder="Descriptipn" name="description" value="{{ old('description') }}"></textarea>
                <small class="form-text text-danger">{{ $errors->first('description') }}</small>
              </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label >Video/Post</label>
                        <select class="form-control" name="video_or_post" id="video_or_post" value="{{ old('video_or_post') }}">
                            <option value="1" @if( old('video_or_post') == 1) selected="selected" @endif>Video</option>
                            <option value="2" @if( old('video_or_post') == 2) selected="selected" @endif>Post</option>
                        </select>
                        <small class="form-text text-danger">{{ $errors->first('video_or_post') }}</small>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label >Post will appear in</label>
                        <select class="form-control" name="section" id="section">
                            <option value="1" @if( old('section') == 1) selected="selected" @endif>Section 1</option>
                            <option value="2" @if( old('section') == 2) selected="selected" @endif>Section 2</option>
                        </select>
                        <small class="form-text text-danger">{{ $errors->first('section') }}</small>
                    </div>
                </div>
            </div>
              
              <div class="form-group" id="image">
                <label >Image</label>
                <input type="file" class="form-control" name="file" value="{{ old('file') }}">
                <small class="form-text text-danger">{{ $errors->first('file') }}</small>
              </div>
                
              <div class="form-group" id="video_link">
                <label >Video Link</label>
                <input type="text" class="form-control" name="file" placeholder="https://www.youtube.com/" value="{{ old('file') }}">
                <small class="form-text text-danger">{{ $errors->first('file') }}</small>
              </div>

              <div class="form-group">
                <label >Status</label>
                <select class="form-control" name="status" value="{{ old('status') }}">
                    <option value="1">Publish</option>
                    <option value="0">Unpublish</option>
                </select>
                <small class="form-text text-danger">{{ $errors->first('section') }}</small>
              </div>

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Post List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Video/Post</th>
                            <th>Section</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Video/Post</th>
                            <th>Section</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($data as $key => $value)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ substr($value->title, 0, 20) }}</td>
                            <td>{{ substr($value->description, 0, 100).'...' }}</td>
                            <td>{{ $value->video_or_post == 1 ? 'Video' : 'Post' }}</td>
                            <td>{{ $value->section == 1 ? 'Section 1' : 'Section 2' }}</td>
                            <td>{{ $value->status == 1 ? 'Publish' : 'Unpublish' }}</td>
                            <td>
                                @if($value->video_or_post == 1)
                                <img src="https://img.youtube.com/vi/{{ $value->file }}/maxresdefault.jpg">
                                @else
                                <img src="{{ asset($value->file) }}">
                                @endif
                            </td>
                            <td style="display: inline-flex;">
                                <form method="POST" action="/post/{{$value->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                &nbsp;
                                <form method="GET" action="/post/{{$value->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    @if( $value->status == 1 )
                                        <button class="btn btn-warning btn-sm">Unpublish</button>
                                    @else
                                        <button class="btn btn-success btn-sm">Publish</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop