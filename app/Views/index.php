<div class='text-center txt-nunito'>
<!-- TITLE -->
<h1 class="title txt-dec-underline-blue" >JaGo</h1>
<h4 class="slogan">Ready you go!</h4>

    <!-- CAROUSEL -->
    <div class="mb-5">
        <div id="carrouselHome" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('./Images/a.jpg') ?>" width="300" height="450" class="d-block w-100" alt="one">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('./Images/Whitelabel.png') ?>" width="300" height="450" class="d-block w-100" alt="two">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('./Images/c.jpg') ?>" width="300" height="450" class="d-block w-100" alt="three">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carrouselHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carrouselHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <hr/>

    <!-- CARDS -->
    <h1 class="txt-dec-underline-blue mt-3">Serviços</h1>
    <div class="ms-3 row row-cols-1 row-cols-md-3 g-4 text-center">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo base_url('./Images/prototipo_1.jpeg');?>" class="card-img-top" alt="Validador"  height="250">
                <hr/>
                <div class="card-body">
                    <h5 class="card-title txt-dec-underline-blue">Validador</h5>
                    <p class="card-text">Validador RFID para embarque de passageiros.</p>
                    <hr/>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo base_url('./Images/lab2.png');?>" class="card-img-top" alt="Sistema Whitelabel" height="250">
                <hr/>
                <div class="card-body">
                    <h5 class="card-title txt-dec-underline-blue">Sistema whitelabel</h3>
                    <p class="card-text">Sistema de cadastro padrão ou personalizado.</p>
                    <hr/>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?php echo base_url('./Images/partnership.png');?>" class="card-img-top" alt="Parceria" height="250">
                <hr />
                <div class="card-body">
                    <h5 class="card-title txt-dec-underline-blue">Parceria</h5>
                    <p class="card-text">Seja um parceiro. Faça parte de nossa jornada.</p>
                    <hr/>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>
</div>