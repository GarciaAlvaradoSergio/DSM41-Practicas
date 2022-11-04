@yield('container')
@include('layouts.menu')

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="row" style="justify-content: center">
    <div class="card text-center">
      <div class="card-body">
        <form class="row gy-2 gx-3 align-items-center">
          <div class="col-auto" style="justify-content:center">
            <div class="input-group">
              <input style="width: 20rem;" type="text" class="form-control" id="autoSizingInputGroup"
                placeholder="Titulo">
              <a href="">
                <div class="input-group-text"><i class="fa-solid fa-image" style="margin: 4px;"></i></div>
              </a>
            </div>
          </div>
      </div>
    </div>
    </form>
  <div class="row" style="justify-content: center">
    <div class="search-box">
      <input type="text" placeholder="Titulo..." class="search-input" />
      <input type="text" placeholder="Crear una nota..." class="search-input-note" />
      <a href="#" class="search-btn">
        <i class="fa-solid fa-pen-to-square"></i>
      </a>
    </div>
  </div>

  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->