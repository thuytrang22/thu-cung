<section class="home ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/images/1.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/2.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/images/3.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">

    </div>
    <div class="container ">
        <div class="product">

            <h3>Giống chó cảnh </h3>
            <div class="category row" >
                @foreach($category as $value)
                    <div class="col-lg-3">
                        <a href="#">
                            <img src="{{url('storage/'.$value->slug)}}" alt="">
                            <p>{{$value->name_slug}}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="category row" >
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
            </div>
            <div class="category row" >
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="#">
                        <img src="{{asset('assets/images/poodle.jpg')}}" alt="">
                        <p >Chó Poodle</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
