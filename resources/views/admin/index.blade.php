@extends('admin.layouts_admin.main')
@section('content')

    <main>
       <section class="container">
           <div class="home_admin">
               <h3 >Home Admin</h3>
               <hr>
           </div>
           <div class="row">
               <div class="col-lg-4">
                   <div class="small-box bg-success row">
                       <div class="inner">
                           {{--@foreach()
                               <img src="{{url('storage/'.$value->slug)}}" alt="">
                           @endforeach--}}
                           12<img src="{{asset('assets/images/person-circle.svg')}}" alt="">
                       </div>
                       <div class="ion ion-stats-bars">
                           </div>
                   </div>
                   <a href="#" class="small-box-footer"></a>
               </div>
               <div class="col-lg-4">
                   <div class="small-box bg-success">
                       <div class="inner">
                           12
                       </div>
                   </div>
               </div>
               <div class="col-lg-4">
                   <div class="small-box bg-success">
                       <div class="inner">
                           12
                       </div>
                   </div>
               </div>
           </div>
       </section>
    </main>

@endsection
