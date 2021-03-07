@extends('layouts.dashbord')

@section('content')
<section class="content">
    <div class="container-fluid">
        
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Modifier Information</h3>
            </div>

            <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data" >
                {{ csrf_field() }}
                

                <div class="card-body ">
                    <div class="row">
                            <!-- left column -->
                        <div class="col-sm-4">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">Personel Information</label>
                                <input type="text" class="form-control" name="name"  value="{{ $user->name }}" >
                            </div>
                            <div class="form-group">                    
                                <input type="email" class="form-control" name="email"  value="{{ $user->email }}">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="number"  value="{{ $user->number}}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image Profile</label>
                                <input type="file" name="image" class="form-control" value="{{ $user->image }}">
                            </div>
                            <div class="form-group "> 
                                <label for="exampleInputEmail1">Date of Birth</label>                   
                                <input type="date" class="form-control" name="date"  value="{{ $user->date }}">
                            </div>
                            <div class="form-group">                    
                                <select class="custom-select form-control-border" name="gender"  value="{{ $user->gender }}">
                                    <option value="Male">I am a Male</option>
                                    <option value="Femele">I am a Femele</option>
                                    <option value="RAS">Choose to Hide my gender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employment Information</label>                     
                                <input type="text" class="form-control" name="name_empl"  value="{{ $user->name_empl }}">
                            </div>
                            {{--<div class="form-group">                    
                                <input type="text" class="form-control" name="type_empl" placeholder="Type of Employment">
                            </div>--}}
                            <div class="form-group">                    
                                <select type="text" class="custom-select form-control-border" name="salary"  value="{{ $user->salary }}">
                                    <option value="">Select Your Salary Range</option>
                                    <option value="$100.00-$500.00">$100.00-$500.00</option>
                                    <option value="$500.00-$1,000.00">$500.00-$1,000.00</option>
                                    <option value="$1,000.00-$4,000.00">$1,000.00-$4,000.00</option>
                                    <option value="$4,000.00-$10,000.00">$4,000.00-$10,000.00</option>
                                    <option value="$10,000.00-$25,000.00">$10,000.00-$25,000.00</option>
                                    <option value="$25,000.00-$50,000.00">$25,000.00-$50,000.00</option>
                                    <option value="$50,000.00-$150,000.00">$50,000.00-$150,000.00</option>
                                    <option value="$150,000.00-$300,000.00">$150,000.00-$300,000.00</option>
                                    <option value="$300,000.00-$1,000,000.00">$300,000.00-$1,000,000.00</option>
                                    <option value="+ $1,000,000.00">+ $1,000,000.00</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="residentiel"  value="{{ $user->residentiel }}">
                            </div>
                            
                            
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Role section</label>                     
                                @foreach ($roles as $role)
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @if ($user->roles->pluck('id')->contains($role->id))
                                        checked
                                    @endif > 
                                    <label for="{{$role->id}}" class="form-check-label"> {{$role->name}} </label>
                                </div>  
                            @endforeach
                            </div>
                                                                
                        </div>    
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enrégistrer modification</button>
                </div>
            </form> 
        </div>  
    </div>
</section> 
@endsection
