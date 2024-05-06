<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Temporary Address') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">District: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->district}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">VDC/Municipality: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->city}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Street Address: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->tole}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Ward No: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->ward_no}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zipcode: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->zipcode}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zone: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->temporaryAddress)->zone}}
            </div>
        </div>
            
        

    </div>
    <hr class="mb-0 " style="height: 3px">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Permanent Address') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">District: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->district}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">VDC/Municipality: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->city}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Street Address: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->tole}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Ward No: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->ward_no}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zipcode: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->zipcode}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zone: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->permanentAddress)->zone}}
            </div>
        </div>
            
        

    </div>


    <hr class="mb-0 " style="height: 3px">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Emergency Contact') }}</h6>
    </div>
    <div class="card-body pt-4 p-3">

        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Name: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->emergencyContact)->name}}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Phone Number: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->emergencyContact)->phone}}
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Relation: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(auth()->user()->emergencyContact)->relation}}
            </div>
        </div>
    </div>

    <hr class="mb-0 " style="height: 3px">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Emergency Contact Address') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">District: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->district}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">VDC/Municipality: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->city}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Street Address: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->tole}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Ward No: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->ward_no}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zipcode: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->zipcode}}
            </div>
        </div>
            
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Zone: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                 {{optional(optional(auth()->user()->emergencyContact)->permanentAddress)->zone}}
            </div>
        </div>
            
        

    </div>

</div>