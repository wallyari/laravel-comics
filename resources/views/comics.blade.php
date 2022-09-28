@extends('layout.app')

@section('page-title', 'Comics')

@section('content')
<main class="bg-dark">
    <div class="text-white px-5 py-5 container-fluid">
        <div class="px-5 row text-center" >
            @foreach ($titles as $title)
            <div class="comic-container col-2 text-uppercase">
                <img src="{{$title['thumb']}}">
                <p>{{$title['series']}}</p>
            </div>
            @endforeach
        </div>
        <div class="text-white text-center  mt-3">
            <span class="btn-load-more px-5 py-2">LOAD MORE</span>
        </div>
    </div>
</main>
@endsection

