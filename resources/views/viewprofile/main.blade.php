<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('User Information') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Full Name: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->first_name}}  {{auth()->user()->last_name}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Email: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->email}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Phone Number: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->phone1}}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Secondary Phone Number: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->phone2}}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Blood Group: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->blood_group->blood_group}}
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Date of Birth: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->date_of_birth}}
            </div>
        </div>
        
        
        

    </div>




</div>