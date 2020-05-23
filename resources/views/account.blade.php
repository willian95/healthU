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
                                                                <div class="col-md-12">
                                                                    <label for="">Contraseña Actual</label>
                                                                    <input type="text" class="form-control" v-model="pass_actual" >
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="">Contraseña</label>
                                                                    <input type="text" class="form-control" v-model="pass_new" >
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="">Repetir Contraseña</label>
                                                                    <input type="text" class="form-control" v-model="confirmPassNew" >
                                                                </div>    
                                                            </div>

                                                            <br><center><button class="btn btn-success" @click="securityUpdate()">Actualizar</button></center>      
                                                        </div>
                                                  </p>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                              <div class="row">
                                                <div class="col-md-12">
                                                    <p class="grid3">
                                                       <div class="container-fluid pb-0 col-12">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="text-center">Resumen</h3>
                                                                </div>
                                                                <table style="width:100%">  
                                                                <h4>Referidos</h4>                                                     
                                                              <tr>
                                                                <th>Id</th>
                                                                <th>Email</th>
                                                                <th>Fecha de activacion</th>
                                                              </tr>
                                                              <tr v-for="referido in referrals" >
                                                               <td>@{{referido.id}}</td>
                                                                  <td>@{{referido.user.email}}</td>
                                                                <td>@{{referido.id}}</td>
                                                              </tr>
                                                            </table>
                                                         
                                                            <table style="width:100%;" >  
                                                                 <br>
                                                                <h4 style="margin-top: 5px;">Balances</h4>                                                     
                                                              <tr>
                                                                <th>Balance de retiro</th>
                                                                <th>Balance de deposito</th>
                                                                <th>balance total</th>
                                                              </tr>
                                                              <tr  >
                                                               <td>100000</td>
                                                                  <td>74444</td>
                                                                <td>87658494</td>
                                                              </tr>
                                                            </table>
                                                            </div>

                                                                <section id="faqs" class="section lb" style="padding-top: 4%; margin-bottom: 400px;">

           <center> <h1 class="title-b">Preguntas Frecuentes</h1></center><br>
  
        
            <div class="container align-items-center">
                <div class="col-lg-8 col-md-8">
                    <div class="accordion" id="accordionExample">
                      <div class="card">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                ¿Que es Healthu?
                            </a>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                            Healthu es la plataforma interactiva para el cuidado de la salud a traves de entrenamientos
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 ¿Por que Healthu?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            Healthu surge  de 
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <a href="" class="btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             ¿Como puedo usar mis Healthu?
                            </a>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                        otra cosa
                          </div>
                        </div>

                      </div>
                        <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <a href="" class="btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                            ¿Mis Healthu que valor tienen?
                            </a>
                          </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                          <div class="card-body">
                            El valor del Healthu varia segun el mercado, actualmente 1 Healthu equiale a un 1$ .
                          </div>
                        </div>
                      </div>
                    </div>                  
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="faq-right">
                        <img src="images/ask22.png" class="img-fluid" alt="" />
                    </div>
                </div>
            </div>
    
    
    </section>

                                                               
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
                    imagePreview:"",
                     pass_new:"", //datos de imagen a enviar al servidor
                    pass_actual:"",
                    confirmPassNew:""
                    
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
                data(){
                return{
                   

                    
                }
            },
                securityUpdate(){ //envías al servidor a category controller store()??

                    let formData = new FormData
                    formData.append('pass_new', this.pass_new)
                    formData.append('pass_actual', this.pass_actual)
                    formData.append('confirmPassNew', this.confirmPassNew
                        )

                    axios.post("{{ route('account.passUpdate') }}", formData,{ headers: { 'Content-Type': 'multipart/form-data'} })
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)

                            this.pass_new = ""
                            this.pass_actual = ""
                            this.confirmPassNew = ""

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