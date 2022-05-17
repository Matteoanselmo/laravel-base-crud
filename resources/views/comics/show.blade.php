@extends('layouts.main')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row ">
                <h1>List of trains </h1>
                <a href="{{route('comics.create')}}" class="text-end">
                    <button class="btn btn-warning">Add Comic</button>
                </a>
                <div class="col-12 d-flex justify-content-center">
                    <div class="card mb-2" style="width: 18rem;">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                            <h6 class="card-title">{{$comic->series}}</h6>
                            <h6 class="card-title">{{$comic->type}}</h6>
                            <p class="card-text">{{$comic->description}}</p>
                            <p class="card-text">{{$comic->sale_date}}</p>
                            <a href="#" class="btn btn-primary">{{$comic->price}} €</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
