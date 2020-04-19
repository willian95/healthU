@extends('layouts.user.user')

@section('content')

@include('partials.user.navbar')

<div id="wrapper">
   <!-- Sidebar -->
   @include('partials.user.sidebar')
      
   <div id="content-wrapper">
        <div class="container-fluid pb-0">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-12">
                        
                        <div class="row">
                    
                            <div class="col-xl-3 col-sm-6 mb-3" v-for="video in videos">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" :href="video.link" target="_blank"><i class="fas fa-play-circle"></i></a>
                                        <a :href="video.link" target="_blank"><img class="img-fluid" src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/v5.png" alt=""></a>
                                        <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="#">@{{ video.title }}</a>
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
                    <div class="col-xl-3 col-lg-3 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="text-center">Noticias</h4>
                            </div>
                        </div>
                        <div class="row" style="height: 100%;">
                            


                            <div class="col-12" v-for="notice in notices">
                                <!--<img :src="'{{ url('/') }}' + notice.image" alt="" style="width: 100%">
                                <p class="text-center">@{{ notice.title }}</p>-->

                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="eye-icon" href="#"><i class="fas fa-eye-circle"></i></a>
                                        <a :href="'{{ url('/notice/') }}'+'/'+notice.slug"><img class="img-fluid" :src="'{{ url('/') }}' + notice.image" alt="" style="with: 100%"></a>
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