@extends('admin.layouts_admin.main')
@section('content')
    <main>
        <section class="create ">
            <div class="col-lg-9 form_create">
                <h3>Add Detail Animal</h3>
                <div class="form_img row">
                    <div class="col-7">
                        <form action="{{route(config('shin.route.STORE_DETAIL_ANIMAL'))}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-auto ">
                                <label for="">Name Animal: </label>
                                <select name="id_animals" type="text" id="id_animals" class="col-7">
                                    @foreach($animals as $animal)
                                        <option value="{{$animal->id}}">{{$animal->name_animal}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form_detail ">
                                <label class="col-5 detail" for="">Height: </label>
                                <input class="col-4 detail" name="height" type="text" id="height" required>
                                <span class="col-2 input">Cm</span>
                            </div>

                            <div class="col-auto ">
                                <label for="">Size: </label>
                                <input name="source" type="text" id="source" placeholder="big, medium, small"  required>
                            </div>

                            <div class="col-auto ">
                                <label class="col-4" for="">Source: </label>
                                <input name="source" type="text" id="source" required>
                            </div>

                            <div class="form_detail ">
                                <label class="col-5 "for="">Longevity: </label>
                                <input class="col-4 detail" name="longevity" type="text" id="longevity" required>
                                <span class="col-2 input">Year</span>
                            </div>

                            <div class="col-auto ">
                                <label for="">Information: </label>
                                <textarea class="form-control" name="information" type="text" id="information" required></textarea>
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
