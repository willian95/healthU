@extends('layouts.user.user')

@section('content')

<section class="login-main-wrapper">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="col-md-5 bg-white full-height">
                <div class="login-main-left">
                    <div class="text-center mb-5 login-main-left-header pt-4">
                    <img src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/favicon.png" class="img-fluid" alt="LOGO">
                    <!--<h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
                    <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>-->
                    </div>
                    <!--<form action="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/index.html">-->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="¿Como te llamas?" v-model="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Apellido</label>
                            <input type="text" class="form-control" placeholder="¿Cual es tu Apellido?" v-model="last_name">
                        </div>
                    </div>
                     <div class="row">
                        <div class="form-group col-md-6">
                            <label>Nickname</label>
                            <input type="text" class="form-control" placeholder="¿Como te llamas?" v-model="nickname">
                        </div>
                        <div class="form-group  col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="john@email.com" v-model="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Whatsapp</label>
                        <input type="number" class="form-control" placeholder="+cod123456789" v-model="whatsapp">
                    </div>
                    <div class="form-group">
                         <label>Pais</label>
                         <select id="countrys" class="custom-select" v-model="countryId">
                                <option :value="country.id" v-for="country in countrys">@{{ country.name }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <label>Direccion</label>
                         <input type="text" class="form-control" placeholder="calle x avenida y" v-model="address">
                    </div>
                     <div class="form-group">
                        <label>Billetera</label>
                        <input type="text" class="form-control" placeholder="Codigo de tu wallet" v-model="wallet">
                    </div>
                    <div class="form-group" v-if="affiliate != ''">
                        <label>Código de afiliado</label>
                        <input type="text" class="form-control" v-model="affiliate" readonly>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Clave</label>
                            <input type="password" class="form-control" placeholder="clave" v-model="password">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Confirmar clave</label>
                            <input type="password" class="form-control" placeholder="Clave" v-model="password_confirmation">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="button" class="btn btn-outline-primary btn-block btn-lg" @click="register()">Sign Up</button>
                    </div>
                    <!--</form>-->
                    <div class="text-center mt-5">
                    <p class="light-gray">Already have an Account? <a href="{{ url('/login') }}">Sign In</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="login-main-right bg-white p-5 mt-5 mb-5">
                    <div class="owl-carousel owl-carousel-login">
                    <div class="item">
                        <div class="carousel-login-card text-center">
                            <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                            <h5 class="mt-5 mb-3">​Watch videos offline</h5>
                            <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-login-card text-center">
                            <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                            <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                            <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-login-card text-center">
                            <img src="{{ asset('/assets/img/login.png') }}" class="img-fluid" alt="LOGO">
                            <h5 class="mt-5 mb-3">Create GIFs</h5>
                            <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    
    <script>
            
        const app = new Vue({
            el: '#dev-app',
            data(){
                return{
                    name:"",
                    last_name:"",
                    nickname:"",
                    email:'',
                    wallet:'',
                    whatsapp:'',
                    address:'',
                    affiliate:'{!! $affiliate !!}',
                    password:"",
                    password_confirmation:"",
                    countryId:"",
                    countrys:[]
                }
            },
            methods:{
                
                register(){
                    
                    let formData = new FormData()
                    formData.append("name", this.name)
                    formData.append("email", this.email)
                    formData.append("wallet", this.wallet)
                    formData.append("whatsapp", this.whatsapp)
                    formData.append("address", this.address)
                    formData.append("last_name", this.last_name)
                    formData.append("nickname", this.nickname)
                    formData.append("affiliate", this.affiliate)
                    formData.append("country", this.countryId)
                    formData.append("password", this.password)
                    formData.append("password_confirmation", this.password_confirmation)

                    axios.post("{{ url('/register') }}", formData)
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)
                            window.location.href="{{ url('/') }}"
                        }else{

                            alert(res.data.msg)

                        }

                    })
                    .catch(err => {
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                fetchCountrys(){

                  axios.get("{{ url('/countrys/country/fetch') }}").then(res => {
                     this.countrys = res.data 
                  })

               }

            },
            mounted(){
                //this.test()
                this.fetchCountrys()
            }

        })




    
    </script>


@endpush