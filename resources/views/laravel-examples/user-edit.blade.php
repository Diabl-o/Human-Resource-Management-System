@extends('layouts.user_type.auth')


@section('data1')

{{$name='-'.$data->first_name}}

@endsection

@section('content')


    
    @if($errors->any())
    <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
        <span class="alert-text text-white">
        {{$errors->first()}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
    </div>
    @endif

    @if(session('success'))
    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
        <span class="alert-text text-white">
        {{ session('success') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
    </div>
    @endif
    @if(session('danger'))
    <div class="m-3  alert alert-danger alert-dismissible fade show" id="alert-success" role="alert">
        <span class="alert-text text-white">
        {{ session('danger') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>
    </div>
    @endif


<div class="container-fluid py-4">



    <ul class="nav nav-tabs" id="myTabs">
        <li class="nav-item">
            <a class="nav-link active" id="tab1" data-toggle="tab" href="#form1">Profile Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab2" data-toggle="tab" href="#form2">Additional Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab3" data-toggle="tab" href="#form3">Bank Information</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tab4" data-toggle="tab" href="#form4">Official Information</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="tab5" data-toggle="tab" href="#form5">Change Password</a>
        </li>
        
        
    </ul>


    <div class="tab-content">
        <div class="tab-pane fade show active" id="form1">
            @include('profile.main')
            
           
        </div>
        <div class="tab-pane fade" id="form2">
            @include('profile.additional')
            
        </div>

        <div class="tab-pane fade" id="form3">
            @include('profile.bank')
        </div>

        <div class="tab-pane fade" id="form4">
            @include('profile.office')
        </div>

        <div class="tab-pane fade" id="form5">
            @include('profile.pass')
        </div>


            <!-- Add more form partials as needed -->
    </div>
            
        
    
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    // Add JavaScript logic to switch between tabs
    $('#myTabs a').on('click', function (e) {
    e.preventDefault();
    $(this).tab('show');
});
</script>

@endsection