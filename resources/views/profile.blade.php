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
                    <div class="col-6">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" v-model="name" readonly>
                    </div>
                    <div class="col-6">
                        <label for="">Apellido</label>
                        <input type="text" class="form-control" v-model="last_name" readonly>
                    </div>    
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">NickName</label>
                        <input type="text" class="form-control" v-model="nickname" readonly>
                    </div>   
                    <div class="col-6">
                        <label for="">Whatsapp</label>
                        <input type="text" class="form-control" v-model="nickname" >
                    </div>         
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Billetera</label>
                        <input type="text" class="form-control" v-model="wallet" readonly>
                    </div>
                     <div class="col-6">
                        <label for="">Pais</label>
                        <input type="text" class="form-control" v-model="country" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="">Direccion</label>
                        <input type="text" class="form-control" v-model="address" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Email</label>
                        <input type="text" class="form-control" v-model="email" readonly>
                    </div>

                    <div class="col-6">
                        <label for="">Imagen</label>
                        <input type="file" id="image" class="form-control" @change="onImageChange" accept="image/*">
                    </div>
                </div>
        
            
            <div class="row mt-3" v-if="imagePreview != ''">
                <div class="col-12">
                    <center><img :src="imagePreview" alt="" style="width: 20%; border-radius: 80%; height:250px;"></center>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <label for="">Link de afiliado</label>
                    <input type="text" class="form-control" v-model="affiliateKey" readonly>
                </div>
            </div>

            <br><center><button class="btn btn-success" @click="accountUpdate()">Actualizar</button></center>

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
                    wallet:'{!! Auth::user()->wallet !!}',
                    last_name:'{!! Auth::user()->last_name !!}',
                    country:'{!! Auth::user()->country !!}',
                    address:'{!! Auth::user()->address !!}',
                    whatsapp:'{!! Auth::user()->whatsapp !!}',
                    affiliateKey: "{{ url('/register/affiliate/') }}"+"/"+'{!! Auth::user()->affiliate_key !!}',
                    referrals:[],
                    image:"", //datos de imagen a enviar al servidor
                    imagePreview:""
                }
            },
            methods:{
                accountUpdate(){ //envías al servidor a category controller store()??

                    let formData = new FormData
                    formData.append('image', this.image)
                    formData.append('whatsapp', this.whatsapp)
                    formData.append('address', this.address)

                    axios.post("{{ route('account.update') }}", formData,{ headers: { 'Content-Type': 'multipart/form-data'} })
                    .then(res => {

                        if(res.data.success == true){
                            alert(res.data.msg)

                            this.name = ""
                            this.image = ""
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
            onImageChange(e){ //funcion para obtener los datos del preview de imagen
                    this.image = e.target.files[0];
                    this.imagePreview = URL.createObjectURL(this.image);
                    let files = e.target.files || e.dataTransfer.files;
                    if (!files.length)
                        return;
                    this.createImage(files[0]);
                },
                createImage(file) {// crea imagn para enviar al servidor
                    let reader = new FileReader();
                    let vm = this;
                    reader.onload = (e) => {
                        vm.image = e.target.result;
                    };
                    reader.readAsDataURL(file);
                },
                
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

