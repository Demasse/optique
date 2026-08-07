<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cabinet d'optique médicale à Bafoussam — lunettes médicales, montage, réparation, entretien gratuit. Jusqu'à -50% de remise.">
    <title>@yield('title', 'NEW OPTIC VISION MÉDICAL | Cabinet d\'Optique Médicale - Bafoussam')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>

<body>

    {{-- BANNIÈRE PROMOTIONNELLE --}}
    <div class="promo-banner">
        🔥 Offre Spéciale : Remise de prix jusqu'à -50% sur vos Lunettes Médicales à Bafoussam !
    </div>

    {{-- NAVBAR --}}
    <nav class="navbar">
        <div class="container nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7z" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                </div>
                NEW OPTIC VISION MÉDICAL<span>.</span>
            </a>

            <ul class="nav-links" id="navLinks">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#promotions">Offres Spéciales</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#produits">Produits</a></li>
                <li><a href="#contact">Contact & Lieu</a></li>
            </ul>

            <div style="display: flex; gap: 10px; align-items: center;">
                <a href="https://wa.me/237679893519" target="_blank" class="btn btn-whatsapp">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z" />
                    </svg>
                    WhatsApp
                </a>
                <button class="mobile-toggle" id="menuBtn" aria-label="Ouvrir le menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    {{-- PAGE CONTENT --}}
    @yield('content')

    {{-- FOOTER ANTHRACITE HARMONISÉ --}}
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>Cabinet NEW OPTIC VISION MÉDICAL</h3>
                    <p style="margin-top: 6px; font-size:0.85rem; color:#94A3B8;">"Votre Partenaire Santé pour la Vue à
                        Vie"</p>
                    <p style="margin-top: 10px; font-size:0.8rem; color:#64748B;">Cabinet d'Optique Médicale à
                        Bafoussam.</p>
                </div>

                <div>
                    <h4 style="color:#FFF; margin-bottom:10px;">Services</h4>
                    <ul style="font-size:0.85rem; display:flex; flex-direction:column; gap:6px;">
                        <li>Lunettes Médicales</li>
                        <li>Montage & Réparation</li>
                        <li>Entretien Gratuit</li>
                        <li>Service Après-Vente</li>
                    </ul>
                </div>

                <div>
                    <h4 style="color:#FFF; margin-bottom:10px;">Adresse & Contact</h4>
                    <p style="font-size:0.85rem;">Arcades de l'Ouest, Face entrée Friperie Marché « A », Bafoussam</p>
                    <p style="margin-top:6px; font-size:0.85rem; color:var(--whatsapp);">Tél: 679 89 35 19 / 677 89 12
                        19</p>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} NEW OPTIC VISION MÉDICAL Bafoussam. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>