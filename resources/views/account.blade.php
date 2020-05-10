@extends('layouts.user.user')

@section('content')

@include('partials.user.navbar')

<div id="wrapper">
   <!-- Sidebar -->
   @include('partials.user.sidebar')
      
   <div id="content-wrapper">

    <div class="single-channel-page" id="content-wrapper">

        <div class="container-fluid pb-0">

            <div class="video-block section-padding">
                <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-12 pt-3 pb-3" style=" background: #fff none repeat scroll 0 0;  border-radius: 2px;    box-shadow: 0 0 11px #ececec;">
                             <div class="row" style="height: 100%;">
                                    <div class="col-12 mt-3"  v-if="imagePreview == ''">
                                        <center><img class="img" alt="" src="{{url('/images/user/')}}/{!! Auth::user()->image !!}" style="width: 200px; height: 200px; right: 50%; border-radius: 50%;"></center>
                                    </div>  
                                    <div class="col-12 mt-3"  v-if="imagePreview != ''">
                                        <center><img class="img" alt="" :src="imagePreview" style="width: 200px; height: 200px; right: 50%; border-radius: 50%;"></center>
                                    </div>     
                                
                                  <div class="col-12 mt-3">
                                     <h3 class="text-center">{!! Auth::user()->nickname !!}</h3>
                                  </div>
                                 <div class="col-12 mt-3">  
                                    <center><img class="img" alt="" src="{{url('/images/rango/rango1.jpg')}}" style="width: 200px; height: 200px; right: 50%; border-radius: 50%;"></center>

                                     <br><center><button class="btn btn-success" >Promover</button></center>       
                                </div>    
                            </div>
                        </div>
                    

                         <div class="col-xl-6 col-lg-6 col-md-12" style=" background: #fff none repeat scroll 0 0;   border-radius: 2px;    box-shadow: 0 0 11px #ececec;">
                            <div class="row">
                                      <div class="col-sm-12 col-md-12 col-lg-12 mb-60">          
                                        <center><div class="">
                                          <ul class="nav" style="display: inline-flex; width: 100%;">
                                            <li class=" active navli col-md-4 "><a class="textli" href="#tab1" data-toggle="tab" aria-expanded="true">Informacion</a></li>
                                            <li class="navli col-md-4"><a class="textli" href="#tab2" data-toggle="tab" aria-expanded="false">Seguridad</a></li>
                                            <li class="navli col-md-4"><a class="textli" href="#tab3" data-toggle="tab" aria-expanded="false">Resumen</a></li>
                                           </ul>
                                       
                                        </div></center>
                                      </div>
                                      <div class="tab-content col-sm-12 col-md-12 col-lg-12 mb-60">
                                        <div class="tab-pane" id="tab1">
                                              <div class="row">
                                                <div class="col-md-12">
                                                    <p class="grid1">
                                                       <div class="container-fluid pb-0 col-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center">Perfil</h3>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="">Nombre</label>
                                                                    <input type="text" class="form-control" v-model="name" readonly>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Apellido</label>
                                                                    <input type="text" class="form-control" v-model="last_name" readonly>
                                                                </div>    
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="">NickName</label>
                                                                    <input type="text" class="form-control" v-model="nickname" readonly>
                                                                </div>   
                                                                <div class="col-md-6">
                                                                    <label for="">Whatsapp</label>
                                                                    <input type="text" class="form-control" v-model="nickname" >
                                                                </div>         
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="">Billetera</label>
                                                                    <input type="text" class="form-control" v-model="wallet" readonly>
                                                                </div>
                                                                 <div class="col-md-6">
                                                                    <label for="">Pais</label>
                                                                    <input type="text" class="form-control" v-model="country" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <label for="">Direccion</label>
                                                                    <input type="text" class="form-control" v-model="address">
                                                                </div>
                                                            </div>
                                                             <div class="row">
                                                                <div class="col-12">
                                                                    <label for="">Link de afiliado</label>
                                                                    <input type="text" class="form-control" v-model="affiliateKey" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control" v-model="email" readonly>
                                                                </div> 
                                                                 <div class="col-6">
                                                                    <label for="">Imagen</label>
                                                                    <input type="file" id="image" class="form-control" @change="onImageChange" accept="image/*">
                                                                </div>                                                  
                                                           </div>
                                                            <br><center><button class="btn btn-success" @click="accountUpdate()">Actualizar</button></center>
                                                      </div>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                              <div class="row">
                                                <div class="col-md-12">
                                                    <p class="grid2">
                                                       <div class="container-fluid pb-0 col-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center">Seguridad</h3>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="">Contraseña</label>
                                                                    <input type="text" class="form-control" v-model="name" readonly>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="">Repetir Contraseña</label>
                                                                    <input type="text" class="form-control" v-model="last_name" readonly>
                                                                </div>    
                                                            </div>

                                                            <br><center><button class="btn btn-success" @click="securityUpdate()">Actualizar</button></center>      
                                                        </div>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>


                                        </div>
                            </div>
                        </div>
                    
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
                    name:'{!! Auth::user()->name !!}',
                    nickname:'{!! Auth::user()->nickname !!}',
                    email:'{!! Auth::user()->email !!}',
                    wallet:'{!! Auth::user()->wallet !!}',
                    last_name:'{!! Auth::user()->last_name !!}',
                    country:'{!! Auth::user()->country !!}',
                    address:'{!! Auth::user()->address !!}',
                    whatsapp:'{!! Auth::user()->whatsapp !!}',
                    affiliateKey: "{{ url('/register/affiliate/') }}"+"/"+'{!! Auth::user()->affiliate_key !!}',
                    referrals:[],
                    notices:"",
                    videos:[],
                    pages:[],
                    channels:[],
                    image:"", //datos de imagen a enviar al servidor
                    imagePreview:""
                    
                }
            },
            methods:{
            accountUpdate(){ //envías al servidor a category controller store()??

                    let formData = new FormData
                    formData.append('whatsapp', this.whatsapp)
                    formData.append('address', this.address)
                    formData.append('image', this.image)

                    axios.post("{{ route('account.update') }}", formData,{ headers: { 'Content-Type': 'multipart/form-data'} })
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)

                            this.name = ""
                            this.image = ""
                            this.imagePreview = ""
                            $("#image").val(null)

                        }else{
                            alert(res.data.msg)
                        }

                    }).catch(err => {
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                securityUpdate(){ //envías al servidor a category controller store()??

                    let formData = new FormData
                    formData.append('whatsapp', this.whatsapp)
                    formData.append('address', this.address)
                    formData.append('image', this.image)

                    axios.post("{{ route('account.update') }}", formData,{ headers: { 'Content-Type': 'multipart/form-data'} })
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)

                            this.name = ""
                            this.image = ""
                            this.imagePreview = ""
                            $("#image").val(null)

                        }else{
                            alert(res.data.msg)
                        }

                    }).catch(err => {
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                onImageChange(e){ //funcion para obtener los datos del preview de imagen
                    this.image = e.target.files[0];
                    this.imagePreview = URL.createObjectURL(this.image);
                    let files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    this.createImage(files[0]);
                },
                createImage(file) {// crea imagn para enviar al servidor
                    let reader = new FileReader();
                    let vm = this;
                    reader.onload = (e) => {
                        vm.image = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                
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

                },getReferrals(){

                    axios.get("{{ url('/referrals') }}").then(res => {

                        if(res.data.success == true){
                            this.referrals = res.data.referrals
                        }else{
                            alert(res.data.msg)
                        }

                    })

                }
            },
            mounted(){
                this.fetch()
                this.fetchNotices()
                this.channelsFetch()
                this.getReferrals()
            }

        })

    </script>

@endpush