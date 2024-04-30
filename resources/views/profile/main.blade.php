<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Profile Picture') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">

        <form action="/user-edit-img" method="post" enctype="multipart/form-data" role="form text-left">
            @csrf

           

            @php
            $imageData = $data->image_blob;
            $imageType = $data->image_type;
            $base64Image = 'data:' . $imageType . ';base64,' . base64_encode($imageData);
            @endphp
            <div class="column">
                <div class="col-md-3">
                    <img class="rounded" src="{{$base64Image}}" id="preview" style="width: 100%; height:auto;" >
                </div>
                <div class="col-md-3">
                    <input type="text" name="id" value="{{$data->id}}" hidden>
                    <input type="file" onchange="previewImage(event)" name="image"  class="form-control">
                
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-2">{{ 'Save Changes' }}</button>
                </div>
            </div>

        </form>

    </div>
    <hr class="card_hr">
    
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('User Information') }}</h6>
    </div>
    <div class="card-body pt-4 p-3">
        <form action="/user-edit-pro" method="post" role="form text-left">
            @csrf
           

            <input type="text" name="id" value="{{$data->id}}" hidden>
            
           
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-name" class="form-control-label">{{ __('First Name') }}<span class="small text-danger">*</span></label>
                        <div class="@error('first_name')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{$data->first_name}}" type="text" placeholder="First Name" id="user-name" name="first_name">
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
                            <input class="form-control" type="text" placeholder="Last Name" id="user-name" name="last_name" value="{{$data->last_name}}">
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
                            <input class="form-control" value="{{$data->email}}" type="email" placeholder="@example.com" id="user-email" name="email">
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
                            <input class="form-control" type="tel" placeholder="98XXXXXXXX" id="number" name="phone" value="{{$data->phone1}}">
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
                            <input class="form-control" type="tel" placeholder="98XXXXXXXX" id="number" name="phone2" value="{{$data->phone2}}">
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
                                <option value="1"  {{ $data->blood_group_id === 1 ? 'selected' : '' }}>A+</option>
                                <option value="5"  {{ $data->blood_group_id === 5 ? 'selected' : '' }}>A-</option>
                                <option value="2"  {{ $data->blood_group_id === 2 ? 'selected' : '' }}>B+</option>
                                <option value="6"  {{ $data->blood_group_id === 6 ? 'selected' : '' }}>B-</option>
                                <option value="3"  {{ $data->blood_group_id === 3 ? 'selected' : '' }}>AB+</option>
                                <option value="7"  {{ $data->blood_group_id === 7 ? 'selected' : '' }}>AB-</option>
                                <option value="4"  {{ $data->blood_group_id === 4 ? 'selected' : '' }}>O+</option>
                                <option value="8"  {{ $data->blood_group_id === 8 ? 'selected' : '' }}>O-</option>
                            </select>
                        </div>
                                @error('blood_group')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="date_of_birth" class="form-control-label">{{ __('Date Of Birth') }}</label>
                        <div class="@error('date_of_birth')border border-danger rounded-3 @enderror">
                        
                            <input class="form-control" type="date" placeholder="DOB" id="date_of_birth" name="date_of_birth" value="{{$data->date_of_birth}}">
                        </div>
                            @error('date_of_birth')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>

                
                
            </div>

            

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>


    



            
        </form>
    </div>
    

    
       
</div>