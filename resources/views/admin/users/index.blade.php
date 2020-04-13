@extends('layouts.admin.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(user, index) in users">
                            <th>@{{ index + 1 }}</th>
                            <td>@{{ user.name }}</td>
                            <td>@{{ user.email }}</td>
                            <td>
                                <button class="btn btn-success" v-if="user.role_id == 1" @click="upgradeTrainer(user.id)">Subir a Trainer</button>
                                <button class="btn btn-warning" v-if="user.role_id == 2" @click="downgradeUser(user.id)">Bajar a Usuario</button>
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
                    users:[],
                    pages:[]
                }
            },
            methods:{
                
                fetch(page = 1){
                    axios.get("{{ url('/admin/users/fetch/') }}"+"/"+page)
                    .then(res => {
                        this.users = res.data.users
                        this.pages = Math.ceil(res.data.usersCount / 20)
                    })
                    .catch(err => {

                    })
                },
                upgradeTrainer(id){
                    axios.post("{{ url('/admin/users/upgradeTrainer') }}", {id: id})
                    .then(res => {
                        
                        if(res.data.success == true){
                            
                            this.fetch()
                            alert(res.data.msg)

                        }else{

                            alert(res.data.msg)

                        }

                    })
                    .catch(err => {

                    })
                },
                downgradeUser(id){
                    axios.post("{{ url('/admin/users/downgradeUser') }}", {id: id})
                    .then(res => {
                        
                        if(res.data.success == true){
                            
                            this.fetch()
                            alert(res.data.msg)

                        }else{

                            alert(res.data.msg)

                        }

                    })
                    .catch(err => {

                    })
                }
                

            },
            mounted(){
                this.fetch()
            }

        })

    </script>

@endpush