@extends('admin.layouts_admin.main')
@section('content')

    <main>
    <div class="container">
        <a class="btn btn-warning" href="{{route(config('shin.route.CREATE_IMG'))}}">Create</a>
    </div>
    </main>

@endsection
