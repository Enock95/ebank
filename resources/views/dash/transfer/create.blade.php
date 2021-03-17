@extends('layouts.customers')

@section('content')

<section class="content">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span><i class="fas fa-globe" style="font-size:24px;color:orange" aria-hidden="true"></i> International Money Transfer</span>
    </a>
    <div class="container-fluid">
        
        <div class="tab-content">
            <div class="form-desc" style="color:#05194B; text-align:justify;">
             The BKH Limited International Money Transfer (IMT) is designed to enable both BKH Limited account holders
             and non-account holders 
             send and receive 
             funds to and from any BKH Limited subsidiary in America, Europe, Asia and West Africa. In line with a directive by the 
             International Money Funds and US Department of States,
             recipients of funds through BKH Limited in United States
             must either be BKH Limited account holders or must be identified by a BKH Limited account holder.
             
            </div>
             <br>
        </div>
     </div>  
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">PLEASE ENSURE ALL FIELDS ARE COMPLETED</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form action="{{route('transfer.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body ">
                    <div class="row">
                         <!-- left column -->
                        <div class="col-sm-4">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">Receiver Bank Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Receiver Bank Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Receiver Account Number</label>   
                                <input type="text" class="form-control" name="receiver" placeholder="Receiver Account Number">
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputEmail1">Receiver Fullname</label>   
                                <input type="text" class="form-control" name="phone" placeholder="Receiver Fullname">
                            </div>
                            
                                                        
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Receiver Country</label>                     
                                <input type="text" class="form-control" name="name_empl" placeholder="Receiber Country">
                            </div>
                            <div class="form-group">
                                 <label for="exampleInputEmail1">Swift Code/Routing/IBAN</label>   
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