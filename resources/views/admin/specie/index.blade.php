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
        <section class="specie">
            <div class="container">
                <div>
                    <h4>Species</h4>
                </div>
                <div class="col-lg-5">
                    <div class="col-auto">
                        <a href="{{route(config('shin.route.CREATE_SPECIE'))}}" class="btn btn-primary">
                            Create
                        </a>
                        <a class="btn btn-outline-secondary button"
                           href="{{route(config('shin.route.ANIMAL'))}}">View Animal</a>
                        <a class="btn btn-outline-info button"
                           href="{{route(config('shin.route.PRODUCT'))}}">View Project</a>
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
                                <th>Name</th>
                                <th width="500px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($species) > 0)
                            @foreach($species as $specie)
                                <tr>
                                    <td>{{$specie->id}}</td>
                                    <td>{{$specie->name}}</td>
                                    <td>
                                        <form action="{{route((config('shin.route.DESTROY_SPECIE')),$specie->id)}}" method="POST">
                                            <a class="btn btn-outline-primary"
                                               href="{{route((config('shin.route.EDIT_SPECIE')),$specie->id)}}">Edit</a>
                                            <a class="btn btn-outline-success"
                                               href="{{route((config('shin.route.SHOW_SPECIE')),$specie->id)}}">Show</a>
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
