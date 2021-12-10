<div class='text-center txt-nunito'>
	<!-- TITLE -->
	<h1 class="title txt-dec-underline-blue">JaGo</h1>
	<h4 class="slogan">Ready you go!</h4>

	<!-- CAROUSEL -->
	<div class="mb-5 mx-auto justify-content-center">
		<div id="carrouselHome" class="carousel slide w-75 mx-auto" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner rounded">
				<div class="carousel-item active">
					<img src="<?php echo base_url('./Images/c.png') ?>" class="d-block w-100" alt="one">
					<div class="carousel-caption d-none d-md-block rounded-pill" style="background-color: rgba(0, 0, 0, 0.5)">
						<h5>Mais Qualidade</h5>
						<p>Facilidade e confiança na embarcação</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('./Images/b.png') ?>" class="d-block w-100" alt="two">
					<div class="carousel-caption d-none d-md-block rounded-pill" style="background-color: rgba(0, 0, 0, 0.5)">
						<h5>Mais rápidez</h5>
						<p>Maior velocidade na embarcação</p>
					</div>
				</div>
				<div class="carousel-item ">
					<img src="<?php echo base_url('./Images/a.png') ?>" class="d-block w-100" alt="three">
					<div class="carousel-caption d-none d-md-block rounded-pill" style="background-color: rgba(0, 0, 0, 0.5)">
						<h5>Sem filas</h5>
						<p>Com maior velocidade consequentemente irá acabar ou ao menos diminuir as filas de embarque</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carrouselHome" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carrouselHome" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Próximo</span>
			</button>
		</div>
	</div>

	<hr />

	<!-- CARDS -->
	<h1 class="txt-dec-underline-blue mt-3">Serviços</h1>
	<div class="ms-3 row row-cols-1 row-cols-md-3 g-4 text-center justify-content-center">
		<div class="col">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo base_url('./Images/prototipo_card.png'); ?>" class="card-img-top img-fluid" alt="Validador" width="250">
				<hr />
				<div class="card-body">
					<h5 class="card-title txt-dec-underline-blue">Validador</h5>
					<p class="card-text">Validador RFID para embarque de passageiros.</p>
					<hr />
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalValidador">
						Saiba Mais
					</button>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo base_url('./Images/lab_card.png'); ?>" class="card-img-top img-fluid" alt="Sistema Whitelabel" width="250">
				<hr />
				<div class="card-body">
					<h5 class="card-title txt-dec-underline-blue">Sistema whitelabel</h5>
					<p class="card-text">Sistema de cadastro padrão ou personalizado.</p>
					<hr />
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalWhiteLbl">
						Saiba Mais
					</button>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
				<img src="<?php echo base_url('./Images/partnership.png'); ?>" class="card-img-top" alt="Parceria" height="220" width="215">
				<hr />
				<div class="card-body">
					<h5 class="card-title txt-dec-underline-blue">Parceria</h5>
					<p class="card-text">Seja um parceiro. Faça parte de nossa jornada.</p>
					<hr />
					<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalParceria">
						Saiba Mais
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalValidador" tabindex="-1" aria-labelledby="modalValidadorLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalValidadorLabel">Validador - Detalhes</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center">
				<img src="<?php echo base_url('./Images/saibamais_validador1.png'); ?>" class="img-fluid" alt="Validador" height="500">
				<p>O validador veio como uma solução para reduzir o tempo de espera nos embarques, verificando quem está ou não 
				presente de forma extremamente rápida que consequentemente reduz filas e transtornos na hora da embarcação.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalWhiteLbl" tabindex="-1" aria-labelledby="modalWhiteLblLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalWhiteLblLabel">Sistema Whitelabel - Detalhes</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center">
				<img src="<?php echo base_url('./Images/whitelabel_saibamais.png'); ?>" class="img-fluid" alt="Whitelabel" height="500">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modalParceria" tabindex="-1" aria-labelledby="modalParceriaLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalParceriaLabel">Parcerias - Detalhes</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body text-center">
				<img src="<?php echo base_url('./Images/partnership.png'); ?>" class="img-fluid w-50" alt="Parceria" height="250">
				<p>Atualmente buscamos parcerias em empresas de transporte de pequeno a médio porte, mais detalhes em breve</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>