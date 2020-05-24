@extends('layouts.admin.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Depositos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Email</th>
                            <th>Wallet</th>
                            <th>Transacción</th>
                            <th>Cantidad</th>
                            <th>Status</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(deposit, index) in deposits">
                            <th>@{{ index + 1 }}</th>
                            <td>@{{ deposit.user.email }}</td>
                            <td>@{{ deposit.user.wallet }}</td>
                            <td>@{{ deposit.hash }}</td>
                            <td>@{{ deposit.monto }}</td>
                            <td> <span v-if="deposit.status == 0">En proceso</span> <span v-if="deposit.status == 1">Aceptado</span> <span v-if="deposit.status == 2">Rechazado</span> </td>
                            <td>                           
                                <button v-if="deposit.status == 0" class="btn btn-success" @click="approve(deposit.id)">Aprobar</button>
                                <button v-if="deposit.status == 0" class="btn btn-danger" @click="reject(deposit.id)">Rechazar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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

@endsection

@push('scripts')

    <script>
            
        const app = new Vue({
            el: '#dev-app',
            data(){
                return{
                    deposits:[],
                    pages:[]
                }
            },
            methods:{
                
                fetch(){
                    axios.get("{{ route('admin.deposit.fetch') }}")
                    .then(res => {
      
                        if(res.data.success == true){

                            this.deposits = res.data.depositos

                        }else{
                            alert(res.data.msg)
                        }
                    })
                    .catch(err => {

                    })
                },
                approve(id){

                    axios.post("{{ route('admin.deposit.approve') }}", {id: id})
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)
                            this.fetch()
                        }else{
                            alert(res.data.msg)
                        }

                    })

                },
                reject(id){

                    axios.post("{{ route('admin.deposit.reject') }}", {id: id})
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)
                            this.fetch()
                        }else{
                            alert(res.data.msg)
                        }

                    })

                }
                

            },
            mounted(){
                this.fetch()
            }

        })

    </script>

@endpush