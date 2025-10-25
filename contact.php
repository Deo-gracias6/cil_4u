<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>CIL&ASSOCIÉS - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez CIL&ASSOCIÉS pour vos besoins en conseil et services professionnels">
    <link rel="icon" type="image/png" href="img/favicon1.png">

    <!-- Optimisation des polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Optimisation des icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .contact .form-control {
            border-color: rgba(1, 30, 60, 0.1);
            transition: all 0.3s;
        }
        
        .contact .form-control:focus {
            border-color: #011E3C;
            box-shadow: 0 0 0 0.25rem rgba(1, 30, 60, 0.1);
        }
        
        .icon-square {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <?php include 'nav.php'; ?>

    <!-- Header -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contactez-Nous</h4>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container-fluid contact py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Contactez-nous</h2>
                <p class="text-muted">Une équipe à votre écoute pour répondre à toutes vos questions</p>
            </div>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="bg-white rounded-4 shadow-sm p-5 h-100">
                        <h4 class="text-primary mb-4">Nos coordonnées</h4>
                        
                        <div class="d-flex mb-4">
                            <div class="icon-square bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="fas fa-map-marker-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Adresse</h5>
                                <p class="mb-0">Cotonou, Bénin</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="icon-square bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="fas fa-envelope fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Email</h5>
                                <p class="mb-0">infos@cilassocies.com</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="icon-square bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="fas fa-phone-alt fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Téléphone</h5>
                                <p class="mb-0">+229 01 45 02 45 45</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="icon-square bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="fas fa-clock fa-lg"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Horaires</h5>
                                <p class="mb-0">Lundi - Vendredi : 8h - 18h</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="bg-white rounded-4 shadow-sm p-5 h-100">
                        <h4 class="text-primary mb-4">Envoyez-nous un message</h4>
                        
                        <form action="send_email.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-2" id="name" name="name" placeholder="Votre nom" >
                                        <label for="name">Votre nom</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-2" id="email" name="email" placeholder="Votre email" >
                                        <label for="email">Votre email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
<input type="text" class="form-control border-2" id="subject" name="subject" placeholder="Sujet">
                                        <label for="subject">Sujet</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-2" placeholder="Votre message" id="message" name="message" style="height: 150px" ></textarea>
                                        <label for="message">Votre message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Envoyer le message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="rounded-4 overflow-hidden shadow-sm" style="height: 400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127989.46862852952!2d2.3130433629844984!3d6.372480036896923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102355aa206c6ea9%3A0x8e1702b4433ff4ee!2sOptimum%20Consulting%20Afrique!5e0!3m2!1sfr!2sbj!4v1753346138229!5m2!1sfr!2sbj" 
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
<script>
// Gérer les messages de confirmation après soumission
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    const message = urlParams.get('message');
    
    if (status === 'success' || status === 'error') {
        let modalTitle = 'Notification';
        let modalContent = '';
        let icon = '';
        
        if (status === 'success') {
            modalTitle = '✅ Succès';
            modalContent = 'Message envoyé avec succès ! Notre équipe vous contactera bientôt.';
            icon = '<div style="font-size: 3rem; color: #28a745; margin-bottom: 1rem;">✅</div>';
        } else if (status === 'error') {
            modalTitle = '❌ Erreur';
            modalContent = 'Une erreur s\'est produite. Veuillez réessayer.';
            icon = '<div style="font-size: 3rem; color: #dc3545; margin-bottom: 1rem;">❌</div>';
            
            if (message === 'Champs_manquants') {
                modalContent = 'Veuillez remplir tous les champs obligatoires.';
            } else if (message === 'Email_invalide') {
                modalContent = 'Veuillez saisir une adresse email valide.';
            }
        }
        
        // Afficher la modal
        document.getElementById('modalTitle').textContent = modalTitle;
        document.getElementById('modalMessage').innerHTML = icon + '<p>' + modalContent + '</p>';
        
        // Initialiser et afficher la modal Bootstrap
        const messageModal = new bootstrap.Modal(document.getElementById('messageModal'));
        messageModal.show();
        
        // Nettoyer l'URL après affichage
        window.history.replaceState({}, document.title, window.location.pathname);
        
        // Fermer la modal automatiquement après 5 secondes
        setTimeout(() => {
            messageModal.hide();
        }, 5000);
    }
});
</script>
    <!-- Scripts -->
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