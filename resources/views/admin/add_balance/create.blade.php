@extends('layouts.dashbord')

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h4 class="card-title">Please ensure all fields are completed</h4>
            </div>

            <form>
              
                <div class="card-body ">
                    <div class="row"> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="" class="form-control">Customer Name</label>
                                <input name="r_bank" id="exampleEmail11" value=" " type="text" class="form-control" readonly="">
                            </div>

                        </div>

                    </div>
                
                
                </div>
            </form>

        </div>


    </div>
</section> 
    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
        <div class="main-card mb-6 card">
            <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
            
            <form action=" " method="post" id="frmTransaction">
    <div class="form-row">
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="" class="">Customer Name</label>
            <input name="r_bank" id="exampleEmail11" value=" " type="text" class="form-control" readonly=""></div>
        </div>
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="examplePassword11" class="">Customer Email Address</label>
            
            <a href=""></a>
    &nbsp;[&nbsp;<a class="btn btn-danger btn-block loginbtn" href="/C_area/backend/user/?view=email&amp;userId=90">Edit Email</a>
            <input id="examplePassword11" value="" type="text" class="form-control" readonly=""></div>
        </div>
    </div>

    
            <div class="position-relative form-group"><label for="exampleEmail11" class="">Mobile Number</label>
            <input name="bname" id="exampleEmail11" value=" " type="text" class="form-control" readonly=""></div>
        

    <div class="form-row">
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="exampleEmail11" class="">City</label>
            <input name="bname" id="exampleEmail11" value="	" type="text" class="form-control" readonly=""></div>
        </div>
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="examplePassword11" class="">State</label>
            <input name="bemailadd" id="examplePassword11" value=" " type="text" class="form-control" readonly=""></div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="exampleEmail11" class="">Address</label>
            <input name="bname" id="exampleEmail11" value="	" type="text" class="form-control" readonly=""></div>
        </div>
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="examplePassword11" class="">Postal Code</label>
            <input name="bemailadd" id="examplePassword11" value="0 " type="text" class="form-control" readonly=""></div>
        </div>
    </div>



    
    
    <div class="form-row">
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="exampleEmail11" class="">Account Number</label>
            <input name="swift" value="" type="text" class="form-control" readonly="">
                <input type="hidden" name="user_id" value="90">
                <input type="hidden" name="acc_no" value="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="examplePassword11" class="">Current Balance</label>
            <input name="amt" id="amt" value="XAF&nbsp;300000" type="text" class="form-control" readonly=""></div>
        </div>
    </div>


    <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction History</label>
    <a class="btn btn-success btn-block loginbtn" style="color:white; font-size:14px;" href="/C_area/backend/account/?view=statement&amp;accNo=5101639280">View Transaction History</a>

    </div>


    
    <div class="form-row">
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="exampleEmail11" class="">Transaction Type</label>
            <select name="type" class="form-control" id="type">
            <option value="#"> -- select transaction type  --</option>
            <option value="credit">Credit Customer</option>
            <option value="debit">Debit Customer</option>
        </select>
        
            </div>
        </div>
        <div class="col-md-6">
            <div class="position-relative form-group"><label for="examplePassword11" class="">AMOUNT (XAF)</label>
            <input name="amt" id="amt" type="text" class="form-control" required="">
            <input type="hidden" name="email" id="email" value="orouchristophe@gmail.com" size="10">
            <input type="hidden" name="phone" id="phone" value="012326966" size="10">
                <input type="hidden" name="currency" id="phone" value="XAF" size="10">
                <input type="hidden" name="s_accno" id="s_accno" value="Bankia Staff" size="10">
            
            </div>
        </div>
    </div>
        
        
            <div class="position-relative form-group"><label for="exampleAddress" class="">Date of Transfer</label>
            <input type="date" name="date" class="form-control" size="20" required="">

    </div>



    <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
    <textarea name="description" id="desc" placeholder="Funds transfer from inheritance accumulated funds ordered by US Department of State" class="form-control" cols="35" rows="4" required=""></textarea>

    </div>
    
                    
                    <button name="btnTxType" type="submit" id="btnTxType" class="mt-2 btn btn-primary">
                        <i class="fa fa-money" style="font-size:24px;color:orange" aria-hidden="true"></i>&nbsp;
                        Transfer Now &gt;</button>
                        
                        <button name="btnBack" type="submit" onclick="window.history.back();" class="mt-2 btn btn-primary">
                        <i class="fa fa-money" style="font-size:24px;color:orange" aria-hidden="true"></i>&nbsp;
                        Cancel </button>
                </form>
            </div>
        </div>
        
    </div>

    </div>
   

@endsection