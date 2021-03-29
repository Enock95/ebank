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
                    <div class="widget-numbers mt-0 fsize-3 text-success">0%</div>
                </div>
                <div class="widget-content-right w-75">
                    <div class="progress-bar-xs progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="50" style="width: 1%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        @foreach ($transfer->id as $transfer) 
            
        
        <div class="form-desc" style="color:#05194B; text-align:justify;">
           Dear <strong style="color:brown;">{{ $transfer->receiver_name }}</strong>, kindly note that you are making a wire transfer of  
            <strong style="color:brown;">€ . {{ $transfer->amount }}</strong>
       
            from your <strong style="color:brown;">{{ $transfer->receiver_num }}</strong>
            to <strong style="color:brown;">{{ $transfer->bank_name }}</strong> belonging to
            <strong style="color:brown;">nuindiw</strong> with the underlisted details
        </div>
            <br>

        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
    <p>Bank Name: {{ $transfer->bank_name }}</p>
    <p>Bank Location: {{ $transfer->receiver_adresse }}</p>
    <p>Siwft Code/IBAN: {{ $transfer->iban }}</p>
    <p>Bank Account: {{ $transfer->receiver_num }}</p>
        
    <p><!-- <strong style="color:brown;"><//?php echo $_SESSION['hlbank_user']['currency'] ?> 
    <//?php  echo $_SESSION['amt'] /15 ; ?>.00</strong>--> </p>

    <label>Contact Customer services via <a class="btn btn-primary" href="mailto:contact@bkh-ltd.com">contact@bkh-ltd.com</a>
      for your Cost of Transaction Code</label>
      @endforeach
      
<form action="{{route('cot.trans')}}" method="POST" enctype="multipart/form-data">
        
   
   @csrf
      
      
        <div class="position-relative form-group"><label for="exampleAddress" class="">COT Code</label>
        <input name="vcot" style="height:80px;" type="text" name="vcot" class="form-control" required=""></div>
        
        <button id="submitButton" type="submit" name="submit" class="mt-2 btn btn-primary">
                            <i class="fas fa-money-check-alt" style="font-size:24px;color:orange"></i>&nbsp;
                            Validate COT &gt;</button>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
</div>
@endsection