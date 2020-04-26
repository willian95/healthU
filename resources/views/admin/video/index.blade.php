@extends('layouts.admin.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titulo</th>
                            <th>Link</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(video, index) in videos">
                            <th>@{{ index + 1 }}</th>
                            <td>@{{ video.title }}</td>
                            <td><a target="_blank" :href="video.link">ver</a></td>
                            <td>@{{ video.user.nickname }}</td>
                            <td>
                                <div v-if="video.status_id == 1">
                                    <button class="btn btn-success" @click="approve(video.id)">Aprobar</button>
                                    <button class="btn btn-danger" @click="reject(video.id)">Rechazar</button>
                                </div>
                                <span v-if="video.status_id == 3">Video aprobado</span>
                                <span v-if="video.status_id == 2">Video rechazado</span>
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
                    videos:[],
                    pages:[]
                }
            },
            methods:{
                
                fetch(page = 1){
                    axios.get("{{ url('/admin/videos/fetch') }}"+"/"+page)
                    .then(res => {
                        this.videos = res.data.videos
                        this.pages = Math.ceil(res.data.videosCount / 20)
                    })
                    .catch(err => {

                    })
                },
                approve(id){
                    axios.post("{{ url('/admin/videos/approve') }}", {id: id})
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
                reject(id){
                    axios.post("{{ url('/admin/videos/reject') }}", {id: id})
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