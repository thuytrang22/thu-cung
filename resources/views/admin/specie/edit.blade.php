@extends('admin.layouts_admin.main')
@section('content')
    <main>
        <section class="create ">
            <div class="col-lg-9 form_create">
                <h3>Add A Specie</h3>
                <div class="form_img row">
                    <div class="col-6">
                        <form action="{{route(config('shin.route.UPDATE_SPECIE'))}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form_name">
                                <label for="">Name: </label>
                                <input name="name" type="text" id="name" required>
                            </div>
                            <button type="submit" class="btn btn-primary ">Submit</button>
                            <a class="btn btn-warning" href="{{route(config('shin.route.SPECIE'))}}">Back</a>
                        </form>
                    </div>
                    <div class="col-6"></div>
                </div>
            </div>
        </section>
    </main>
@endsection
