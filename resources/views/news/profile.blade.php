@extends('layouts.profilefront')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name">
                                    <h1>{{ str_limit($headline->name, 20) }}</h1>
                                </div>
                                <div class="gender">
                                    <h1>{{ str_limit($headline->gender, 10) }}</h1>
                                </div>
                                <div class="hobby">
                                    <h1>{{ str_limit($headline->hobby, 100) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="introduction">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ str_limit($post->name, 50) }}
                                </div>
                                <div class="gender">
                                    {{ str_limit($post->gender, 20) }}
                                </div>
                                <div class="hobby">
                                    {{ str_limit($post->hobby, 200) }}
                                </div>
                                <div class="introduction">
                                    {{ str_limit($post->introduction, 1000) }}
                                </div>
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
