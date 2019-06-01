{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- admin/profile.create2.blade.phpの@yield('title'に'プロフィール'を埋め込む --}}
@section('title', 'プロフィール')

{{-- admin/profile.create2.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>Myプロフィール</h1></h1>
            </div>
        </div>
    </div>
@endsection