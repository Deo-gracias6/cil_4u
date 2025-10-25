<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CIL&ASSOCIÉS - Expertise Multisectorielle</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="lib/animate/animate.min.css"/>
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon1.png">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <?php include 'nav.php'; ?>
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item position-relative">
            <img src="img/echange.jpg" class="img-fluid w-100" alt="Commerce & Import-Export">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <div class="container text-center">
                    <h5 class="text-uppercase text-primary fw-bold mb-3 text-white-50">CIL&ASSOCIÉS</h5>
                    <h1 class="display-4 text-white fw-bold mb-4">Simplifiez vos échanges commerciaux avec nous</h1>
                    <p class="fs-5 text-white-50 mb-4">
                        Spécialistes de l'import-export, nous vous connectons aux marchés mondiaux avec professionnalisme et sécurité.
                    </p>
                    <div class="d-flex justify-content-center flex-wrap mb-4">
                        <a href="#services" class="btn btn-outline-light rounded-pill py-2 px-4 me-2">
                            <i class="fas fa-briefcase me-2"></i>Nos services
                        </a>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php"> Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-carousel-item position-relative">
            <img src="img/btp.jpg" class="img-fluid w-100" alt="Prestations Intellectuelles">
            <div class="carousel-caption d-flex align-items-center justify-content-center">
                <div class="container text-center">
                    <h5 class="text-uppercase text-primary fw-bold mb-3 text-white-50">Expertise & Conseil</h5>
                    <h1 class="display-4 text-white fw-bold mb-4">Accompagnement stratégique sur mesure</h1>
                    <p class="fs-5 text-white-50 mb-4">
                        Profitez de nos compétences en gestion, fiscalité, BTP, formation et digitalisation pour atteindre vos objectifs.
                    </p>
                    <div class="d-flex justify-content-center flex-wrap mb-4">
                        <a href="#intellectuel" class="btn btn-outline-light rounded-pill py-2 px-4 me-2">
                            <i class="fas fa-lightbulb me-2"></i>En savoir plus
                        </a>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php"> Nous joindre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="rounded-4 overflow-hidden shadow-sm">
                        <img src="img/apropos.jpg" alt="Présentation de CIL&ASSOCIÉS" class="img-fluid w-100 object-fit-cover">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h4 class="text-primary fw-bold text-uppercase">CIL&ASSOCIÉS</h4>
                    <h2 class="fw-bold text-dark mb-4">Une expertise multisectorielle au service de vos ambitions</h2>
                    <p class="text-muted mb-4">
                        Chez CIL&ASSOCIÉS, nous croyons que la performance repose sur la synergie entre vision stratégique et action opérationnelle.
                    </p>

                    <div class="row mb-4">
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex">
                                <i class="fas fa-user-check text-primary fa-lg me-3"></i>
                                <h6 class="mb-1 fw-semibold">Approche Personnalisée</h6>
                            </div>
                            <p class="small text-muted mb-0">Un accompagnement adapté à chaque client et à chaque projet.</p>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="d-flex">
                                <i class="fas fa-star text-primary fa-lg me-3"></i>
                                <h6 class="mb-1 fw-semibold">Expérience & Qualité</h6>
                            </div>
                            <p class="small text-muted mb-0">Une équipe multidisciplinaire, des résultats concrets.</p>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-md-row align-items-start gap-3">
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#services"> Voir nos services</a>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt text-primary fa-lg me-3"></i>
                            <div>
                                <small class="text-muted">Appelez-nous</small>
                                <p class="mb-0 fw-bold">+229 01 45 02 45 45</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="services" class="container pb-5">
        <div class="container text-center">
            <div class="mx-auto mb-5" style="max-width: 750px;">
                <h4 class="text-primary fw-bold text-uppercase">NOS DOMAINES</h4>
                <h2 class="fw-bold text-dark mb-3">Des expertises au service de votre performance</h2>
            </div>
        </div>

       <div class="row g-4">
    <div class="col-md-6 col-lg-4 d-flex flex-column">
        <div class="service-item h-100 d-flex flex-column">
            <div class="service-img">
                <img src="img/import.jpg" class="img-fluid rounded-top w-100" alt="Commerce & Import-Export">
            </div>
            <div class="rounded-bottom p-4 d-flex flex-column flex-grow-1">
                <h4>Commerce & Import-Export</h4>
                <p class="mb-4 flex-grow-1">
                    Nous facilitons vos échanges internationaux avec des solutions d'approvisionnement, de logistique douanière et de distribution intégrée.
                </p>
                <div class="mt-auto">
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="commerce.php">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 d-flex flex-column">
        <div class="service-item h-100 d-flex flex-column">
            <div class="service-img">
                <img src="img/livraison.jpg" class="img-fluid rounded-top w-100" alt="Transport & Logistique">
            </div>
            <div class="rounded-bottom p-4 d-flex flex-column flex-grow-1">
                <h4>Transport & Logistique</h4>
                <p class="mb-4 flex-grow-1">
                    Des services de transport urbain, marchandises et livraison express, appuyés par des outils numériques pour un suivi en temps réel.
                </p>
                <div class="mt-auto">
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="transport.php">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 d-flex flex-column">
        <div class="service-item h-100 d-flex flex-column">
            <div class="service-img">
                <img src="img/logistique.jpg" class="img-fluid rounded-top w-100" alt="Prestations intellectuelles">
            </div>
            <div class="rounded-bottom p-4 d-flex flex-column flex-grow-1">
                <h4>Prestations Intellectuelles</h4>
                <p class="mb-4 flex-grow-1">
                    Conseil, assistance BTP, audit, formations et accompagnement à la digitalisation pour renforcer la performance de vos équipes et projets.
                </p>
                <div class="mt-auto">
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="prestation.php">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.service-item {
    height: 100%;
    display: flex;
    flex-direction: column;
}
.service-img img {
    height: 200px; /* Ajustez cette valeur selon vos besoins */
    object-fit: cover;
    width: 100%;
}
</style>
    </div>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h4 class="text-primary fw-bold text-uppercase">Ce que nous vous offrons</h4>
            <h2 class="display-6 fw-semibold">Les avantages de collaborer avec CIL&ASSOCIÉS</h2>
            <p class="text-muted mt-3">
                Plus qu'un prestataire, CIL&ASSOCIÉS est votre partenaire stratégique, engagé dans la réussite de vos projets.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="bg-white shadow-sm rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fa fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Expertise multisectorielle</h5>
                    <p class="text-muted">
                        Une équipe expérimentée dans les domaines du commerce, de la logistique, du BTP et du conseil stratégique.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="bg-white shadow-sm rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fa fa-cogs fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Solutions sur mesure</h5>
                    <p class="text-muted">
                        Nous concevons des approches personnalisées, adaptées à vos besoins, vos objectifs et votre secteur.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="bg-white shadow-sm rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fa fa-hands-helping fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Accompagnement complet</h5>
                    <p class="text-muted">
                        Nous sommes présents à chaque étape du projet, du diagnostic à la mise en œuvre.
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="bg-white shadow-sm rounded p-4 text-center h-100">
                    <div class="mb-3">
                        <i class="fa fa-check-circle fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold">Rigueur professionnelle</h5>
                    <p class="text-muted">
                        Transparence, respect des délais et qualité sont au cœur de notre démarche.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="collapseTwo" class="tab-pane fade p-0">
            <div class="row g-4">
                <div class="col-md-7">
                    <img src="img/offer-surmesure.jpg" class="img-fluid w-100 rounded" alt="Solutions personnalisées">
                </div>
                <div class="col-md-5">
                    <h1 class="display-6 mb-4">Adaptées à vos enjeux réels</h1>
                    <p class="mb-4">
                        Nous concevons des réponses ajustées à votre structure, votre secteur d'activité et vos objectifs stratégiques.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Discutons-en</a>
                </div>
            </div>
        </div>

        <div id="collapseThree" class="tab-pane fade p-0">
            <div class="row g-4">
                <div class="col-md-7">
                    <img src="img/offer-accompagnement.jpg" class="img-fluid w-100 rounded" alt="Accompagnement stratégique">
                </div>
                <div class="col-md-5">
                    <h1 class="display-6 mb-4">Un soutien à chaque étape</h1>
                    <p class="mb-4">
                        Du diagnostic initial à la mise en œuvre sur le terrain, notre accompagnement reste continu, réactif et orienté résultats.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="about.php">À propos</a>
                </div>
            </div>
        </div>

        <div id="collapseFour" class="tab-pane fade p-0">
            <div class="row g-4">
                <div class="col-md-7">
                    <img src="img/offer-qualite.jpg" class="img-fluid w-100 rounded" alt="Qualité et rigueur">
                </div>
                <div class="col-md-5">
                    <h1 class="display-6 mb-4">Une exigence constante</h1>
                    <p class="mb-4">
                        Nous respectons vos délais, budgets et engagements contractuels. L'excellence est au cœur de notre culture d'entreprise.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="contact.php">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
   
    <div id="faq" class="container-fluid faq-section pb-5">
        <div class="container pb-5 overflow-hidden">
            <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                <h4 class="text-primary">FAQ</h4>
                <h1 class="display-5 mb-4">Questions Fréquemment Posées</h1>
                <p class="mb-0">
                    Vous avez des interrogations concernant nos services ou notre fonctionnement ? Voici les réponses aux questions les plus fréquentes posées à notre équipe.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="accordion accordion-flush bg-light rounded p-5" id="accordionFlushSection">
                        <div class="accordion-item rounded-top">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                                    Quels sont les services proposés par CIL&ASSOCIÉS ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Nous intervenons dans trois domaines : le commerce & import-export, le transport & logistique, et les prestations intellectuelles (conseil, audit, BTP, formation).
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                                    Est-ce que vous travaillez à l'international ?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Oui, nous avons des partenaires commerciaux et logistiques en Afrique, en Europe et en Asie. Nos activités d'import-export et d'études s'étendent au-delà des frontières béninoises.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                                    Proposez-vous des solutions sur mesure ?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Absolument. Nos services sont entièrement personnalisés selon vos besoins, votre secteur et vos objectifs. Chaque client bénéficie d'un accompagnement spécifique.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour">
                                    Est-ce que vous formez les entreprises ou les collaborateurs ?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Oui, notre pôle Prestations Intellectuelles propose des formations professionnelles adaptées : gestion, finance, fiscalité, digitalisation, BTP, etc.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item rounded-bottom">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive">
                                    Comment vous contacter pour un devis ?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushSection">
                                <div class="accordion-body">
                                    Vous pouvez nous joindre via le formulaire de contact sur le site, par email ou par téléphone. Nous vous répondrons sous 24h avec une proposition personnalisée.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-primary rounded">
                        <img src="img/associé1.jpg" class="img-fluid w-100" alt="FAQ CIL&ASSOCIÉS">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
      <script>
    // Vérifie si l'URL contient #faq au chargement
if (window.location.hash === '#faq') {
    const faqSection = document.getElementById('faq');
    if (faqSection) {
        // Défilement fluide
        faqSection.scrollIntoView({ behavior: 'smooth' });
    }
}

// Gère le clic sur les liens internes (si déjà sur index.php)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const targetId = this.getAttribute('href');
        if (targetId === '#faq' && document.getElementById('faq')) {
            e.preventDefault();
            document.getElementById('faq').scrollIntoView({ 
                behavior: 'smooth' 
            });
            // Met à jour l'URL sans recharger
            history.pushState(null, null, '#faq');
        }
    });
});</script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>
</html>