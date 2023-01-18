@extends('admin.layouts_admin.main')
@section('content')

    <main>
        @if ( session('store'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Saved Successfully!</strong>Specie has been successfully saved
            </div>
        @endif
        @if ( session('update'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Update Successfully!</strong>Specie has been successfully update
            </div>
        @endif
        @if ( session('destroy'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Delete Successfully!</strong>Specie has been successfully delete
            </div>
        @endif
        <section class="animal">
            <div class="container">
                <div>
                    <h4>Animals</h4>
                </div>
                <div class="col-lg-4">
                    <div class="col-auto">
                        <a href="{{route(config('shin.route.CREATE_ANIMAL'))}}" class="btn btn-primary">
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
                                <th>Id Specie</th>
                                <th>Name</th>
                                <th width="200px">Image</th>
                                <th width="500px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($animals) > 0)
                                @foreach($animals as $animal)
                                    <tr>
                                        <td>{{$animal->id}}</td>
                                        <td>{{$animal->specie->name}}</td>
                                        <td>{{$animal->name_animal}}</td>
                                        <td>
                                            <img class="img-form"
                                                 src="{{url('storage/'.$animal->image)}}" alt="">
                                        </td>
                                        <td>
                                            <form action="{{route((config('shin.route.DESTROY_ANIMAL')),$animal->id)}}"
                                                  method="POST">
                                                <a class="btn btn-outline-primary"
                                                   href="{{route((config('shin.route.EDIT_ANIMAL')),$animal->id)}}">Edit</a>
                                                <a class="btn btn-outline-success"
                                                   href="{{route((config('shin.route.SHOW_ANIMAL')),$animal->id)}}">Show</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="text-center">No Data Found</td>
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
