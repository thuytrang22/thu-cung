@extends('admin.layouts_admin.main')
@section('content')
    <main>
        <section class="create ">
            <div class="col-lg-9 form_create">
                <h3>Add A Animal</h3>
                    <div class="form_img row">
                        <div class="col-12">
                            <form action="{{route(config('shin.route.STORE_ANIMAL'))}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form_name ">
                                    <label for="">Name Specie: </label>
                                    <select name="id_species" type="text" id="id_species">
                                        @foreach($species as $specie)
                                            <option value="{{$specie->id}}">{{$specie->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form_name ">
                                    <label for="">Name Animal: </label>
                                    <input name="name_animal" type="text" id="name_animal" required>
                                </div>

                                <div class="form_name">
                                    <label for="">Image: </label>
                                    <input name="image" id="image" type="file" accept="image/*"
                                           class="form-control-file"
                                           required>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route(config('shin.route.ADMIN'))}}" class="btn btn-warning">Back</a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
    </main>
@endsection
