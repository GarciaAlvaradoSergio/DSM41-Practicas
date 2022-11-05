@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Libro Altas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>


  <!-- Content Row -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{ route('books.store')  }}" method="post" class="form-horizontal">
            @csrf
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title">Libro</h4>
                <p class="card-category">Ingresar datos</p>
              </div>
              <div class="card-body">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif --}}
                <div class="row">
                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="title" placeholder="Ingrese su nombre"
                      value="{{ old('name') }}" autofocus>
                    @if ($errors->has('title'))
                    <span class="error text-danger" for="input-name">{{ $errors->first('title') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="description" placeholder="Ingrese la descripción"
                      value="{{ old('description') }}">
                    @if ($errors->has('description'))
                    <span class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <label for="content" class="col-sm-2 col-form-label">Contenido</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="content" placeholder="Ingrese su contenido"
                      value="{{ old('email') }}">
                    @if ($errors->has('content'))
                    <span class="error text-danger" for="input-content">{{ $errors->first('content') }}</span>
                    @endif
                  </div>
                </div>
                <div class="row">
                  <label for="" class="col-sm-2 col-form-label">Categoria:</label>
                  <select class="form-control" name='category_id' id="">
                    @foreach ($categories as $category )
                    <option class="form-control" value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="row">
                  <label for="" class="col-sm-2 col-form-label">Estudiante:</label>
                  <select class="form-control" name='user_id' id="">
                    @foreach ($users as $user )
                    <option class="form-control" value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="row">
                  <label for="date" class="col-sm-2 col-form-label">Fecha</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control" name="date">
                    @if ($errors->has('date'))
                    <span class="error text-danger" for="input-date">{{ $errors->first('date') }}</span>
                    @endif
                  </div>
                </div>
              </div>
              <!--Footer-->
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
              <!--End footer-->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>





  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@include('layouts.footer')