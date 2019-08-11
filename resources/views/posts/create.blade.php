@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post caption') }}</label>


                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror"
                        caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @if ($errors->has('caption'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('caption')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Post image') }}</label>

                    <input type="file" name="image" id="image" class="form-control-file">
                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image')}}</strong>
                    </span>
                    @endif
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection