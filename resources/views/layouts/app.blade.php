<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cabinet d'optique médicale à Bafoussam, Cameroun. Lunettes médicales, accessoires optiques, montage, réparation et conseil. Jusqu'à 50% de remise.">
    <title>@yield('title', 'New Optic Vision Médical - Cabinet d\'Optique Médicale')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>

    {{-- HEADER / NAVIGATION --}}
    <header id="main-header">
        <div class="container navbar">
            <div class="logo">New Optic <span>Vision</span></div>
            <ul class="nav-links" id="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">À Propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#localisation">Localisation</a></li>
            </ul>
            <a href="tel:679893519" class="btn-call">Appeler maintenant</a>
        </div>
    </header>

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER --}}
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>New Optic Vision Médical</h4>
                    <p>Votre cabinet d'optique médicale de confiance.</p>
                    <p><em>"Votre Partenaire Santé pour la Vue à Vie"</em></p>
                </div>
                <div class="footer-col">
                    <h4>Localisation</h4>
                    <p>📍 Situé aux Arcades de l'Ouest</p>
                    <p>Face entrée Friperie Marché « A »</p>
                    <p>Bafoussam, Cameroun</p>
                </div>
                <div class="footer-col">
                    <h4>Contactez-nous</h4>
                    <p>📞 Téléphones :</p>
                    <p class="phone-numbers">679 89 35 19 / 677 89 12 19</p>
                </div>
            </div>
            <div class="copyright">
                &copy; {{ date('Y') }} New Optic Vision Médical. Tous droits réservés.
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>