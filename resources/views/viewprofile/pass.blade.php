<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Change Password') }}</h6>
    </div>
    <div class="card-body pt-4 p-3">
        <form action="/user-profile-pass" method="post" role="form text-left">
            @csrf
        
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="user.password" class="form-control-label">{{ __('Current Password') }}<span class="small text-danger">*</span></label>
                    <div class="@error('password')border border-danger rounded-3 @enderror">
                    
                        <input class="form-control" type="password" placeholder="Password" id="password" name="password" value="">
                    </div>
                        @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="New password" class="form-control-label">{{ __('New Password') }}<span class="small text-danger">*</span></label>
                    <div class="@error('new_password')border border-danger rounded-3 @enderror">
                    
                        <input class="form-control" type="password" placeholder="New Password" id="new_password" name="new_password" value="">
                    </div>
                        @error('new_password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="Confirm password" class="form-control-label">{{ __('Confirm Password') }}<span class="small text-danger">*</span></label>
                    <div class="@error('confirm_password')border border-danger rounded-3 @enderror">
                    
                        <input class="form-control" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" value="">
                    </div>
                        @error('confirm_password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                    
                </div>
            </div>

        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Change Password' }}</button>
        </div>


        </form>
    </div>
</div>