<section>
<div class="jumbotron jumbotron-fluid jumbo-bg-4">
  <div class="container">
    <h1 class="jumbo-title">Iniciar Session</h1>
  </div>
</div>


  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5  bg-light">

          <form class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="Username" placeholder="Nombre de usuario">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Iniciar Sesion</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">¿No tiene
              cuenta? <a href="<?= base_url('registro');?>" class="text-dark fw-bold"> Crea una cuenta</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>