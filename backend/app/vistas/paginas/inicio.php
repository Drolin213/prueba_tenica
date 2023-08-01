<?php require_once RUTA_APP . '/vistas/inc/header.php'; ?>

<main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar a la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>  

            <!--=====FORMULARIO DE LOGIN Y REGGISTRO DE USUARIOS=====-->
            <div class="contenedor__login-register">
                <!--===== LOGIN =====-->
                <form action="<?php echo RUTA_URL?>/Login/ValidarUsuario" class="formulario__login" method="POST">
                    <h2>Iniciar Sesion</h2>
                    <input type="email" name="correo" placeholder="Ingresar Correo" required>
                    <input type="password" name="contraseña" placeholder="Ingresar contraseña" required>
                    <button type="submit">Ingresar</button>
                </form>

                <!--===== REGISTRO DE USUARIOS =====-->
                <form action="<?php echo RUTA_URL?>/Login/Registrar" class="formulario__register" method="POST">
                    <H2>Registrarse</H2>
                    <input type="text" name="name" placeholder="Nombre Completo" required>
                    <input type="email" name="correo" placeholder="Correo Electronico" required>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="text" name="telefono" placeholder="Telefono" required>
                    <input type="password" name="contraseña" placeholder="Contraseña" required>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>        
    </main>
<?php require RUTA_APP . '/vistas/inc/footer.php'; ?>