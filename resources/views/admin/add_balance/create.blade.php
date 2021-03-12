@extends('layouts.dashbord')

@section('content')
<section class="content">
    <div class="container-fluid">
        
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Transfert de fond</h3>
            </div>

            <form action="{{ route('balanceUpdate', $user->id) }}" method="POST" >
                {{ csrf_field() }}
                

                <div class="card-body ">
                    <div class="row">
                            <!-- left column -->
                        <div class="col-sm-4">

                            <div class="form-group ">
                                <label for="exampleInputEmail1">Personel Information</label>
                                <input type="text" class="form-control" name="name"  value="{{ $user->name }}" readonly>
                            </div>
                            <div class="form-group">                    
                                <input type="email" class="form-control" name="email"  value="{{ $user->email }}" readonly>
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="number"  value="{{ $user->number}}" readonly>
                            </div>
                            <div class="form-group">                    
                                <input type="text" class="form-control" name="residentiel"  value="{{ $user->residentiel }}" readonly>
                            </div>
                            
                            
                        </div>
                        <div class="col-sm-4">
    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Montant Actuel</label>                     
                                <input type="text" class="form-control" name="balance"  value="{{ $user->balance }}">
                            </div>
                            {{--<div class="form-group">                    
                                <input type="text" class="form-control" name="type_empl" placeholder="Type of Employment">
                            </div>--}}
                            
                            
                            
                            
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
