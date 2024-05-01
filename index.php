<?php
include ('app/config.php');
include ('layout/parte1.php');
include ('app/controllers/productos/listado_de_productos.php');
?>

  <section>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://images.pexels.com/photos/19145885/pexels-photo-19145885/free-photo-of-mujer-trabajando-perro-mascota.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" height="600px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="<?php echo $URL;?>/reservas.php" class="btn btn-outline-info btn-lg">Reservar Cita</a>
              <br><br>
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.pexels.com/photos/6234622/pexels-photo-6234622.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  height="600px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://images.pexels.com/photos/6235017/pexels-photo-6235017.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"  height="600px" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


<section class="info">
   <div class="container">
     <div class="row">
            <div class="col-md-6 col-sm-12">
              <br><br>
            <center><img src="public/img/logosinfondokingpet.png" alt="" width="420" height="350"></center>
            </div>
            <div class="col-md-6 col-sm-12">
              <br><br>
              <h1>Acerca de Nuestra <span style="color: #45a7fe;">Clinica De Mascotas</span></h1>
            
            <p style="text-align: justify;">
              Descubre King Pet, tu destino confiable para el cuidado veterinario de calidad. Con un equipo dedicado y servicios personalizados, nos comprometemos a mantener la salud y felicidad de tus mascotas. Desde exámenes de rutina hasta tratamientos especializados, estamos aquí para cada necesidad de tu compañero peludo. Nuestras instalaciones acogedoras y nuestro enfoque en la prevención hacen que cada visita sea cómoda y educativa. Únete a nuestra familia en King Pet, donde cada mascota es tratada con el amor y la atención que se merece.</p>
            <a href=""class="btn btn-outline-primary zoomP">Mas Sobre Nosotros</a>
            
            </div>
     </div>

   </div>
  
</section>

    <section class="our-services" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <br><br>
                    <center>
                        <h1>Nuestros  <b style="color: #45a7fe;" >Productos</b></h1>
                        <br><br>
                    </center>

                </div>
            </div>
            <div class="row">

                <?php
                foreach ($productos as $producto) {
                    ?>
                    <div class="col-md-3 zoomP">
                        <div class="card">
                            <img src="<?=$URL."/public/img/productos/".$producto['imagen'];?>"
                                 height="250px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$producto['nombre_producto'];?></h5>
                                <p class="card-text"><?=$producto['descripcion'];?></p>
                                <p style="color: #0c84ff"><b>$. <?=$producto['precio_venta'];?></b></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <br>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <br>
    </section>

<section class="our-services">
  <div class="container">
  <div class="row">
     <div class="col-md-12 ">
        <br><br>
        <center>
         <h1>Nuestros  <b style="color: #45a7fe;" >Servicios</b></h1>
         <br><br>
        </center>

     </div>
  </div>
  <div class="row">
    <div class="col-md-3 zoomP">
      <div class="card">
        <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
        height="250px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Venta de productos-Tienda local</h5>
          <p class="card-text">Acercate a nuestra tienda y tendras los mejores productos para el cuidado de tu mascota</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <br>
    </div>
    <div class="col-md-3 zoomP">
      <div class="card">
        <img src="https://images.pexels.com/photos/54632/cat-animal-eyes-grey-54632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
        height="250px" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Servicios veterinarios</h5>
          <p class="card-text">Agenda tus servicios como lavado, corte de pelo, revision medica u otros servicios</p>
            <br>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
      <br>
    </div>
    <div class="col-md-3 zoomP" >
      <div class="card" >
        <img src="https://images.pexels.com/photos/2253275/pexels-photo-2253275.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
        height="250px" class="card-img-top"   alt="">
        <div class="card-body">
          <h5 class="card-title">Otros servicios veterinarios</h5>
          <p class="card-text">aqui texto sobre otro servicios</p>
            <br><br>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <br>
  </div>
    <div class="col-md-3">
      <img src="public/img/logo1001.png" 
        height="100%" class="card-img-top"  alt="" >
    </div>
  </div>
  </div>
</section>
  
  
<section class="gallery">
<div class="container">
  <br><br>
  <center>
  <h1>Nuestra <b style="color: #45a7fe;">Galeria</b></h1>
  </center>
  <br>
  <div class="row">
     <div class="col-md-4 zoomP">
      <center>
        <img src="https://cdn.pixabay.com/photo/2016/02/10/13/10/dog-1191676_1280.jpg" 
         width="100%" height="350px"   alt="">
         <br><br>
      </center>
     </div>
     <div class="col-md-8 zoomP">
      <center>
        <img src="https://cdn.pixabay.com/photo/2024/01/20/06/06/ai-generated-8520393_1280.png" 
       width="100%"  height="350px"   alt="">
      </center>
     </div>
  </div>
  <div class="row">
    <div class="col-md-4 zoomP">
      <center>
        <img src="https://cdn.pixabay.com/photo/2020/03/26/10/35/domestic-cat-4969984_1280.jpg" 
        width="100%" height="250px" alt="">
      </center>
    </div>
    <div class="col-md-4 zoomP">
      <center>
        <img src="https://cdn.pixabay.com/photo/2020/03/18/06/05/pet-4942796_1280.jpg" 
        width="100%" height="250px" alt="">
      </center>
    </div>
    <div class="col-md-4 zoomP">
      <center>
        <img src="https://cdn.pixabay.com/photo/2016/01/30/12/16/kitten-1169507_1280.jpg"
       width="100%" height="250px"    alt="">
      </center>
    </div>

  </div>
</div>
<br><br>
</section>
  
  
<section class="testimonios">
    <div class="container">
      <br>
      
      <h1 style="text-align: center;">Testimonios De <b style="color: #45a7fe;">Clientes</b></h1>
      
      <br><br>
     <div class="row">
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 1</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 2</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 3</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 4</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 5</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 6</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 7</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 8</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
              <div class="col-md-4 zoomP">
                <div class="card">
                  <img src="https://img.freepik.com/foto-gratis/lindo-mascota-collage-aislado_23-2150007407.jpg?t=st=1713845611~exp=1713849211~hmac=c4d33249eb0dd94efcc386079bfb8dff6ca0f2074cc2486c6768b75445bd26c7&w=826" 
                  height="250px" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Testimonio Cliente 9</h5>
                    <p class="card-text">texto sobre el testimonio del cliente</p>
                  </div>
                </div>
                <br>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     </div>

    </div>
</section>
  
  
  <section class="ubicacion">
     <div class="container">
      <br><br><h1 style="text-align: center;">Encuentranos <b style="color: #45a7fe;">Aqui</b></h1><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7886.958577453613!2d-75.86597448936915!3d8.740892542893516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a30279ec8f6cf%3A0xecf9c808dc1ea78d!2sCentro%20Comercial%20Nuestro%20Monter%C3%ADa!5e0!3m2!1ses-419!2sco!4v1713903384013!5m2!1ses-419!2sco" 
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
  </section>
<br><br>
  


<?php
include ('layout/parte2.php');
include('admin/layout/mensaje.php');
?>
  
