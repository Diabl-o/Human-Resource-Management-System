@extends('layouts.user_type.auth')

@section('content')


<div class="alert alert-secondary mx-4" role="alert">
    <span class="text-white">
        <strong>Add New</strong>
        <strong>Employee</strong> 
    </span>
</div>

<div class="container-fluid py-4">

    

    <div class="card">
        

        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('User Information') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <form action="/add-user-add" method="post" role="form text-left">
                @csrf
               

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

               
                
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">{{ __('First Name') }}<span class="small text-danger">*</span></label>
                            <div class="@error('first_name')border border-danger rounded-3 @enderror">
                                <input class="form-control" value="" type="text" placeholder="First Name" id="user-name" name="first_name">
                            </div>
                                @error('first_name')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="user.last_name" class="form-control-label">{{ __('Last Name') }}<span class="small text-danger">*</span></label>
                            <div class="@error('last_name') border border-danger rounded-3 @enderror">
                                <input class="form-control" type="text" placeholder="Last Name" id="user-name" name="last_name" value="">
                            </div>
                                @error('last_name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            
                        </div>
                    </div>

                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="user-email" class="form-control-label">{{ __('Email') }}<span class="small text-danger">*</span></label>
                        <div class="@error('email')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="" type="email" placeholder="@example.com" id="user-email" name="email">
                        </div>
                            @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="user.phone" class="form-control-label">{{ __('Phone Number') }}<span class="small text-danger">*</span></label>
                            <div class="@error('phone')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="tel" placeholder="98XXXXXXXX" id="number" name="phone" value="">
                            </div>
                                
                                @error('phone')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user.phone2" class="form-control-label">{{ __('Secondary Phone Number') }}</label>
                            <div class="@error('phone2')border border-danger rounded-3 @enderror">
                                <input class="form-control" type="tel" placeholder="98XXXXXXXX" id="number" name="phone2" value="">
                            </div>
                                @error('phone2')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            
                        </div>
                    </div>
                    
                    
                </div>

                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="user-blood-group" class="form-control-label">{{ __('Blood Group') }}</label>
                            <div class="@error('blood-group')border border-danger rounded-3 @enderror">
                                <select class="form-control" id="user-blood-group" name="blood_group">
                                    <option selected disabled>Select Blood Group</option>
                                    <option value="1">A+</option>
                                    <option value="5">A-</option>
                                    <option value="2">B+</option>
                                    <option value="6">B-</option>
                                    <option value="3">AB+</option>
                                    <option value="7">AB-</option>
                                    <option value="4">O+</option>
                                    <option value="8">O-</option>
                                </select>
                            </div>
                                    @error('blood_group')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="user.password" class="form-control-label">{{ __('Password') }}<span class="small text-danger">*</span></label>
                            <div class="@error('password')border border-danger rounded-3 @enderror">
                            
                                <input class="form-control" type="password" placeholder="Password" id="password" name="password" value="">
                            </div>
                                @error('password')
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                            
                        </div>
                    </div>
                    
                </div>
        </div>

       


           
                       
                    
                        
                        
                   



                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Add User' }}</button>
                </div>
            </form>
           
        </div>
    </div>
</div>


@endsection