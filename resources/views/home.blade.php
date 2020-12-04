@extends('layouts.app')

@section('content')
<div class="container">

     <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-9">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>
                        <?php $users_count = DB::table('users')->count(); ?>
                        {{ $users_count ?? '0' }}
                    </h3>

                    <p class="car-box">Usuarios administradores registrados</p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-users"></i>
                  </div>
                  <a href="{{url('usuarios')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>

          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <div class="col-lg-6 col-9">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>
                        <?php $roles_count = DB::table('roles')->count(); ?>
                        {{ $roles_count ?? '0' }}
                    </h3>

                    <p class="car-box">Roles de usuarios registrados</p>
                  </div>
                  <div class="icon">
                    <i class="ion fas fa-user-tag"></i>
                  </div>
                  <a href="{{url('roles')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
    
<!-- --------- -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio</div>
                <!-- ---------------- -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
     
                    ¡Estás conectado!!
                </div>
                <!-- --------------- -->
            </div>
        </div>
    </div>
<!-- --------- -->
      


<!--  -->
</div>
@endsection
