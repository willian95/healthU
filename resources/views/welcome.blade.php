@extends('layouts.user.user')

@section('content')

@include('partials.user.navbar')

<div id="wrapper">
   <!-- Sidebar -->
   @include('partials.user.sidebar')
      
   <div id="content-wrapper">
      <div class="container-fluid pb-0">
         <div class="top-mobile-search">
            <div class="row">
                  <div class="col-md-12">   
                  <form class="mobile-search">
                     <div class="input-group">
                        <input type="text" placeholder="Search for..." class="form-control">
                        <div class="input-group-append">
                              <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                        </div>
                     </div>
                  </form>   
                  </div>
            </div>
         </div>
         <div id="content-wrapper">
            <div class="single-channel-image" >
               <div style="background: white; height: 300px; border: 10px solid #3ace3f;">
               <div class="channel-profile" style=" height: 100%;"   >
                  <div class="row">
                     <div class="col-4">
                  <img class="channel-profile-img" alt="" src="{{url('/images/user/')}}/{!! Auth::user()->image !!}" style=" width: 220px; height: 220px; margin: 2em 8em; box-shadow: 0 0 11px #07bf67;">
                  </div>
                    <div class="col-4" >
                        <h2 style="text-align: center; color: black; font-style: 40px; margin: 1em; ">{!! Auth::user()->name !!}</h2>
                         <center><img class="img" alt="" src="{{url('/images/rango/rango1.jpg')}}" style="width: 150px; box-shadow: 0 0 11px #07bf67; height: 150px; border-radius: 50%;"></center>
                  </div>
                  <div class="col-4" style="">
                     <div class="content-wrapper" style="margin: 2em 1em; display: flex;">
                        <button type="button" class="btn btn-success btn-sm" style="width: 100%; margin:  0px 1% 0px 0px; height: 50px;">0.4555 HU</button>
                        <button type="button" class="btn btn-success btn-sm"style="width: 100%;margin: 0px 1% 0px 0px;height: 50px;" >Depositar</button>
                        <button type="button" class="btn btn-success btn-sm"style="width: 100%; margin:  0px 1% 0px 0px;height: 50px;">Retirar</button>

                     </div>
                     <div class="" style="border: 10px solid #def910; ">
                     <button type="button" class="btn btn-success btn-sm"style="width: 100%; margin:  0px 1% 0px 0px;height: 50px; margin-bottom: 5px;"><b style="font-size: 25px;">Trainer Premiun</b></button>
                     <button type="button" class="btn btn-success btn-sm"style="width: 100%; margin:  0px 1% 0px 0px;height: 50px;"><b style="font-size: 25px;">Promover de rango</b></button>
                  </div>
                  </div>
               </div>
               </div>
           </div>
         </div>
         <hr>
     <div class="col-md-12" style="display: flex;">

<hr class="mt-0">
      <div class="col-md-6" style="display: flex; padding-top:1em; box-shadow: 0 0 11px #ececec;">
         <div class="video-block section-padding">
            <div class="row">
                 <div class="col-md-12">
                  <div class="main-title">
                     <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ordenar por<i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                     </div>
                     <h6>Noticias</h6>
                  </div>
                  </div>


                    <div class="col-xl-6 col-sm-6 mb-3" v-for="notice in notices">
                  <div class="channels-card">

                     <div class="video-card-image">
                        
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                            <a :href="'{{ url('/notice/') }}'+'/'+notice.slug">
                              <img class="img-fluid" :src="'{{ url('/images/notice') }}'+'/'+ notice.image" alt="" style="with: 80%">
                        </a>
                        </div>
                     <div class="channels-card-body">
                        <div class="channels-title mt-3  ">
                              <a :href="'{{ url('/notice/') }}'+'/'+notice.slug">@{{ notice.title }}</a>
                        </div>
                        <div class="channels-view">
                               Autor: Cristhian Manzanares
                        </div>
                     </div>
                  </div>
                  </div>

                   <div class="col-xl-6 col-sm-6 mb-3">
                  <div class="channels-card">
                     <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v1.png') }}" alt=""></a>
                        </div>
                     <div class="channels-card-body">
                        <div class="channels-title mt-3">
                              <a href="#">Hacer ejercicios ¿una moda?</a>
                        </div>
                        <div class="channels-view">
                             Autor: Healthu
                        </div>
                     </div>
                  </div>
                  </div>
                   <div class="col-xl-6 col-sm-6 mb-3">
                  <div class="channels-card">
                     <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v3.png') }}" alt=""></a>
                        </div>
                     <div class="channels-card-body">
                        <div class="channels-title mt-3">
                              <a href="#">EL gymanasio en casa</a>
                        </div>
                        <div class="channels-view">
                              Autor: galadin Suarez
                        </div>
                     </div>
                  </div>
                  </div>
                   <div class="col-xl-6 col-sm-6 mb-3">
                  <div class="channels-card">
                     <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v5.png') }}" alt=""></a>
                        </div>
                     <div class="channels-card-body">
                        <div class="channels-title mt-3">
                              <a href="#">Se extiende la cuarentena</a>
                        </div>
                        <div class="channels-view">
                               Autor: CNN en español
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>

                   <div class="col-md-6" style="display: flex; padding-top:1em; box-shadow: 0 0 11px #ececec;">
         <div class="video-block section-padding ">
            <div class="row">
                  <div class="col-md-12">
                  <div class="main-title">
                     <div class="btn-group float-right right-action">
                        <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ordenar por <i class="fa fa-caret-down" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                              <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                        </div>
                     </div>
                     <h6>Videos Sugeridos</h6>
                  </div>
                  </div>
                 
                     <div class="col-xl-6 col-sm-6 mb-3" v-for="video in videos">
                     <div class="video-card">
                        <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v1.png') }}" alt=""></a>
                           <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                           <div class="video-title">
                                 <a href="">@{{ video.title }}</a>
                           </div>
                           <div class="video-page text-success">
                                 Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-6 col-sm-6 mb-3">
                     <div class="video-card">
                        <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v2.png') }}" alt=""></a>
                           <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                           <div class="video-title">
                                 <a href="#">There are many variations of passages of Lorem</a>
                           </div>
                           <div class="video-page text-success">
                                 Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-6 col-sm-6 mb-3">
                     <div class="video-card">
                        <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v3.png') }}" alt=""></a>
                           <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                           <div class="video-title">
                                 <a href="#">There are many variations of passages of Lorem</a>
                           </div>
                           <div class="video-page text-danger">
                                 Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                           </div>
                           <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                           </div>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-6 col-sm-6 mb-3">
                     <div class="video-card">
                        <div class="video-card-image">
                           <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                           <a href="#"><img class="img-fluid" src="{{ asset('assets/img/v4.png') }}" alt=""></a>
                           <div class="time">3:50</div>
                        </div>
                        <div class="video-card-body">
                           <div class="video-title">
                                 <a href="#">There are many variations of passages of Lorem</a>
                           </div>
                           <div class="video-page text-success">
                                 Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                           </div>
                           <div class="video-view">
                                 1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                           </div>
                        </div>
                     </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
   </div>
   
      <!-- /.container-fluid -->
      <!-- Sticky Footer -->
      @include('partials.user.footer')
   </div>
</div>

<!-- /.content-wrapper -->
</div>
   
@endsection

@push('scripts')

    <script>
            
        const app = new Vue({
            el: '#dev-app',
            data(){
                return{
                    notices:"",
                    videos:[],
                    pages:[]
                    
                }
            },
            methods:{
                fetch(page = 1){
                    axios.get("{{ url('/user/videos/fetch/') }}"+"/"+page)
                    .then(res => {
                        this.videos = res.data.videos
                        this.pages = Math.ceil(res.data.videosCount / 20)
                    })
                    .catch(err => {

                    })
                },
                fetchNotices(){

                    axios.get("{{ url('/account/notices/fetch/') }}")
                    .then(res => {
                        this.notices = res.data.notices
                    })
                    .catch(err => {

                    })

                }
                
            },
            mounted(){
                this.fetch()
                this.fetchNotices()
               }

        })

    </script>

@endpush