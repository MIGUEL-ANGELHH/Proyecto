<div class="login-container container">
        <form class="FormularioAjax" action="" method="POST" autocomplete="on" enctype="multipart/form-data">

        <input type="hidden" name="modulo_usuario" value="registrar">
          <h1>Registro de usuario</h1>  
            <div class="form-text">Ingrese su nombre.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre" required>
          </div> 
          <div class="form-text">Ingrese un correo valido.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-envelope"></i></i></span>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
          </div> 
          <div class="form-text">Ingrese una contraseña segura.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-lock "></i></span>
            <input type="password" class="form-control" placeholder="Contraseña" minlength="8" maxlength="15" required>
          </div> 
          <div class="form-text">Confirme su contraseña.</div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa-solid fa-lock "></i></span>
            <input type="password" class="form-control" placeholder="Contraseña" minlength="8" maxlength="15" required>
          </div> 
        <div class="form-buttons">
            <button type="submit" class="btn btn-primary register">Registrarse</button>
            <button type="reset" class="btn btn-primary">Cancelar</button>
        </div>
            
        
        </form>
      </div> 