<div class="card card-no-top-rounded">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('User Bank Details') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">
       <div class="row">
           <div class="col-sm-4">
               <h6 class="mb-0">Position: </h6>
           </div>
           <div class="col-sm-6 text-indigo">
               {{auth()->user()->position->position}}  
           </div>
       </div>

       <hr>
       <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Salary: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{auth()->user()->salary}}  
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Join Date: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                {{ date('Y-m-d', strtotime(auth()->user()->created_at)) }}
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h6 class="mb-0">Contract Expiry Date: </h6>
            </div>
            <div class="col-sm-6 text-indigo">
                @if (auth()->user()->contract_expiry)
                {{ date('Y-m-d', strtotime(auth()->user()->contract_expiry)) }}
            @else
                <span class="text-muted">Not specified</span>
            @endif
            </div>
        </div>


        <hr>
        
        <div class="row">
           
            <div class="col-sm-4">
                <h6 class="mb-0">Office Hours: </h6>
            </div>
            <div class="col-sm-6">
                
            </div>

            @foreach (auth()->user()->officeHours as $officeHour)
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-6 text-indigo">
                    <div class="row">
                        @if ($officeHour->closed==0)
                            <div class="col-sm-4">
                                <h6 class="mb-0"> {{ $officeHour->day_of_week }}:</h6>
                            </div>
                            <div class="col-sm-6">
                                
                                {{ \Carbon\Carbon::make($officeHour->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::make($officeHour->end_time)->format('h:i A') }}
                            </div>
                        @endif
                       
                    </div>
                   
                </div>
                
            @endforeach
           
                
        </div>

    




    </div>
</div>