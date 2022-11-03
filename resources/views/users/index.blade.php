@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Estudiantes</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
</div>

<div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Plantilla de tabla</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="users/create">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Agregar
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Editar
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Eliminar
                    </a>
                </div>
            </div>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo electronico</th>
                            <th>Contraseña</th>
                            <th>Visualizar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user-> id}}</td>
                                <td>{{ $user-> name}}</td>
                                <td>{{ $user-> lastname}}</td>
                                <td>{{ $user-> email}}</td>
                                <td>{{ $user-> password}}</td>
                                <td>
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <div class="contenedor"><a href="users/{{$user->id}}">
                                        <button type="button" class="btn btn-success"><i class="fa-regular fa-eye"></i></button>
                                            </a></div>
                                </div>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('layouts.footer')