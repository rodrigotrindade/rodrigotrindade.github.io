<?php /* Section: home */ ?>
<style>
    html,body{ background-color: #091C32; }
    #home{ background-color: #091C32; height: 640px; }
    .aberturadir{ padding-left: 80px; padding-top: 1rem; }
    .aberturadir *{ color: #FFF !important; }
    .aberturadir h1{ line-height: 1.2; font-size: 2.45rem; }
    .aberturadir h6{ font-size: 1.45rem; }
    .aberturadir ul{ margin: 2rem 0; }
    .aberturadir ul li{ font-size: 1.7rem; margin-bottom: 10px; line-height: 1.3; }
    .aberturaesq{ padding-top: 6rem; }
    .aberturaesq a{ color: #CCC !important; font-size: 1.7rem; }
    .aberturaesq img{ margin-bottom: 8rem; }
    .aberturaesq span{ color: #FFF; }
    .aberturaesq a i{ margin-right: 10px; }
    .bg-es{ border-radius: 20px; border: 2px solid #CCC; margin-top: 5px; }
    .desktop{ display: block; }
    .mobile{ display: none; padding-top: 4rem; }
    @media only screen and (max-width: 600px) {
        .mobile{ display: block; padding-top: 10rem; }
        .desktop{ display: none; }
        .aberturadir{ padding-left: 60px; padding-top: 0; -webkit-margin-before: -8rem !important; }
        .logo-grande{ display: none; }
        .menuzord-brand{ width: 50%; }
        #home .container{ padding-top: 10px !important; }
    }
    @media only screen and (min-width: 605px) {
        .mobile{ display: none; }
        .desktop{ display: block; }
        .aberturadir{ padding-left: 80px; padding-top: 1rem; }
        .logo-grande{ display: block; } 
    }
    .header-nav-wrapper,
    .menuzord-menu .menu-item{ background-color: #002843; }
    .safari{ -webkit-margin-before: 15rem !important; }
</style>
<section id="home">
    <div class="container">
        <div class="row">
            <div class="aberturaesq desktop col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                <img src="<?php bloginfo('template_url'); ?>/images/logo-entrada-segura_500.png" alt=""> 
                <span>Saiba mais:</span><br>
                <div class="bg-es">
                    <a href="https://instagram.com/entrada.segura" target="_blank" title="Instagram"><i class="fa fa-instagram"></i>entrada.segura</a>
                </div>
            </div>
            <div class="aberturadir col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <?php dynamic_sidebar("homepagedir"); ?> 
                <!-- <h1>
                UMA NOVA FORMA DE ACESSAR
CONDOMÍNIOS RESIDENCIAIS E
COMERCIAIS.
                </h1>
                <ul>
                    <li>Surpreendentemente tecnológico e
inovador</li>
                    <li>Sem a necessidade de aplicativo,
antecipamos etapas para reduzir filas e
priorizar a segurança</li>
                    <li>Conectamos deliveries e visitantes à
portaria dos condomínios</li>
                </ul>
                <h6>Acesso rápido | Dados protegidos.</h6> -->
            </div>
            <div class="aberturaesq mobile col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 text-center">
                <img class="logo-grande" src="<?php bloginfo('template_url'); ?>/images/logo-entrada-segura_500.png" alt=""> 
                <span>Saiba mais:</span><br>
                <div class="bg-es">
                    <a href="https://instagram.com/entrada.segura" target="_blank" title="Instagram"><i class="fa fa-instagram"></i>entrada.segura</a>
                </div>
            </div>
        </div>
    </div>
</section>  

<script type="text/javascript">
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('CriOS') == -1) {
    const abertura = document.querySelector(".aberturadir");
    abertura.classList.add("safari");
}
</script>