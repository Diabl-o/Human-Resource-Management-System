<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('User Bank Details') }}</h6>
    </div>
    <div class="card-body pt-4 p-3">
        <form action="/user-edit-bank" method="post" role="form text-left">
            @csrf
            <input type="text" name="id" value="{{$data->id}}" hidden>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Bank Name" class="form-control-label">{{ __('Bank Name') }}<span class="small text-danger">*</span></label>
                        <div class="@error('bank_name')border border-danger rounded-3 @enderror">
                        
                            <input class="form-control" type="text" placeholder="Bank Name" id="bank_name" name="bank_name" value="{{optional($data->bankDetail)->bank_name}}">
                        </div>
                            @error('bank_name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Account Name" class="form-control-label">{{ __('Account Name') }}<span class="small text-danger">*</span></label>
                        <div class="@error('account_name')border border-danger rounded-3 @enderror">
                        
                            <input class="form-control" type="text" placeholder="Account Name" id="account_name" name="account_name" value="{{optional($data->bankDetail)->account_name}}">
                        </div>
                            @error('account_name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="Account Number" class="form-control-label">{{ __('Account Number') }}<span class="small text-danger">*</span></label>
                        <div class="@error('account_number')border border-danger rounded-3 @enderror">
                        
                            <input class="form-control" type="text" placeholder="Account Number" id="account_number" name="account_number" value="{{optional($data->bankDetail)->account_number}}">
                        </div>
                            @error('account_number')
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