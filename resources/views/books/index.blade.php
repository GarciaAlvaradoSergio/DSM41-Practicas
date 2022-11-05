@include('layouts.header')

@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Libros</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar la asignatura</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Informacion del grupo</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/">Continuar</a>
                </div>
            </div>
        </div>
    </div>
            <div class="card-body">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">Lista de libros</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="books/create"><i class="fa-solid fa-layer-group"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Descripcion</th>
                                            <th>Contenido</th>
                                            <th>Categoria</th>
                                            <th>Nombre</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Descripcion</th>
                                            <th>Contenido</th>
                                            <th>Categoria</th>
                                            <th>Nombre</th>
                                            <th>Operaciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @forelse($books as $book)
                                        <tr>
                                            <td>{{$book->id}}</td>
                                            <td>{{$book->title}}</td>
                                            <td>{{$book->description}}</td>
                                            <td>{{$book->content}}</td>
                                            <td>{{$book->categoria->name}}</td>
                                            <td>{{$book->estudiante->name}}</td>
                                            
                                            <td>
                                            <div class="btn-group me-2" role="group" aria-label="First group">
                                                <div class="contenedor"><a href="books/{{$book->id}}">
                                                <button type="button" class="btn btn-success"><i class="fa-regular fa-eye"></i></button>
                                                </a></div>
                                                <div class="contenedor"><a href="">
                                                <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                                </a></div>
                                                <div class="contenedor"><a href="">
                                                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </a></div>
                                            </div>
                                           @empty
                                            </td>
                                        </tr>
                                    @endforelse
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
