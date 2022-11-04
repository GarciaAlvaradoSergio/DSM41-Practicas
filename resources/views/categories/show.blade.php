@include('layouts.header')
@include('layouts.menu')
@section('header')
@endsection

<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Categoria</div>
            <p class="card-category">Vista detallada de la categoria {{ $category->name }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
                    <!-- Card Body -->
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><a href="#" target="_blank">{{  $category->created_at  }}</a></td>
                            </tbody>
                        </table>
                    </div>
                </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('categories.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="#" class="btn btn-sm btn-twitter"> Editar </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end third-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@include('layouts.footer')