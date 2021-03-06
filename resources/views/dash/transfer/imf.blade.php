@extends('layouts.customers')

@section('content')

<section class="content">
    <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
        <span><i class="fas fa-money-check-alt" style="font-size:24px;color:orange"></i> Cost of Transaction Code (COT)</span>
    </a>
         
                
      
    <div class="widget-content">
        <div class="widget-content-outer">
            <div class="widget-content-wrapper">
                <div class="widget-content-left pr-2 fsize-1">
                    <div class="widget-numbers mt-0 fsize-3 text-success">40%</div>
                </div>
                <div class="widget-content-right w-75">
                    <div class="progress-bar-xs progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="50" style="width: 40%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="form-desc" style="color:#05194B; text-align:justify;">
           Dear <strong style="color:brown;">ADODO DOMENOU</strong>, Our Banking Transfer Services are guided by laws of United States FDIC and International Monetary Funds,
            to ensure your funds are free from money lanudering, you are require to obtian a Valid IMF Clearance Code from our wire transfer Unit of BKH Limited.  <br>
            Your are Transfering <strong style="color:brown;">XAF 200.00</strong>
       
            from your <strong style="color:brown;">5101639280</strong>
            to <strong style="color:brown;">teet</strong> belonging to
            <strong style="color:brown;">nuindiw</strong> with the underlisted details
        </div>
            <br>

        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
    <p>Bank Name: teet</p>
    <p>Bank Location: Ashmore and Cartier Island, Ashmore and Cartier Island</p>
    <p>Siwft Code/IBAN: 7465161656418</p>
    <p>Bank Account: 5101639280</p>
        
    <p><!-- <strong style="color:brown;"><//?php echo $_SESSION['hlbank_user']['currency'] ?> 
    <//?php  echo $_SESSION['amt'] /15 ; ?>.00</strong>--> </p>

    <label>Contact Customer services via <a class="btn btn-primary" href="mailto:contact@bkh-ltd.com">contact@bkh-ltd.com</a>
        for your IMF Clearance Code</label>
      
      
<form action="#" method="POST" enctype="multipart/form-data">
        
   
   
      
      
        <div class="position-relative form-group"><label for="exampleAddress" class="">IMF Clearance Code</label>
        <input name="vimf" style="height:80px;" type="text" class="form-control" required=""></div>
        
        
        
        
          <input type="hidden" name="rbname" value="teet ">
<input type="hidden" name="accno" value="5101639280 ">
<input type="hidden" name="bname" value="nuindiw ">
<input type="hidden" name="rcountry" value="Ashmore and Cartier Island ">
<input type="hidden" name="rstate" value="Ashmore and Cartier Island ">
<input type="hidden" name="bemailadd" value="do@gmail.com ">
<input type="hidden" name="swift" value="7465161656418 ">
<input type="hidden" name="dot" value="07:27 PM 15 Mar 2021 ">
<input type="hidden" name="amt" value="200 ">
<input type="hidden" name="toption" value="IT ">
<input type="hidden" name="desc" value=" ">
<input type="hidden" name="saccno" value="5101639280 ">
                        
                        <button id="submitButton" type="submit" name="submit" class="mt-2 btn btn-primary">
                            <i class="fas fa-money-check-alt" style="font-size:24px;color:orange"></i>&nbsp;
                            Validate IMF Clearance Code &gt;</button>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
@endsection