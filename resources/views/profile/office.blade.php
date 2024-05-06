<div class="card card-no-top-rounded">

    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ __('Official Status') }}</h6>
    </div>

    <div class="card-body pt-4 p-3">

        <form action="/user-edit-office" method="post" role="form text-left">
            @csrf
            <input type="text" name="id" value="{{$data->id}}" hidden>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Position" class="form-control-label">{{ __('Position') }}<span class="small text-danger">*</span></label>
                        <div class="@error('position')border border-danger rounded-3 @enderror">
                            <select class="form-control" id="position" name="position">
                                <option selected disabled>Select Position</option>
                                <option value="1"  {{ $data->position_id === 1 ? 'selected' : '' }}>Super Admin</option>
                                <option value="2"  {{ $data->position_id === 2 ? 'selected' : '' }}>HR Manager</option>
                                <option value="3"  {{ $data->position_id === 3 ? 'selected' : '' }}>Department Manager</option>
                                <option value="4"  {{ $data->position_id === 4 ? 'selected' : '' }}>Employee</option>
                                
                            </select>
                        </div>
                            @error('position')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Salary" class="form-control-label">{{ __('Salary') }}</label>
                        <div class="@error('salary')border border-danger rounded-3 @enderror">
                            <input class="form-control" value="{{$data->salary}}" type="number" placeholder="Enter salary..." step="0.01" min="0" id="salary" name="salary">
                        </div>
                            @error('salary')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                        
                    </div>
                </div>
            </div> 
        
   
        
        
            <label for="office_hours" class="form-control-label">{{ __('Office Hours') }}</label>
        
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        @foreach($daysOfWeek as $day)
                       
                        <div class="row">
                            @php
                            $officeHour = $data->officeHours->firstWhere('day_of_week', $day);
                            @endphp
                            <div class="col-md-4">
                                
                                
                                    <label for="{{ $day }}" class="form-control-label">{{ __($day) }}</label>
                                <div class="form-check">

                                    <input class="form-check-input" type="checkbox"   value="1" name="cbox[{{ $day }}]" id="checkbox{{$day}}" onchange="toggleStartElements('{{$day}}')" {{ $officeHour && $officeHour->closed === 1 ? 'checked' : '' }}> <label class="" for="checkbox{{$day}}">Closed</label>
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div id="start_{{ $day }}" class="form-group">
                                    
                                    <label for="{{ $day }}_start" class="form-control-label">{{ __('Start Time') }}</label>
                                    <input class="form-control" type="time" id="{{ $day }}_start" name="office_hours_start[{{ $day }}]" value="{{ isset($officeHour) && $officeHour->day_of_week === $day ? (\Carbon\Carbon::make($officeHour->start_time) ? \Carbon\Carbon::make($officeHour->start_time)->format('H:i') : null) : old('office_hours_start.'.$day) ?? '' }}">

                                    @error('office_hours_start.'.$day)
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="start_{{ $day }}" class="form-group">
                                    <label for="{{ $day }}_end" class="form-control-label">{{ __('End Time') }}</label>
                                    <input class="form-control" type="time" id="{{ $day }}_end" name="office_hours_end[{{ $day }}]" value="{{ isset($officeHour) && $officeHour->day_of_week === $day ? (\Carbon\Carbon::make($officeHour->end_time) ? \Carbon\Carbon::make($officeHour->end_time)->format('H:i'):null) : old('office_hours_end.'.$day) ?? '' }}">
                                    @error('office_hours_end.'.$day)
                                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Save Changes' }}</button>
            </div>
        </form>
        
        





    </div>




</div>

