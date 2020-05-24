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
                    <div class="col-12">

                    </div>     
                </div>
                <div class="row">
                    
                    <div class="col-md-6">
                        <h3 class="text-center">Depositar</h3>

                        <label for="amount">Cantidad</label>
                        <input type="text" class="form-control" id="amount" v-model="amountDeposit">

                        <label for="transaction">Hash transacción</label>
                        <input type="text" class="form-control" id="transaction" v-model="hash">
                        
                        <small>Las transacciones deberán ser realizadas desde la billetera registrada por el usuario</small>

                        <p class="text-center">
                            <button class="btn btn-success" @click="store()">enviar</button>
                        </p>

                    </div>
                    <div class="col-md-6">

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
                    balances:[],
                    amountDeposit:0,
                    hash:""
                }
            },
            methods:{
                fetchBalance(){

                    axios.get("{{ url('/balance/fetch/') }}")
                    .then(res => {
                        this.balances = res.data.balances
                     })
                    .catch(err => {
                          alert(res.data.msg)
                    })

                },
                store(){

                    axios.post("{{ url('/balance/store') }}", {amount: this.amountDeposit, hash: this.hash})
                    .then(res => {

                        if(res.data.success == true){
                            
                            alert(res.data.msg)
                            this.amountDeposit = ""
                            this.hash = ""

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
                this.fetchBalance()
               }

        })

    </script>

@endpush