<header>		
	<nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top animated fadeInDown slow delay-2s" id="navbar">
		<a class="navbar-brand" href="#">
			<img src="{{ asset('img/logo.jpg')}}" alt="logo" class="rounded-circle w-25 logo" id="navbar_home">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#" id ="navbar_biblioteca">Biblioteca<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#tendencias" id ="navbar_tendencias">Tendencias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#recomendados" id ="navbar_recomendados">Recomendados</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#novedades" id ="navbar_novedades">Novedades</a>
				</li>
				<!-- <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#estilos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Estilos
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Flamenco</a>
					<a class="dropdown-item" href="#">Rap</a>
					<a class="dropdown-item" href="#">Rock</a>
					<a class="dropdown-item" href="#">Reggaeton</a>
				</div>
				</li> -->
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar..</button>
			</form>
		</div>
	</nav>
</header>
