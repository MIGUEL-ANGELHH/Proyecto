<nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">
            Tecnoaccesorios
          
        </a>

        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>dashboard/">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>catalogue/">CATÁLOGO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>about/">CONTACTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>login/">INICIAR SESIÓN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="<?php echo APP_URL; ?>register/">REGISTRARSE</a>
              </li>
            </ul>
          </div>
        </div>
        <a href="#" class="login-button buscar">Buscar</a>
        <a href="<?php echo APP_URL; ?>run/" class="login-button"><img src="<?php echo APP_URL; ?>app/views/img/Carrote.png" alt="carrito" class="carrito"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>