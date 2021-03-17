@extends('layouts.customers')

@section('content')

<section class="content">

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-comments-dollar" style="font-size:28px;color:orange" aria-hidden="true"></i>&nbsp;
                    </div>
                    <div>Good Morning ! ADODO DOMENOU                                        <div class="page-title-subheading">Cooperate Business Account Number: <strong class="badge badge-warning">
                            5101639280</strong>
                        </div>
                    </div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="alert">
                      <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span> 
                      <strong>Hello!</strong> bravoo                                    </div>



                </div>
                <div class="page-title-actions">
                  
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                               <i class="far fa-money-bill-alt" style="font-size:20px;color:white" aria-hidden="true"></i>&nbsp;
                            </span>
                            Quick Transfer
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="/C_area/view/?v=intl-transfer" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Wire Transfer
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">3</div>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>    </div>
        </div>            

<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
             
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span><i class="fa fa-money" style="font-size:24px;color:orange" aria-hidden="true"></i> Preview Transfer Information</span>
                </a>
             
        </ul>                   
          
          <div class="tab-content">

            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Please ensure all fields are completed</h5>
                    
                       <form action="/C_area/view/process.php?action=transfer" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver Bank Name</label>
                    <input name="r_bank" id="exampleEmail11" value="teet" placeholder="Receiver Bank Name" type="text" class="form-control" required="required"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Account Number</label>
                    <input name="r_accno" id="examplePassword11" value="5101639280" placeholder="Receiver Account Number" type="text" class="form-control" required="required"></div>
                </div>
            </div>
            
             <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver FullName</label>
                    <input name="bname" id="exampleEmail11" value="nuindiw" placeholder="Receiver Fullname" type="text" class="form-control" required="required"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Email Address</label>
                    <input name="r_email" id="examplePassword11" value="do@gmail.com" placeholder="Receiver Email Address" type="email" class="form-control" required="required"></div>
                </div>
            </div>
            
              <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Receiver State</label>
                    <input name="bname" id="exampleEmail11" value="Bridgetown" placeholder="Receiver Fullname" type="text" class="form-control" required="required"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Receiver Country</label>
                    <input name="bemailadd" id="examplePassword11" value="Barbados" placeholder="Receiver Email Address" type="text" class="form-control" required="required"></div>
                </div>
            </div>
            
            
             <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Swift Code/Routing/IBAN</label>
                    <input name="swift" value="7465161656418" placeholder="Swift Code/Routing/IBAN" type="text" class="form-control" required="required"></div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group"><label for="examplePassword11" class="">Amount (XAF):</label>
                    <input name="amt" id="amt" value="200" placeholder="Amount" type="text" class="form-control" required="required"></div>
                </div>
            </div>
            
            
            <div class="position-relative form-group"><label for="exampleAddress" class="">Transaction Naration</label>
            <input name="description" style="height:80px;" id="exampleAddress" value="" type="text" class="form-control"></div>
            
                           
                <input type="hidden" value="11:31 AM 16 Mar 2021" name="dot"> 
                    <input name="toption" type="hidden" readonly="true" value="IT" class="form-control">
        <input name="saccno" type="hidden" readonly="true" value="5101639280" id="saccno" class="form-control"> 
                            
                            <button name="submitButton" id="submitButton" type="submit" class="mt-2 btn btn-primary">
                                <i class="fa fa-money" style="font-size:24px;color:orange" aria-hidden="true"></i>&nbsp;
                                Transfer Now &gt;</button>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </div>
     
        
                     
        
    
    
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/C_area/view/?v=ChangePwd" class="nav-link">
                               <i class="far fa-sun" style="font-size:20px;color:orange" aria-hidden="true"></i>&nbsp; Change Account Password
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/C_area/view/?v=ChangePin" class="nav-link">
                                 <i class="far fa-sun" style="font-size:20px;color:orange" aria-hidden="true"></i>&nbsp; Change Transaction PIN
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="/C_area/?logout" class="nav-link">
                                 <i class="fas fa-power-off" style="font-size:20px;color:orange" aria-hidden="true"></i>&nbsp; Logout
                            </a>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>    </div>

</section>    
@endsection

