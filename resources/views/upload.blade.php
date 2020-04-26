@extends('layouts.user.user')

@section('content')

    @include('partials.user.navbar')

    <div id="wrapper">
        <!-- Sidebar -->
        @include('partials.user.sidebar')
        <div id="content-wrapper">
            <div class="container-fluid upload-details">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="main-title">
                        <h6>Upload Details</h6>
                     </div>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="osahan-form">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="e1">Video Title</label>
                                 <input type="text" placeholder="Contrary to popular belief, Lorem Ipsum (2020) is not." id="e1" class="form-control" v-model="title">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label for="e1">Video link</label>
                                 <input type="text" placeholder="eg. https://www.youtube.com/watch?v=q11ortVWgXM" id="e1" class="form-control" v-model="link">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="e2">About</label>
                                 <textarea rows="3" id="e2" name="e2" class="form-control" v-model="description">Description</textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-lg-5">
                              <div class="form-group">
                                 <label for="e7">Tags</label>
                                 <input type="text" placeholder="Gaming, PS4" id="e7" class="form-control" v-model="tags">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e8">Cast (Optional)</label>
                                 <input type="text" placeholder="Nathan Drake," id="e8" class="form-control" v-model="cast">
                              </div>
                           </div>
                           <div class="col-lg-4">
                              <div class="form-group">
                                 <label for="e8">Canal</label>
                                 <select class="form-control" v-model="channelId">
                                    <option :value="channel.id" v-for="channel in channels">@{{ channel.name }}</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-3">
                              <div class="form-group">
                                 <label for="e9">Language in Video (Optional)</label>
                                 <select id="e9" class="custom-select" v-model="language">
                                    <option>English</option>
                                    <option>Spanish</option>
                                    <option>Portuguese</option>
                                    <option>Italian</option>
                                    <option>French</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="osahan-area text-center mt-3">
                        <button class="btn btn-outline-primary" @click="store()">Save Changes</button>
                     </div>
                     <hr>
                     <div class="terms text-center">
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                        <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or non</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer">
               <div class="container">
                  <div class="row no-gutters">
                     <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0">&copy; Copyright 2020 <strong class="text-dark">Vidoe</strong>. All Rights Reserved<br>
                           <small class="mt-0 mb-0">Made with <i class="fas fa-heart text-danger"></i> by <a class="text-primary" target="_blank" href="https://askbootstrap.com/">Ask Bootstrap</a>
                           </small>
                        </p>
                     </div>
                     <div class="col-lg-6 col-sm-6 text-right">
                        <div class="app">
                           <a href="#"><img alt="" src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/google.png"></a>
                           <a href="#"><img alt="" src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/apple.png"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
    </div>

@endsection

@push('scripts')

    <script>
            
        const app = new Vue({
            el: '#dev-app',
            data(){
                return{
                    title:"",
                    link:"",
                    description:"",
                    tags:"",
                    cast:"",
                    language:"",
                    channelId:"",
                    channels:[]
                }
            },
            methods:{
                
               store(){
                    
                  axios.post("{{ url('/upload') }}", {title: this.title, link: this.link, description: this.description, tags: this.tags, cast: this.cast, language: this.language, channelId:this.channelId})
                  .then(res => {

                     if(res.data.success == true){
                        alert(res.data.msg)

                        this.title = ""
                        this.link = ""
                        this.description = ""
                        this.tags = ""
                        this.cast = ""
                        this.language = ""
                        this.channelId = ""

                     }
                     else{
                        alert(res.data.msg)
                     }

                  })
                  .catch(err => {
                     $.each(err.response.data.errors, function(key, value){
                        alert(value)
                     });
                  })

               },
               fetchChannels(){

                  axios.get("{{ url('/channel/user/fetch') }}").then(res => {
                     this.channels = res.data 
                  })

               }

            },
            mounted(){
               this.fetchChannels()
            }

        })

    </script>

@endpush