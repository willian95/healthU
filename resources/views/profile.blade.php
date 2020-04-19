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
                    email:'{!! Auth::user()->email !!}'
                }
            },
            methods:{
                
                
            },
            mounted(){
                
            }

        })

    </script>

@endpush