@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row" style="">
                <table style="width:45%; margin: 0 auto;">
                    <tr>
                        <td>名前　：</td>
                        <td>{{ $headline->name }}</td>
                    </tr>
                    <tr>
                        <td>性別　：</td>
                        <td>{{ $headline->gender == 'm' ? '男性':'女性'}}</td>
                    </tr>
                    <tr>
                        <td>趣味　：</td>
                        <td>{{ $headline->hobby }}</td>
                    </tr>
                    <tr>
                        <td>自己紹介　：</td>
                        <td>{{ $headline->introduction }}</td>
                    </tr>
                </table>
            
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row ">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="title">
                                    {{ Str::limit($post->title, 150) }}
                                </div>
                                <div class="body mt-3">
                                    {{ Str::limit($post->body, 1500) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
