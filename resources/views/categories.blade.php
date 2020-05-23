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
                              <div class="col-md-12">
                                 <div class="main-title">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Ordenar por <i class="fa fa-caret-down" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                       </div>
                                    </div>
                                    <h3>Categorias</h3>
                                 </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3" v-for="category in categories">
                                 <div class="channels-card">
                                    <div class="channels-card-image">
                                       <a href="#"><img class="img-fluid" src="{{ asset('assets/img/s1.png') }}" alt=""></a>
                                       <div class="channels-card-image-btn"><button type="button" class="btn btn-outline-danger btn-sm"><strong>@{{category.name}} </strong></button></div>
                                    </div>
                                    <div class="channels-card-body">
                                       <div class="channels-title">
                                          <a href="#"></a>
                                       </div>
                                       <div class="channels-view">
                                         500 Trainers
                                       </div>
                                    </div>
                                 </div>
                              </div>
                             
            
                          </div>
                           <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-center pagination-sm mb-4">
                                 <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                 </li>
                                 <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item"><a class="page-link" href="#">2</a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                 </li>
                              </ul>
                           </nav>
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
                    categories:[],
                    
                }
            },
            methods:{
                fetchCategories(){

                    axios.get("{{ url('/categories/fetch/') }}")
                    .then(res => {
                        this.categories = res.data.categories
                    })
                    .catch(err => {
                          alert(res.data.msg)
                    })

                }
                
            },
            mounted(){
                this.fetchCategories()
               }

        })

    </script>

@endpush