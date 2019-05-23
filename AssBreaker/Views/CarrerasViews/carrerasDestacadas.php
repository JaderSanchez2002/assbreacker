<?php $descripcion = "El Ingeniero de Sistemas es un profesional integral formado para intervenir los sistemas de información en el contexto de todos los procesos de una organización, desde las perspectivas del diseño y desarrollo de software, la gestión del recurso informático, la gerencia y calidad del software y el modelado y simulación de sistemas."; ?>

<center>
		
	<h1 class="titulo">Carreras destacadas</h1><hr><br>

	<div id="carreras">

		<?php for($i = 0; $i < 10; $i++): ?>

		<div class="carrera">
			
			<a href="#" title="Ver más">
				
				<img src="Assets/Images/carreras.jpg" alt="carrera"><br><br>

				<h2 class="titulo">Ingeniería en sistemas</h2><br>

				<p><?php echo  substr($descripcion, 0, 200); ?> ...</p><br>

				<span><b>Certificación:</b> <i>Si</i></span><br><br>

				<span><b>Codigo SNIES:</b> <i>56441</i></span><br><br>

				</a>

		</div>

		<?php endfor; ?>

	</div>

</center>