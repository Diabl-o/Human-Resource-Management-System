@extends('layouts.user_type.auth')

@section('content')




<div class="modal" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTaskModalLabel">Add Task </h5>
                
                <button type="button" class="close  closebutton" onclick="closemodal()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    

                            <div class="form-group">
                                <label for="Title">Title</label><span class="small text-danger">*</span>
                                <input class="form-control" type="text" placeholder="Title of task" name="title">
                                @error('title')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        

                        
                            <div class="form-group">
                                <label for="description">Description</label><span class="small text-danger">*</span>
                                <textarea class="form-control" placeholder="Description of task" name="description"></textarea>
                                @error('description')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        


                    

                    <div class="form-group">
                        <label for="attachment">Attachment</label>
                        <input class="form-control" type="file" name="attachment">
                        @error('attachment')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                
                   
                
                    <div class="form-group">
                        <label for="deadline">Deadline</label><span class="small text-danger">*</span>
                        <input class="form-control" type="date" name="deadline">
                        @error('deadline')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                
                   
                
                    <div class="form-group">
                        <label for="assigned_to">Assigned To</label>
                        
                        <select class="form-control" name="assigned_to">
                            <option selected disabled>Select User</option>
                            @foreach ($users as $user )
                            @php
                                $name=$user->first_name.' '.$user->last_name;
                            @endphp

                            <option value="{{$user->id}}">{{$name}}</option>

                            @endforeach
                            
                            
                        </select>
                        @error('assigned_to')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <label for="priority">Priority</label><span class="small text-danger">*</span>
                        <select class="form-control" name="priority">
                            <option value="Normal">Normal</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                        @error('priority')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                
                    
                </form>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closemodal()">Close</button>
                <button type="submit" class="btn btn-primary" >Add Task</button>
                
            </div>
        </div>
    </div>
</div>





<div>
    <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white">
            
            <strong>Task list</strong> 
        </span>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Tasks</h5>
                        </div>
                        <a href="" class="btn bg-gradient-primary btn-sm mb-0" id="add_new_task" type="button">+&nbsp; New Task</a>
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
                                        Title
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Description
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Attachment
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Deadline
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Assigned By
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Assigned To
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Priority
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    

                                
                                 
                                <tr>

                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    @php
                                        
                                    @endphp
                                    <td>
                                        <div>
                                            <img src="" class="avatar me-3" style="object-fit: cover">
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"></p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold"></span>
                                    </td>
                                    <td class="text-center">
                                        <form action="" method="get">
                                            @csrf
                                            <input type="hidden" name="id" value="">
                                            <!-- Other input fields -->
                                            <button type="submit" style="background: inherit; border:none;" data-bs-toggle="tooltip" data-bs-original-title="Edit user"><i class="fas fa-user-edit text-secondary"></i></button>
                                        
                                        
                                        
                                            <a href="" class="mx-2" data-bs-toggle="tooltip" data-bs-original-title="Delete user">
                                            <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </a>
                                        </form>
                                     
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

var link=document.getElementById('add_new_task');

var popup=document.getElementById('addTaskModal');

link.addEventListener('click',function(event){

    event.preventDefault();

    
    popup.style.display = 'block';
    overlay.style.display= 'block';

});


function closemodal(){
    popup.style.display = 'none';
    overlay.style.display= 'none';
}


</script>
    
@endsection