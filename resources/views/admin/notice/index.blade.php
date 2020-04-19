@extends('layouts.admin.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Noticias</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-center">
                    <a href="{{ route('admin.notice.create') }}" class="btn btn-success">crear</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(notice, index) in notices">
                            <th>@{{ index + 1 }}</th>
                            <td>@{{ notice.title }}</td>
                            <td>                           
                                <button class="btn btn-danger" @click="erase(notice.id)">Eliminar</button>
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
                    notices:[],
                    pages:[]
                }
            },
            methods:{
                
                fetch(page = 1){
                    axios.get("{{ url('/admin/notice/fetch') }}"+"/"+page)
                    .then(res => {
      
                        this.notices = res.data.notices
                        this.pages = Math.ceil(res.data.noticesCount / 20)
                    })
                    .catch(err => {

                    })
                },
                erase(id){
                    if(confirm("¿Desea eliminar esta noticia?")){

                        axios.post("{{ route('admin.notice.delete') }}", {id: id})
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
                }
                

            },
            mounted(){
                this.fetch()
            }

        })

    </script>

@endpush