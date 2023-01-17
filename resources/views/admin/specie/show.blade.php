@extends('admin.layouts_admin.main')
@section('content')
    <div class="row ">
        <div class="col-lg-4 container ">
            <div class="card ">
                <h4 class="card-header">
                    Detail Specie
                </h4>
                <div class="card-body">
                    <p>ID :{{ $specie->id }}</p>
                    <p>Name : <strong>{{$specie->name}}</strong></p>
                </div>
                <div class="show">
                    <a class="btn btn-warning" href="{{route(config('shin.route.SPECIE'))}}">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
