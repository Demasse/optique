@extends('layouts.app')

@section('title', 'New Optic Vision Médical - Cabinet d\'Optique Médicale à Bafoussam')

@section('content')

    {{-- HERO SECTION --}}
    <section class="hero" id="accueil" style="background-image: url('{{ asset('images/hero.png') }}');">
        <div class="container">
            <span class="hero-badge">Cabinet d'Optique Médicale</span>
            <h1>New Optic Vision Médical</h1>
            <p class="tagline">"Votre Partenaire Santé pour la Vue à Vie"</p>

            {{-- Bannières d'Offres Promotionnelles --}}
            <div class="promo-banner" id="offres">
                <div class="promo-item">
                    <div class="number">50%</div>
                    <div class="label">Jusqu'à 50% de Remise</div>
                </div>
                <div class="promo-item">
                    <div class="number">1 AN</div>
                    <div class="label">Garantie sur Lunettes</div>
                </div>
                <div class="promo-item">
                    <div class="number">100%</div>
                    <div class="label">Conseil & SAV Gratuits</div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION A PROPOS & GALERIE VISUELLE --}}
    <section class="about-showcase" id="apropos">
        <div class="container showcase-grid">
            <div class="showcase-text">
                <h2>Excellence & Soin de votre Vue</h2>
                <p>Chez <strong>New Optic Vision Médical</strong>, nous mettons notre expertise au service de votre
                    santé visuelle. Profitez d'un accompagnement personnalisé, de conseils d'experts et d'un large choix
                    de montures de qualité.</p>
                <a href="#localisation" class="btn-call">Nous rendre visite</a>
            </div>
            <div class="showcase-images">
                <img src="{{ asset('images/first.avif') }}" alt="Examen de la vue">
                <img src="{{ asset('images/exam.png') }}" alt="Examen de la vue">


                <img src="{{ asset('images/boutique.png') }}" alt="Lunettes de vue">
            
                <img src="{{ asset('images/second.avif') }}" alt="Lunettes de vue">
            </div>
        </div>
    </section>

    {{-- SERVICES SECTION --}}
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nos Services & Produits</h2>
            </div>
            <div class="services-grid">

                <div class="service-card">
                    <img src="{{ asset('images/boutique.png') }}" alt="Lunettes Médicales" class="service-img">
                    <div class="service-info">
                        <h3>Lunettes Médicales</h3>
                        <p>Large choix de montures et verres adaptés à votre vue et à votre style au quotidien.</p>
                    </div>
                </div>

                <div class="service-card">
                    <img src="{{ asset('images/exam.png') }}" alt="Accessoires Optiques" class="service-img">
                    <div class="service-info">
                        <h3>Accessoires Optiques</h3>
                        <p>Produits d'entretien, étuis et accessoires haut de gamme pour vos lunettes.</p>
                    </div>
                </div>

                <div class="service-card">
                    <img src="{{ asset('images/boutique.png') }}" alt="Montage et Réparation" class="service-img">
                    <div class="service-info">
                        <h3>Montage & Réparation</h3>
                        <p>Montage précis de vos verres et réparation rapide de toutes vos montures.</p>
                    </div>
                </div>

                <div class="service-card">
                    <img src="{{ asset('images/exam.png') }}" alt="Entretien et Conseil" class="service-img">
                    <div class="service-info">
                        <h3>Entretien & Conseil</h3>
                        <p>Accompagnement personnalisé et entretien régulier offert pour vos équipements.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ADVANTAGES / SAV SECTION --}}
    <section class="advantages">
        <div class="container advantages-wrapper">
            <div class="adv-content">
                <h3>Pourquoi Choisir New Optic Vision ?</h3>
                <ul class="adv-list">
                    <li>Promotion sur les lunettes médicales</li>
                    <li>Remise de prix jusqu'à 50% sur tout achat</li>
                    <li>1 an de garantie sur vos lunettes médicales</li>
                    <li>Entretien, Conseil et Réparation <strong>GRATUITS</strong></li>
                </ul>
            </div>
            <div class="sav-box">
                <h4>SERVICE APRÈS-VENTE (SAV)</h4>
                <p>Nous restons à votre disposition après votre achat pour garantir la durabilité et le confort de votre
                    équipement optique.</p>
            </div>
        </div>
    </section>

    {{-- SECTION LOCALISATION --}}
    <section class="location-section" id="localisation">
        <div class="container">
            <div class="section-title">
                <h2>Où Nous Trouver</h2>
            </div>
            <div class="location-grid">
                <div class="location-info">
                    <h3>Rendez-nous visite à Bafoussam</h3>
                    <p>Notre cabinet est facilement accessible pour tous vos besoins en optique médicale.</p>

                    <div class="location-card">
                        <h4>📍 Adresse complète</h4>
                        <p><strong>Arcades de l'Ouest</strong></p>
                        <p>Face entrée Friperie Marché « A »</p>
                        <p>Bafoussam, Cameroun</p>
                    </div>

                    <div class="location-card">
                        <h4>📞 Contact Direct</h4>
                        <p>Téléphone : <strong>679 89 35 19 / 677 89 12 19</strong></p>
                    </div>
                </div>

                {{-- CARTE GOOGLE MAPS INTEGREE --}}
                <div class="location-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15878.601552541334!2d10.4121!3d5.4777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f932f3f988b43%3A0x6b7720935105a305!2sBafoussam!5e0!3m2!1sfr!2scm!4v1710000000000!5m2!1sfr!2scm"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

@endsection