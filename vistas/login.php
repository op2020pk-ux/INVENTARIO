<div style="
    margin: 0;
    padding: 0;
    /* Añadimos un fondo azul oscuro (#091c47) para que combine perfectamente si la imagen se reduce */
    background-color: #000000;
    
    /* Mantenemos el filtro oscuro sobre la imagen */
    background-image: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url('img/Otra.jpg');
    
    /* CAMBIO CLAVE: Cambiamos a 85% para que la imagen se reduzca y no se corte en los bordes */
    background-size: 85% auto;
    
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
">

	<div class="main-container" style="width: 100%; max-width: 400px; padding: 15px;">

		<form class="box login" action="" method="POST" autocomplete="off" style="box-shadow: 0 10px 25px rgba(0,0,0,0.5);">
			<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

			<div class="field">
				<label class="label">Usuario</label>
				<div class="control">
					<input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
				</div>
			</div>

			<div class="field">
				<label class="label">Clave</label>
				<div class="control">
					<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
				</div>
			</div>

			<p class="has-text-centered mb-4 mt-3">
				<button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
			</p>

			<?php
				if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
					require_once "./php/main.php";
					require_once "./php/iniciar_sesion.php";
				}
			?>
		</form>

	</div>

</div>