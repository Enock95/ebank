@extends('layouts.dashbord')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        
        
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Register New Costomer</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{ route('adduser.store') }}" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }}

                <div class="card-body ">
                    <div class="row">
                         <!-- left column -->
                        <div class="col-sm-4">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">Personel Information</label>
                                <input type="text" class="form-control" name="name" placeholder="Full name">
                            </div>
                            <div class="form-group">                    
                                <input type="email" class="form-control" name="email" placeholder="Email adress">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="number" placeholder="Mobile/Phone No">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                
                                </div>
                            </div>
                            <div class="form-group "> 
                                <label for="exampleInputEmail1">Date of Birth</label>                   
                                <input type="date" class="form-control" name="date" placeholder="Date of birth">
                            </div>
                            <div class="form-group">                    
                                <select class="custom-select form-control-border" name="gender" placeholder="Select Gender">
                                    <option value="Male">I am a Male</option>
                                    <option value="Femele">I am a Femele</option>
                                    <option value="RAS">Choose to Hide my gender</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Employment Information</label>                     
                                <input type="text" class="form-control" name="name_empl" placeholder="Name and adress of Employer">
                            </div>
                            {{--<div class="form-group">                    
                                <input type="text" class="form-control" name="type_empl" placeholder="Type of Employment">
                            </div>--}}
                            <div class="form-group">                    
                                <select type="text" class="custom-select form-control-border" name="salary" placeholder="Select Your Salary Range">
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
                                <input type="text" class="form-control" name="residentiel" placeholder=" Residentiel Address">
                            </div>
                            <div class="form-group"> 
                                <label for="exampleInputEmail1">Account Number</label>                  
                                <input type="text" name="account_no" value="{{ $account_no }}" class="form-control" name="telex" readonly >
                        
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Security section</label>                     
                                <input type="text" class="form-control" name="cot" placeholder="Enter COT Code e.g:00000">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="tax" placeholder="Enter TAX Code e.g:00000">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="imf" placeholder="Enter IMF Code e.g:00000">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="atc" placeholder="Enter ATC Code e.g:00000">
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="telex" placeholder="Enter TELEX Code e.g:00000">
                        
                            </div>
                            
                        </div>    
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>  
    </div>
</section>           



@endsection
