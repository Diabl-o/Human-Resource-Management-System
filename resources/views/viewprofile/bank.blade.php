<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('User Bank Details') }}</h6>
    </div>

 <div class="card-body pt-4 p-3">
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Bank Name: </h6>
        </div>
        <div class="col-sm-6 text-indigo">
            {{optional(auth()->user()->bankDetail)->bank_name}}  
        </div>
    </div>
            
    <hr>

    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Account Name: </h6>
        </div>
        <div class="col-sm-6 text-indigo">
            {{optional(auth()->user()->bankDetail)->account_name}}  
        </div>
    </div>
            
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <h6 class="mb-0">Account Number: </h6>
        </div>
        <div class="col-sm-6 text-indigo">
            {{optional(auth()->user()->bankDetail)->account_number}}  
        </div>
    </div>
            
   

 </div>



</div>