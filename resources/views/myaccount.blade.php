@extends('layouts.user.user')

@section('content')

@include('partials.user.navbar')

<div id="wrapper">
   <!-- Sidebar -->
   @include('partials.user.sidebar')
      
   <div id="content-wrapper">

    <div class="single-channel-page" id="content-wrapper">
            <div class="single-channel-image">
               <img class="img-fluid" alt="" src="{{url('/assets/img/user-banner.png')}}">
               <div class="channel-profile">
                  <img class="channel-profile-img" alt="" src="{{url('/images/user/')}}/{!! Auth::user()->image !!}" style="width: 100px; height: 100px;">
                   <div class="col-12">
                                <h3 style="text-align: right; color: white; font-style: 30px;">{!! Auth::user()->name !!}</h3>
                            </div>
                  <div class="social hidden-xs"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    
                      </font></font><a class="fb" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Facebook </font></font></a>
                     <a class="tw" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Twitter </font></font></a>
                     <a class="gp" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Google</font></font></a>
                     
                      <a class="gp" href="{{ url('/account/channel/index') }}" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crear Canal</font></font></a>
                       <a class="gp" href="{{url('/account/profile')}}" style="background: linear-gradient(135deg, #07bf67 0%,#0cded5 100%)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Perfil</font></font></a>
                  </div>
               </div>
            </div>
         </div>

        <div class="container-fluid pb-0">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12" style="     
    background: #fff none repeat scroll 0 0;
    border-radius: 2px;
    box-shadow: 0 0 11px #ececec;">

                        <div class="row">
                            <div class="col-12 mt-2">
                                <h3 class="text-center">Canales</h3>
                              
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-4" v-for="channel in channels">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        
                                        <a :href="'{{ url('/channel/slug/') }}'+'/'+channel.slug" target="_blank"><img class="img-fluid" :src="'{{ url('/images/channels') }}'+'/'+channel.image" alt=""></a>
                                        
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="#">@{{ channel.namw }}</a>
                                        </div>
                                        <div class="video-page text-success">
                                            @{{ channel.category.name }}  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

               <div class="row mt-3" style=" background: #fff none repeat scroll 0 0;
    border-radius: 2px;
    box-shadow: 0 0 11px #ececec;
">
                            <div class="col-12 mt-3">
                               <h3 class="text-center">Videos</h3>
                            </div>
                       
                            <div class="col-xl-3 col-sm-6 mb-3" v-for="video in videos">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="" target="_blank"><i class="fas fa-play-circle"></i></a>
                                        <a href="" target="_blank"><img class="img-fluid" src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/v5.png" alt=""></a>
                                        <div class="time" style="background: transparent !important;">3:50</div>
                                        <div class="tag-new" style="position: absolute; top:10px; 
                                        background: #f5234a none repeat scroll 0 0;
    border-radius: 2px;
    color: #fff;
    font-size: 11px;
    font-weight: 500;
    opacity: 0.7;
    left: 6px;
    position: absolute;
    ">Nuevo</div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="">@{{ video.title }}</a>
                                        </div>
                                        <div class="video-page text-success">
                                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                        </div>
                                        <div class="video-view">
                                            1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 " style=" background: #fff none repeat scroll 0 0;
    border-radius: 2px;
    box-shadow: 0 0 11px #ececec;
">
                        <div class="row">
                            <div class="col-12 mt-3">
                                 <h3 class="text-center">Noticias</h3>
                            </div>
                        </div>
                        <div class="row" style="height: 100%;">
                            


                            <div class="col-12" v-for="notice in notices">
                                <!--<img :src="'{{ url('/') }}' + notice.image" alt="" style="width: 100%">
                                <p class="text-center">@{{ notice.title }}</p>-->

                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="eye-icon" href="#"><i class="fas fa-eye-circle"></i></a>
                                        <a :href="'{{ url('/notice/') }}'+'/'+notice.slug"><img class="img-fluid" :src="'{{ url('/images/notice') }}'+'/'+ notice.image" alt="" style="with: 80%"></a>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="#">@{{ notice.title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" v-for="index in pages" :key="index" @click="fetch(index)" >@{{ index }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    pages:[],
                    channels:[]
                    
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

                },
                channelsFetch(){

                    axios.get("{{ url('/account/channel/user/fetch') }}").then(res => {
                        this.channels = res.data
                    })

                }
            },
            mounted(){
                this.fetch()
                this.fetchNotices()
                this.channelsFetch()
            }

        })

    </script>

@endpush