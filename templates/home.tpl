{include file="header.tpl"}

<div class="row">
    <div class="container col-md-5">
        <div class="row text-center margen1">
            <div class="mx-auto col-md-12">
                <img src="./images/perfil.png" class="rounded-circle mx-auto perfil" alt="Avatar">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 ml-4">
                <hr class="mr-5">
                <h1 class="text-justify lato">Manuel <span class="latoB">Garcia Amaro</span></h1>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-10  ml-4">
                <p class="text-justify lato">Estudiante de la carrera TUDAI (Tecnicatura Universitaria en
                    Desarrollo de Aplicaciones Web),</p>
            </div>
        </div>
    </div>
    <div class="col-md-7 bg-dark lato altoBackground ">
        <nav class="navbar navbar-expand-lg navbar-dark  ">
            <a class="navbar-brand scrollN unscrolledLink text-white" href="/">Manuel Garcia Amaro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active">
                        <a class="nav-link text-white mr-4" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white mr-4" href="#">Software</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white " href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row margen5 p-5">
            <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control fondoGris" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control fondoGris" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control fondoGris" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



{include file="footer.tpl"}