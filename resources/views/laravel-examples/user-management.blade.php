@extends('layouts.user_type.auth')

@section('content')

@if(session('success1'))
<div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
    <span class="alert-text text-white">
    {{ session('success1') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </button>
</div>
@endif

<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            <strong>Soft Ui</strong>
            <strong>User list</strong> 
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <a href="{{route('add-user')}}" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; New User</a>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Join Date
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    

                                @foreach ($data as $id=>$user )
                                 
                                <tr>

                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{$user->id}}</p>
                                    </td>
                                    @php
                                        $name=$user->first_name.' '.$user->last_name;
                                        $imageData = $user->image_blob;
                                        $imageType = $user->image_type;
                                        $base64Image = 'data:' . $imageType . ';base64,' . base64_encode($imageData);
                                    @endphp
                                    <td>
                                        <div>
                                            <img src="{{$base64Image}}" class="avatar me-3" style="object-fit: cover">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$name}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$user->email}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$user->position->position}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$user->created_at}}</span>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{route('user-edit')}}" method="get">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <!-- Other input fields -->
                                            <button type="submit" style="background: inherit; border:none;" data-bs-toggle="tooltip" data-bs-original-title="Edit user"><i class="fas fa-user-edit text-secondary"></i></button>
                                        
                                        
                                        
                                            <a href="{{route('delete_user',$user->id)}}" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </a>
                                        </form>
                                     
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection