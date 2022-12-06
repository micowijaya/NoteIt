@extends('layout.app')


@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between ps-3 pe-3">
        <h3  style="color: #98A8F8 !important">
            <b>{{ Auth::user()->name }}'s Notes</b> 
        </h3>

        <a class="btn btn-add" data-bs-toggle="modal" data-bs-target="#addModal" style="width: 10%" role="button">Add</a>
    </div>
    <hr class="border border-2 opacity-50" style="border-color:#98A8F8 !important;">

    {{-- Add Modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="AddModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #98A8F8">
              <h1 class="modal-title fs-5" id="AddModalLabel">Add new note</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('create') }}" method="POST">
            @csrf

                <div class="modal-body">
                    
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Note title</label>
                        <input type="text" name="inputTitle" class="form-control" id="inputTitle">
                    </div>
                    <div class="mb-3">
                        <label for="inputLocation" class="form-label">Location</label>
                        <input type="text" class="form-control" name="inputLocation" id="inputLocation">
                    </div>
                    <div class="mb-3">
                        <label for="inputContent" class="form-label">Content</label>
                        <textarea class="form-control" name="inputContent" id="inputContent" rows="3"></textarea>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create Note</button>
                </div>
            </form>
          </div>
        </div>
    </div>

    
    <div class="mt-4">
        <div class="row">
        @foreach ($notes as $note)
                <div class="col-md-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex">

                                <div class="col-md-10">
                                    <h5 class="card-title text-black">{{$note->title}}</h5>

                                </div>
                                <div class="col-md-2 ">
                                    <a data-bs-toggle="modal" data-bs-target="#updateModal-{{$note->id}}" class="me-1"><img class="img-fluid" style="width: 40%; opacity:50%;" src="{{asset('storage/images/pencil.png')}}" alt=""></a>
                                    <a data-bs-toggle="modal" data-bs-target="#deleteModal-{{$note->id}}" class="ms-auto"><img class="img-fluid" style="width: 40%; opacity:50%;" src="{{asset('storage/images/bin.png')}}" alt=""></a>
                                </div>

                
                            </div>
                        <p style="font-size: 14px; opacity: 50%;" class="card-title text-black">{{$note->location}}</p>
                        <p class="card-text text-black">{{$note->usernote}}</p>
                        <p style="font-size: 12px; opacity: 50%;" class="card-title text-black mb-0">Created at : {{$note->created_at}}</p>
                        <p style="font-size: 12px; opacity: 50%;" class="card-title text-black mb-0">Updated at : {{$note->updated_at}}</p>
                        </div>
                    </div>
                </div>



                {{-- Update Modal --}}
                <div class="modal fade" id="updateModal-{{$note->id}}" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #98A8F8">
                        <h1 class="modal-title fs-5" id="updateModalLabel">Update note</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('update', $note->id)}}" method="POST">
                        @csrf
                        @method('PATCH')

                            <div class="modal-body">
                                
                                <div class="mb-3">
                                    <label for="inputTitle" class="form-label">Note title</label>
                                    <input type="text" name="inputTitle" class="form-control" id="inputTitle" value="{{$note->title}}">
                                </div>
                                <div class="mb-3">
                                    <label for="inputLocation" class="form-label">Location</label>
                                    <input type="text" class="form-control" name="inputLocation" id="inputLocation" value="{{$note->location}}">
                                </div>
                                <div class="mb-3">
                                    <label for="inputContent" class="form-label">Content</label>
                                    <textarea class="form-control" name="inputContent" id="inputContent" rows="5">{{$note->usernote}}</textarea>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Send message</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>


                

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal-{{$note->id}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #98A8F8">
                        <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Confirm</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="background-color: #FAF7F0">
                        <p style="color: black !important">Do you want to delete "{{$note->title}}"?</p>
                        </div>
                        <div class="modal-footer" style="background-color: #FAF7F0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        <form action="{{ route('delete', $note->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        </div>
                    </div>
                    </div>
                </div>
                
        @endforeach
        </div>

        
        
        
    </div>
</div>
@endsection
