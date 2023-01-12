@extends('admin.layouts_admin.master')
@section('content')

    <main>
        <section class="container">
            <div class="create">
                <h3>Add A Image</h3>
                <div class="form_img">

                    <form action="{{route(config('shin.route.STORE_IMG'))}}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form_name">
                            <label for="">Name Image: </label>
                            <input name="name_slug" type="text" id="name_slug" required>
                        </div>
                        <div class="form_name">
                            <label for="">Image: </label>
                            <input name="slug" id="slug" type="file" accept="image/*" class="form-control-file" required>
                        </div>
                        <button type="submit" class="btn btn-warning">Post</button>
                        <a  class="btn btn-primary" href="{{route(config('shin.route.INDEX_IMG'))}}">Back</a>
                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection
