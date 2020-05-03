@extends('layouts.user.user')

@section('content')

@include('partials.user.navbar')

<div id="wrapper">
   <!-- Sidebar -->
   @include('partials.user.sidebar')
      
   <div id="content-wrapper">
        <div class="container-fluid pb-0">

            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Perfil</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" v-model="name">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">NickName</label>
                    <input type="text" class="form-control" v-model="nickname" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Email</label>
                    <input type="text" class="form-control" v-model="email" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="">Link de afiliado</label>
                    <input type="text" class="form-control" v-model="affiliateKey" readonly>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="">Referidos</label>
                </div>
            </div>

            <div class="row" v-for="referral in referrals">
                <div class="col-12">
                    <p>@{{ referral.name }}</p>
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
                    affiliateKey: "{{ url('/register/affiliate/') }}"+"/"+'{!! Auth::user()->affiliate_key !!}',
                    referrals:[]
                }
            },
            methods:{
                
                getReferrals(){

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
                
                this.getReferrals()

            }

        })

    </script>

@endpush