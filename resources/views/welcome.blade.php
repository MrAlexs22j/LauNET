@extends('layouts.Welcome.plantilla')

@section('welcome')

<div class="hero-wrap js-fullheight">
    <div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(/assets/landing/images/lock.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-7 ftco-animate">
                  <div class="text w-100">
                      <h2>BIENVENIDO A LAUNET</h2>
                    <h1 class="mb-4">Su proveedor total</h1>
                    <p><a href="#" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(/assets/landing/images/login.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center">
              <div class="col-md-7 ftco-animate">
                  <div class="text w-100">
                      <h2>ATENCION AL CLIENTE</h2>
                    <h1 class="mb-4 color-white">Nos descatacamos por nuestro buen servicio y atención al usuario</h1>
                    <p><a href="#" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Contáctanos</a></p>
                </div>
              </div>
            </div><strong></strong>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(/assets/landing/images/register.jpg);">
          <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-end">
              <div class="col-md-6 ftco-animate">
                  <div class="text w-100">
                      <h2>NUETRO AMBIENTE DE TRABAJO</h2>
                    <h1 class="mb-4">Contamos con los mejores espacios de trabajo</h1>
                    <p><a href="#" class="btn btn-primary">ver más</a> <a href="#" class="btn btn-white">Cotactenos</a></p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
          <div class="nav-center">
            <ul class="nav nav-pills nav-pills-warning nav-pills-icons" role="tablist">
                        <!--
            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
        -->
        <li>
            <a href="#description-1" role="tab" data-toggle="tab">
                <i class="material-icons">info</i> Acerca de nosotros
            </a>
        </li>
        <li class="">
            <a href="#schedule-1" role="tab" data-toggle="tab">
                <i class="material-icons">location_on</i> Encuentrenos
            </a>
        </li>
        <li>
            <a href="#tasks-1" role="tab" data-toggle="tab">
                <i class="material-icons">gavel</i> Herramientas
            </a>
        </li>
        <li>
            <a href="#tasks-2" role="tab" data-toggle="tab">
                <i class="material-icons">phone_paused</i> Directorio
            </a>
        </li>
    </ul>
</div>
<div class="tab-content">
  <div class="tab-pane" id="description-1">
      <div class="card">
          <div class="empresa-texto-izquierdo">
              <div class="item-nosotros">
                  <div class="col-4">
                      <h2><b>Nosotros</b></h2>    
                      <span></span>   
                  </div>
                  <div class="col-8">
                      <div>
                          <p>Laumayer Colombiana Comercializadora S.A es una compañía con 40 años de experiencia dedicada a la comercialización de productos para el sector eléctrico, redes y comunicaciones, iluminación y seguridad electrónica, cuenta con 6 agencias comerciales en Colombia, además de su sede en Ecuador, cobertura que facilita la entrega oportuna de nuestros productos y soluciones a través de nuestra red de distribución.</p>
                          <p>Laumayer S.A es una empresa siempre a la vanguardia, nuestra experiencia gira entorno a construir relaciones duraderas con nuestros clientes, donde además de brindar asesoría, capacitación y acompañamiento, los apoyamos para que alcancen sus metas comerciales y empresariales.</p>
                          <p>Nuestra oferta de productos atiende las necesidades de nuestros clientes en los sectores industrial, comercial y residencial. Una de nuestras fortalezas es ofrecer al mercado la mejor oferta de productos, soluciones y proveedores a nivel internacional para la satisfacción y solución de sus necesidades.</p>
                      </div>
                  </div>
              </div>

              <div class="item-mision">
                  <div class="col-4">
                      <h2><b>Misión</b></h2>    
                      <span> </span>  
                  </div>
                  <div class="col-8">
                      <div>
                          <p>Brindamos soluciones integrales e innovadoras que añaden valor a nuestros clientes.</p>
                      </div>
                  </div>
              </div>

              <div class="item-vision">
                  <div class="col-4">
                      <h2><b>Visión</b></h2>     
                      <span> </span>  
                  </div>
                  <div class="col-8">
                      <div>
                          <p>Generar rentabilidad para garantizar la permanencia en el largo plazo brindando soluciones integrales e innovadoras, valor para nuestros clientes, calidad de vida y satisfacción para nuestros empleados.</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="politica-calidad">
              <div>
                  <div class="col-3">
                      <h2><b>Política <br>Integrada del Sistema de Gestión</b></h2>
                      <span></span>
                  </div>
                  <div class="col-4">
                      <div class="texto-politica-calidad">
                          <p>LAUMAYER S.A. empresa dedicada a brindar soluciones integrales por medio de la importación y comercialización de productos de energía, comunicaciones, iluminación y seguridad electrónica; está comprometida en mantener la satisfacción de nuestros clientes contando con un personal competente y capacitado.</p>
                          <p>LAUMAYER S.A. adopta como parte de sus compromisos la prevención de los riesgos y la seguridad de la cadena de suministro internacional, la prevención de los accidentes y enfermedades laborales, la protección del medio ambiente y la prevención de la contaminación, cumpliendo así con los requisitos legales aplicables a la compañía y garantizando una mejora continua del Sistema de Gestión Integrado.</p>
                          <p>Esta política será comunicada y divulgada a todo el personal de la organización incluyendo contratistas y visitantes.</p>
                      </div>
                  </div>
                  <div class="col-5">
                      <div class="img-pol-calidad">
                          <br>
                          <p><img class="alignnone wp-image-7615 size-full" src="https://laumayer.com/wp-content/uploads/lista1/11/fachada-laumayer.jpg" alt="" width="100" height="100">  </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="tab-pane" id="schedule-1">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title"></h4>
              <p class="category">
                  <h4><b>¿DONDE ESTAMOS UBICADOS?</b></h4> 
              </p>
          </div>
          <div class="card-content">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5035892721726!2d-75.58551318474926!3d6.197092628589801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4682446b6fa345%3A0x4b8abeddfff91c5d!2sLaumayer%20Colombiana%20Comercializadora%20S.A.!5e0!3m2!1ses!2sco!4v1623276906760!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
      </div>
  </div>
  <div class="tab-pane" id="tasks-1">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title"></h4>
              <p class="category">
                  <h4><b>HERRAMIENTAS</b></h4> 
              </p>
          </div>
          <div class="card-content">
              <div class="col-lg-3">
                  <div class="card card-pricing card-raised">
                      <div class="content">
                          <h6 class="category"><b>HelpDesk</b></h6>
                          <div class="icon icon-rose">
                              <img src="../../assets/img/HelpDesk.png" alt="">
                          </div>
                          <h3 class="card-title">Soporte</h3>
                          <p class="card-description">
                              Soporte y ayuda general a toda la empresa por medio de las TIC.
                          </p>
                          <a href="https://laumayer.com.co/glpi/" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card card-pricing card-raised">
                      <div class="content">
                          <h6 class="category"><b>Inventario</b></h6>
                          <div class="icon icon-rose">
                              <img src="../../assets/img/Inventario.png" alt="">
                          </div>
                          <h3 class="card-title">Manejo de inventarios</h3>
                          <p class="card-description">
                              Manejo de inventarios.
                          </p>
                          <a href="https://laumayer.com.co/ocsreports/" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card card-pricing card-raised">
                      <div class="content">
                          <h6 class="category"><b>Intranet</b></h6>
                          <div class="icon icon-rose">
                              <img src="../../assets/img/Intranet.png" alt="">
                          </div>
                          <h3 class="card-title">Nuestra Web</h3>
                          <p class="card-description">
                              Red privada de la empresa.
                          </p>
                          <a href="https://laumayer.com.co/laumayernews/" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="card card-pricing card-raised">
                      <div class="content">
                          <h6 class="category"><b>CRM</b></h6>
                          <div class="icon icon-rose">
                              <img src="../../assets/img/CRM.png" alt="">
                          </div>
                          <h3 class="card-title">Administración de Relaciones</h3>
                          <p class="card-description">
                              Gestión o Administración de Relaciones con el Cliente.
                          </p>
                          <a href="http://crmlaumayer.com/index.php?action=Login&module=Users" class="btn btn-rose btn-round">Ingresar<div class="ripple-container"></div></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="tab-pane" id="tasks-2">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Help center</h4>
              <p class="category">
                  More information here
              </p>
          </div>
          <div class="card-content">
              From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.
              <br />
              <br /> Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.
          </div>
      </div>
  </div>
</div>
	
	@endsection