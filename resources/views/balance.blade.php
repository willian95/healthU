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
                              <div class="col-xl-12 col-sm-12 mb-3" v-for="balance in balances">
                                 <div class="channels-card">
                                    <div class="channels-card-image">
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/b1.png') }}" alt=""></a>
                                       <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm"><h3><strong>@{{balance.balance_total}} HU</strong></h3></button></div>
                                    </div>
                                    <div class="channels-card-body">
                                       <div class="channels-title">
                                          <a href="#"></a>
                                       </div>
                                       <h2 class="channels-view">
                                         Balance Total
                                       </h2>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-xl-4 col-sm-4 mb-3" v-for="balance in balances">
                                 <div class="channels-card">
                                    <div class="channels-card-image">
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/b3.png') }}" alt=""></a>
                                       <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm"><h4><strong>@{{balance.balance_de_retiros}} HU</strong></h4></button></div>
                                    </div>
                                    <div class="channels-card-body">
                                       <div class="channels-title">
                                          <a href="#"></a>
                                       </div>
                                       <h3 class="channels-view">
                                         Balance De Retiros
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                                <div class="col-xl-4 col-sm-4 mb-3" v-for="balance in balances">
                                 <div class="channels-card">
                                    <div class="channels-card-image">
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/b2.png') }}" alt=""></a>
                                       <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm"><h4><strong>@{{balance.balance_de_depositos}} HU</strong></h4></button></div>
                                    </div>
                                    <div class="channels-card-body">
                                       <div class="channels-title">
                                          <a href="#"></a>
                                       </div>
                                       <h3 class="channels-view">
                                         Balance De Depositos
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                               <div class="col-xl-4 col-sm-4 mb-3" v-for="balance in balances">
                                 <div class="channels-card">
                                    <div class="channels-card-image">
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/b4.png') }}" alt=""></a>
                                       <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm"><h4><strong>@{{balance.balance_de_referidos}} HU</strong></h4></button></div>
                                    </div>
                                    <div class="channels-card-body">
                                       <div class="channels-title">
                                          <a href="#"></a>
                                       </div>
                                       <h3 class="channels-view">
                                         Balance De Referidos
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                             
            
                          </div>
                        </div>
                        <hr>
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

                }
                
            },
            mounted(){
                this.fetchBalance()
               }

        })

    </script>

@endpush