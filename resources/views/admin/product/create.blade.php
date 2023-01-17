@extends('admin.layouts_admin.main')
@section('content')
    <main>
        <section class="create ">
            <div class="col-lg-9 form_create">
                <h3>Add A Product</h3>

                    <div class="form_img row">
                        <div class="col-12">
                            <form action="{{route(config('shin.route.STORE_PRODUCT'))}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="form_name ">
                                    <label for="">Name Project: </label>
                                    <input name="name_product" type="text" id="name_product" required>
                                </div>
                                <div class="form_name">
                                    <label for="">Image: </label>
                                    <input name="image" id="image" type="file" accept="image/*" class="form-control-file"
                                           required>
                                </div>
                                <div class="form_name">
                                    <label for="">Price Product: </label>
                                    <input name="price" type="text" id="price" required>
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
