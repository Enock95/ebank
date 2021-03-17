@extends('layouts.customers')

@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-4">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="fas fa-comments-dollar" style="font-size:28px;color:orange" aria-hidden="true"></i>&nbsp;
                </div>
                
                <div class="page-title-subheading">
                  Cooperate Business Account Number: <strong class="badge badge-warning">{{ Auth::user()->account_no }}</strong>
                </div>
                
              </div>
              &nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="fas fa-comments-dollar" style="font-size:28px;color:orange" aria-hidden="true"></i>&nbsp;
                </div>
                
                <div class="page-title-subheading">
                  Total Balance: <h3><strong class="badge badge-warning"> {{ Auth::user()->balance }} €</strong></h3>
                </div>
                
              </div>
              &nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="app-page-title">
            <div class="page-title-wrapper">
              <div class="page-title-heading">
                <div class="page-title-icon">
                  <i class="fas fa-comments-dollar" style="font-size:28px;color:orange" aria-hidden="true"></i>
                 
                </div>
                <div class="page-title-subheading">
                  <a style="font-size:20px; color:rgb(255, 165, 0); border:0px;" class="far fa-money-bill-alt"  href="{{ route('transfer.create') }}" > Quick Transfer ></a>  
                </div>
                
                
                
              </div>
              &nbsp;&nbsp;&nbsp;
            </div>
          </div>
        </div>
      </div> 
    </div>
    
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('uploads/'.Auth::user()->image) }}" alt="User profile picture">
              </div>
            
              <h3 class="profile-username text-center"></h3> 
              
             
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <p class=" text-center"><b>{{ Auth::user()->name }}</b></p>
                   
                </li>
                <li class="list-group-item">
                  <b>{{ Auth::user()->number }}</b> <a class="float-right"></a>
                </li>
                <li class="list-group-item">
                  <b>{{ Auth::user()->email }}</b> <a class="float-right"></a>
                </li>
                
              </ul>

              <a href="#" class="btn btn-warning btn-block"><b>Profile</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          {{-- <div class="card card-primary">
            <div class="card-header">
              <strong class="card-title">Stato della licenza</strong>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

              <p class="text-muted">
                {{ Auth::user()->statut }}
              </p>
              <hr>
            </div>  
            <!-- /.card-body -->
          </div> --}}

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Personal Information</h3>
                </div>
                <!-- /.card-header -->
                <div class="row">
                  <div class="col-md-4">
                    <div class="card-body">
                      <strong><i class="fas fa-book mr-1"></i> Data di nascita</strong>
        
                      <p class="text-muted">
                        {{ Auth::user()->date }}
                      </p>
                      <strong><i class="fas fa-book mr-1"></i> Luogo di nascita</strong>
        
                      <p class="text-muted">
                        {{ Auth::user()->lieu_naiss }}
                      </p>
        
                      <hr>
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Nazione </strong>
        
                      <p class="text-muted">{{ Auth::user()->country }}</p>
                      
                      <hr>
        
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Città </strong>
        
                      <p class="text-muted">{{ Auth::user()->city }}</p>
        
                      <hr>
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> Indirizzo di residenza </strong>
        
                      <p class="text-muted">{{ Auth::user()->residentiel }}</p>

                      <hr>
        
                      <strong><i class="far fa-file-alt mr-1"></i> Categoria di licenza </strong>
        
                      <p class="text-muted">{{ Auth::user()->categorie_permis }}</p>
                    </div>

                  </div>
                </div>    
                <!-- /.card-body -->
              </div>

            </div><!-- /.card-header -->
            
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>

@endsection
