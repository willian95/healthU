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
                    <h3 class="text-center">{{ $notice->title }}</h3>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="text-justify">
                        {{ $notice->body }}
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection