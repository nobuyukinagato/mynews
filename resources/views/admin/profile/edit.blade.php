@extends('layouts.profile')
@section('title', 'プロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="body">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" row="10" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                            <label class="col-md-2">性別</label>
                            <div class="col-md-10">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" value="m">
                                    <label class="form-check-label" for = "male">男</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gender" value="f">
                                    <label class="form-check-label" for = "female">女</label>                        
                                </div>
                            </div>       
                        </div>                   
                    <div class="form-group row">
                        <label class="col-md-2" for="body">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ $profile_form->hobby }}</textarea>
                        </div>
                    </div><div class="form-group row">
                        <label class="col-md-2" for="body">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="5">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection