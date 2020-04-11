@extends('layouts.user.user')

@section('content')

    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-5 p-5 bg-white full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                        <img src="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/img/favicon.png" class="img-fluid" alt="LOGO">
                        <h5 class="mt-3 mb-3">Welcome to Vidoe</h5>
                        <p>It is a long established fact that a reader <br> will be distracted by the readable.</p>
                        </div>
                        <form action="https://askbootstrap.com/preview/vidoe-v2-1/theme-three/index.html">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo" v-model="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" v-model="password">
                        </div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <button type="button" class="btn btn-outline-primary btn-block btn-lg" @click="login()">Sign In</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="text-center mt-5">
                        <p class="light-gray">Don’t have an account? <a href="{{ url('/register') }}">Sign Up</a></p>
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
                    email:'',
                    password:""
                }
            },
            methods:{
                
                login(){
                    
                    let formData = new FormData()
                    formData.append("email", this.email)
                    formData.append("password", this.password)

                    axios.post("{{ url('/login') }}", formData)
                    .then(res => {

                        console.log(res)

                        if(res.data.success == true){
                            
                            if(res.data.role_id == 1)
                                window.location.href="{{ url('/') }}"
                            if(res.data.role_id == 2)
                                window.location.href="{{ url('/admin/dashboard') }}"
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