@extends('layouts.user.user')

@section('content')

    @include('partials.user.navbar')

    <div id="wrapper">

        @include('partials.user.sidebar')
        <div id="content-wrapper">

            <div class="container-fluid pb-0">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Crear canal</h3>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <label for="">Titulo</label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Categoría</label>
                        <select class="form-control" v-model="categoryId">
                            <option :value="category.id" v-for="category in categories">@{{ category.name }}</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <label for="">Imagen</label>
                        <input type="file" id="image" class="form-control" @change="onImageChange" accept="image/*">
                    </div>
                </div>

                <div class="row" v-if="imagePreview != ''">
                    <div class="col-12">
                        <img :src="imagePreview" alt="" style="width: 30%;">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="text-center">
                            <button class="btn btn-success" @click="store()">Crear</button>
                        </p>
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
                    name:"",
                    categoryId:"",
                    image:"",
                    imagePreview:"",
                    categories:[]
                }
            },
            methods:{
                
                store(){

                    let formData = new FormData
                    formData.append('name', this.name)
                    formData.append('categoryId', this.categoryId)
                    formData.append('image', this.image)

                    axios.post("{{ route('channel.store') }}", formData,{ headers: { 'Content-Type': 'multipart/form-data'} })
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)

                            this.name = ""
                            this.image = ""
                            this.categoryId = ""
                            this.imagePreview = ""
                            $("#image").val(null)

                        }else{
                            alert(res.data.msg)
                        }

                    }).catch(err => {
                        $.each(err.response.data.errors, function(key, value){
                            alert(value)
                        });
                    })

                },
                onImageChange(e){
                    this.image = e.target.files[0];
                    this.imagePreview = URL.createObjectURL(this.image);
                    let files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    this.createImage(files[0]);
                },
                createImage(file) {
                    let reader = new FileReader();
                    let vm = this;
                    reader.onload = (e) => {
                        vm.image = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                categoriesFetch(){

                    axios.get("{{ url('/categories/fetch') }}").then(res => {
                        this.categories = res.data
                    })

                }

            },
            mounted(){
                this.categoriesFetch()
            }

        })

    </script>

@endpush