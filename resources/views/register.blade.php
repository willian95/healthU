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
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="¿Como te llamas?" v-model="name">
                    </div>
                    <div class="form-group">
                        <label>Nickname</label>
                        <input type="text" class="form-control" placeholder="¿Como te llamas?" v-model="nickname">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="john@email.com" v-model="email">
                    </div>
                    <div class="form-group" v-if="affiliate != ''">
                        <label>Código de afiliado</label>
                        <input type="text" class="form-control" v-model="affiliate" readonly>
                    </div>
                    <div class="form-group">
                        <label>Clave</label>
                        <input type="password" class="form-control" placeholder="clave" v-model="password">
                    </div>
                    <div class="form-group">
                        <label>Confirmar clave</label>
                        <input type="password" class="form-control" placeholder="Clave" v-model="password_confirmation">
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
                    nickname:"",
                    email:'',
                    password:"",
                    password_confirmation:"",
                    affiliate:'{!! $affiliate !!}'
                }
            },
            methods:{
                
                register(){
                    
                    let formData = new FormData()
                    formData.append("name", this.name)
                    formData.append("email", this.email)
                    formData.append("nickname", this.nickname)
                    formData.append("password", this.password)
                    formData.append("affiliate", this.affiliate)
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

                }

            },
            mounted(){
                //this.test()
            }

        })

    </script>


@endpush