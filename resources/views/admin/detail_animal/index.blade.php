@extends('admin.layouts_admin.main')
@section('content')

    <main>
        @if ( session('store'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Saved Successfully!</strong>Detail animal has been successfully saved
            </div>
        @endif
        @if ( session('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Update Successfully!</strong>Detail animal  has been successfully update
            </div>
        @endif
        @if ( session('destroy'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Delete Successfully!</strong>Detail animal  has been successfully delete
            </div>
        @endif
        <section class="animal">
            <div class="container">
                <div>
                    <h4>Detail Animals</h4>
                </div>
                <div class="col-lg-4">
                    <div class="col-auto">
                        <a href="{{route(config('shin.route.CREATE_DETAIL_ANIMAL'))}}" class="btn btn-primary">
                            Create
                        </a>
                        <a href="{{route(config('shin.route.ADMIN'))}}" class="btn btn-warning">Back</a>
                    </div>
                    <form action="?" class="col-auto ms-auto">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control "
                                   value="{{request()->keywords}}"
                                   placeholder="search name specie ..."/>
                            <button type="submit" class="btn btn-secondary">Search</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12">
                    <div class="card-body p-0">
                        <table class="table table-striped table-hover m-0">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Id Animal</th>
                                <th>Height</th>
                                <th>Size</th>
                                <th>Source</th>
                                <th>Longevity</th>
                                <th>Information</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($detail_animals) > 0)
                                @foreach($detail_animals as $detail)
                                    <tr>
                                        <td>{{$detail->id}}</td>
                                        <td>{{$detail->specie->name}}</td>
                                        <td>{{$detail->height}}</td>
                                        <td>{{$detail->size}}</td>
                                        <td>{{$detail->source}}</td>
                                        <td>{{$detail->longevity}}</td>
                                        <td>{{$detail->information}}</td>
                                     {{--   <td>
                                            <form action="{{route((config('shin.route.DESTROY_ANIMAL')),$detail->id)}}"
                                                  method="POST">
                                                <a class="btn btn-outline-primary"
                                                   href="{{route((config('shin.route.EDIT_ANIMAL')),$detail->id)}}">Edit</a>
                                                <a class="btn btn-outline-success"
                                                   href="{{route((config('shin.route.SHOW_ANIMAL')),$detail->id)}}">Show</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>--}}
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12" class="text-center">No Data Found</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </section>
    </main>
@endsection
