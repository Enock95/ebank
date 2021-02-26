@extends('layouts.customers')

@section('content')

<section class="content">
    <div class="container-fluid">
        
        
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">PLEASE ENSURE ALL FIELDS ARE COMPLETED</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form>
              
                <div class="card-body ">
                    <div class="row">
                         <!-- left column -->
                        <div class="col-sm-4">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">Receiver Bank Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Receiver Bank Name">
                            </div>
                            <div class="form-group">                 <label             for="exampleInputEmail1">Receiver Account Number</label>   
                                <input type="email" class="form-control" name="email" placeholder="Receiver Account Number">
                            </div>
                            <div class="form-group">                 <label for="exampleInputEmail1">Receiver Fullname</label>   
                                <input type="text" class="form-control" name="phone" placeholder="Receiver Fullname">
                            </div>
                            
                                                        
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Receiver Country</label>                     
                                <input type="text" class="form-control" name="name_empl" placeholder="Receiber Country">
                            </div>
                            <div class="form-group">                 <label for="exampleInputEmail1">Swift Code/Routing/IBAN</label>   
                                <input type="text" class="form-control" name="type_empl" placeholder="Swift Code/Routing/IBAN">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Residentiel Adress</label>                    
                                <input type="text" class="form-control" name="cot" placeholder=" Residentiel Address">
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Amount</label>                     
                                                  
                                <input type="text" class="form-control" name="cot" placeholder="Amount">
                            </div>
                            
                        </div>    
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Proceed Transfer ></button>
                </div>
            </form>
        </div>  
    </div>
</section>
    
@endsection