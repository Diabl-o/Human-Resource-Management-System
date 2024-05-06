<div class="card card-no-top-rounded">
    <form action="/user-edit-temp" method="post" role="form text-left">
        @csrf
        <input type="text" name="id" value="{{$data->id}}" hidden>
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Current Address') }}</h6>
        </div>

        <div class="card-body pt-4 p-3">

            

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user.district" class="form-control-label">{{ __('District') }}<span class="small text-danger">*</span></label>
                        <div class="@error('user.district')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="District" id="district" name="district" value="{{optional($data->temporaryAddress)->district}}">
                        </div>
                            @error('district')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-city" class="form-control-label">{{ __('VDC/Municipality') }}<span class="small text-danger">*</span></label>
                        <div class="@error('city')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{optional($data->temporaryAddress)->city}}" type="text" placeholder="City" id="user-city" name="city">
                        </div>
                            @error('city')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="user.tole" class="form-control-label">{{ __('Street Address') }}<span class="small text-danger">*</span></label>
                        <div class="@error('tole')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Tole" id="tole" name="tole" value="{{optional($data->temporaryAddress)->tole}}">
                        </div>
                            @error('tole')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                       
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.tole" class="form-control-label">{{ __('Ward No') }}<span class="small text-danger">*</span></label>
                        <div class="@error('ward_no')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Ward No" id="ward_no" name="ward_no" value="{{optional($data->temporaryAddress)->ward_no}}">
                        </div>
                            @error('ward_no')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zipcode" class="form-control-label">{{ __('Zip Code') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zipcode')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zip Code" id="zipcode" name="zipcode" value="{{optional($data->temporaryAddress)->zipcode}}">
                        </div>
                            @error('zipcode')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zone" class="form-control-label">{{ __('Zone') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zone')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zone" id="zone" name="zone" value="{{optional($data->temporaryAddress)->zone}}">
                        </div>
                            @error('zone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>

            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>
        </div>
    </form>

        
    <hr class="card_hr">
    <form action="/user-edit-per" method="post" role="form text-left">
        @csrf
        <input type="text" name="id" value="{{$data->id}}" hidden>
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Permanent Address') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user.district" class="form-control-label">{{ __('District') }}<span class="small text-danger">*</span></label>
                        <div class="@error('user.district')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="District" id="permanent_district" name="district" value="{{optional($data->permanentAddress)->district}}">
                        </div>
                            
                            @error('district')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-city" class="form-control-label">{{ __('VDC/Municipality') }}<span class="small text-danger">*</span></label>
                        <div class="@error('city')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{optional($data->permanentAddress)->city}}" type="text" placeholder="City" id="permanent_city" name="city">
                        </div>
                            @error('city')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="user.tole" class="form-control-label">{{ __('Street Address') }}<span class="small text-danger">*</span></label>
                        <div class="@error('tole')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Tole" id="permanent_tole" name="tole" value="{{optional($data->permanentAddress)->tole}}">
                        </div>
                            @error('tole')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.ward_no" class="form-control-label">{{ __('Ward No') }}<span class="small text-danger">*</span></label>
                        <div class="@error('ward_no')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Ward No" id="permanent_ward_no" name="ward_no" value="{{optional($data->permanentAddress)->ward_no}}">
                        </div>
                            @error('ward_no')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zipcode" class="form-control-label">{{ __('Zip Code') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zipcode')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zip Code" id="permanent_zipcode" name="zipcode" value="{{optional($data->permanentAddress)->zipcode}}">
                        </div>
                            @error('zipcode')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zone" class="form-control-label">{{ __('Zone') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zone')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zone" id="permanent_zone" name="zone" value="{{optional($data->permanentAddress)->zone}}">
                        </div>
                        @error('zone')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                       
                    </div>
                </div>
            </div>

            <div class="form-check pl-5">
                <input class="form-check-input" type="checkbox" value="" id="copyAddressCheckbox">
                <label class="form-check-label" for="flexCheckDefault">
                  Same as temporary address
                </label>
            </div>
        
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>
        </div>

    </form>

    <hr class="card_hr">
    <form action="/user-edit-em" method="post" role="form text-left">
        @csrf
        <input type="text" name="id" value="{{$data->id}}" hidden>
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Emergency Contact') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Name" class="form-control-label">{{ __('Name') }}<span class="small text-danger">*</span></label>
                        <div class="@error('e_name')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Full Name" id="e_name" name="e_name" value="{{optional($data->emergencyContact)->name}}">
                        </div>
                            @error('e_name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Phone" class="form-control-label">{{ __('Phone') }}<span class="small text-danger">*</span></label>
                        <div class="@error('e_phone')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="tel" placeholder="Phone Number" id="e_phone" name="e_phone" value="{{optional($data->emergencyContact)->phone}}">
                        </div>
                            @error('e_phone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Relation" class="form-control-label">{{ __('Relation') }}<span class="small text-danger">*</span></label>
                        <div class="@error('relation')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Relation" id="relation" name="relation" value="{{optional($data->emergencyContact)->relation}}">
                        </div>
                            @error('relation')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div>
            
        
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>
        </div>
    </form>


    <hr class="card_hr">
    <form action="/user-edit-emadd" method="post" role="form text-left">
        @csrf
        <input type="text" name="id" value="{{$data->id}}" hidden>
        <input type="text" name="e_id" value="{{optional($data->emergencyContact)->id}}" hidden>
        <div class="card-header pb-0 px-3">
            <h6 class="mb-0">{{ __('Emergency Contact Address') }}</h6>
        </div>
        <div class="card-body pt-4 p-3">
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user.district" class="form-control-label">{{ __('District') }}<span class="small text-danger">*</span></label>
                        <div class="@error('user.district')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="District" id="district" name="district" value="{{optional(optional($data->emergencyContact)->permanentAddress)->district}}">
                        </div>
                            
                            @error('district')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-city" class="form-control-label">{{ __('VDC/Municipality') }}<span class="small text-danger">*</span></label>
                        <div class="@error('city')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{optional(optional($data->emergencyContact)->permanentAddress)->city}}" type="text" placeholder="City" id="user-city" name="city">
                        </div>
                            @error('city')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="user.tole" class="form-control-label">{{ __('Street Address') }}<span class="small text-danger">*</span></label>
                        <div class="@error('tole')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Tole" id="tole" name="tole" value="{{optional(optional($data->emergencyContact)->permanentAddress)->tole}}">
                        </div>
                            @error('tole')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.ward_no" class="form-control-label">{{ __('Ward No') }}<span class="small text-danger">*</span></label>
                        <div class="@error('ward_no')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Ward No" id="ward_no" name="ward_no" value="{{optional(optional($data->emergencyContact)->permanentAddress)->ward_no}}">
                        </div>
                            @error('ward_no')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zipcode" class="form-control-label">{{ __('Zip Code') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zipcode')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zip Code" id="zipcode" name="zipcode" value="{{optional(optional($data->emergencyContact)->permanentAddress)->zipcode}}">
                        </div>
                            @error('zipcode')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="user.zone" class="form-control-label">{{ __('Zone') }}<span class="small text-danger">*</span></label>
                        <div class="@error('zone')border border-danger rounded-3 @enderror">
                            <input class="form-control" type="text" placeholder="Zone" id="zone" name="zone" value="{{optional(optional($data->emergencyContact)->permanentAddress)->zone}}">
                        </div>
                            @error('zone')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                       
                    </div>
                </div>
            </div>
            
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>
        </div>
    </form>
    
</div>