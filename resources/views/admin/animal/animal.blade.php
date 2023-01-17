@if ( session('store'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Saved Successfully!</strong>Animal has been successfully saved
    </div>
@endif
@if ( session('update'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Update Successfully!</strong>Animal has been successfully update
    </div>
@endif
@if ( session('destroy'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Delete Successfully!</strong>Animal has been successfully delete
    </div>
@endif
<section class="animal">
    <div class="container">
        <div>
            <h4>Animals</h4>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card-body p-0">
                    <table class="table table-striped table-hover m-0">
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Id Specie</th>
                            <th>Name</th>
                            <th>Image</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{--@if(count($species) > 0)
                        @foreach($species as $specie)
                            <tr>
                                <td>{{$specie->id}}</td>
                                <td>{{$specie->name}}</td>
                            </tr>
                        @endforeach
                         @else
                             <tr>
                                 <td colspan="5" class="text-center">No Data Found</td>
                             </tr>
                         @endif--}}
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="col-auto">
                    <a href="{{route(config('shin.route.ANIMAL'))}}" class="btn btn-primary">
                        Go! Animal
                    </a>
                </div>
                <form action="?" class="col-auto ms-auto">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control "
                               value="{{request()->keywords}}"
                               placeholder="search name animal ..."/>
                        <button type="submit" class="btn btn-secondary">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
