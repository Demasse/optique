@extends('layouts.app')

@section('title', 'New Optic Vision Médical - Cabinet d\'Optique Médicale à Bafoussam')

@section('content')

<!-- HERO SECTION -->
<section class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden z-10 bg-gradient-to-r from-anthracite to-anthracite/95">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <!-- Left Text Column -->
            <div class="lg:col-span-7 space-y-8 text-white">

                <!-- Clinical Medical badge -->
                <div class="inline-flex items-center space-x-2 bg-white/10 border border-medical-red/50 rounded-full px-4 py-1.5 shadow-sm backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-medical-red animate-ping"></span>
                    <span class="text-[10px] font-extrabold uppercase tracking-widest text-white/80">👁️ Cabinet d'Optique Médicale</span>
                </div>

                <!-- Title -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight">
                    New Optic <span class="text-medical-red">Vision</span><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-medical-red to-red-400">L'excellence médicale</span> pour vos yeux.
                </h1>

                <!-- Description -->
                <p class="text-base text-gray-300 font-light max-w-xl leading-relaxed">
                    Votre Partenaire Santé pour la Vue à Vie. Bénéficiez d'un accompagnement personnalisé,
                    de conseils d'experts et d'un large choix de montures de qualité.
                </p>

                <!-- Stats Quick Banner -->
                <div class="grid grid-cols-3 gap-6 max-w-lg py-4 border-y border-white/10">
                    <div>
                        <span class="block text-2xl font-black text-white">50%</span>
                        <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Jusqu'à 50% de Remise</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-black text-white">1 AN</span>
                        <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Garantie sur Lunettes</span>
                    </div>
                    <div>
                        <span class="block text-2xl font-black text-medical-red">100%</span>
                        <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Conseil & SAV Gratuits</span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-2">
                    <a href="#localisation" class="inline-flex items-center justify-center px-8 py-4 rounded-xl shadow-lg border border-medical-red text-xs font-bold uppercase tracking-wider text-white bg-medical-red hover:bg-dark-red hover:border-dark-red hover:-translate-y-0.5 transition-all">
                        Nous rendre visite
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-xs font-bold uppercase tracking-wider border border-white/20 text-white hover:border-medical-red hover:text-medical-red transition-all">
                        Découvrir nos services
                    </a>
                </div>
            </div>

            <!-- Right Visual Column -->
            <div class="lg:col-span-5 relative">
                <div class="relative w-full max-w-md mx-auto aspect-[4/5] sm:aspect-square lg:aspect-[4/5] rounded-[32px] overflow-hidden shadow-2xl border border-white/20 bg-gradient-to-b from-white/10 to-white/5 backdrop-blur-md p-4 group">
                    <img src="https://images.unsplash.com/photo-1591076482161-42ce6da69f67?auto=format&fit=crop&q=80&w=800" 
                         alt="New Optic Vision Médical"
                         class="w-full h-full object-cover rounded-[24px] transition-transform duration-700 group-hover:scale-105">

                    <!-- Floating Info Badge -->
                    <div class="absolute bottom-8 left-8 right-8 glass-card border border-white/20 rounded-2xl p-4 shadow-xl bg-white/90 backdrop-blur-sm">
                        <span class="text-[10px] font-black uppercase text-medical-red tracking-wider block mb-1">📍 Bafoussam</span>
                        <div class="flex items-center justify-between">
                            <h4 class="text-sm font-extrabold text-anthracite">Cabinet Médical</h4>
                            <span class="text-xs font-bold text-medical-red">Arcades de l'Ouest</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION A PROPOS & GALERIE -->
<section id="apropos" class="py-24 bg-white border-y border-gray-100 z-10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-6 space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-medical-red">À Propos</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-anthracite tracking-tight">
                    Excellence & Soin de votre Vue
                </h2>
                <p class="text-gray-600 leading-relaxed font-light">
                    Chez <strong class="text-anthracite">New Optic Vision Médical</strong>, nous mettons notre expertise au service de votre
                    santé visuelle. Profitez d'un accompagnement personnalisé, de conseils d'experts et d'un large choix
                    de montures de qualité.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-center space-x-3">
                        <span class="w-5 h-5 rounded-full bg-medical-red/15 text-medical-red flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="text-sm font-semibold text-anthracite">Promotion sur les lunettes médicales</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="w-5 h-5 rounded-full bg-medical-red/15 text-medical-red flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="text-sm font-semibold text-anthracite">Remise jusqu'à 50% sur tout achat</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span class="w-5 h-5 rounded-full bg-medical-red/15 text-medical-red flex items-center justify-center text-xs font-bold">✓</span>
                        <span class="text-sm font-semibold text-anthracite">1 an de garantie sur vos lunettes médicales</span>
                    </div>
                </div>

                <a href="#localisation" class="inline-flex items-center justify-center px-8 py-3.5 rounded-xl text-xs font-bold uppercase tracking-wider text-white bg-medical-red hover:bg-dark-red transition-all">
                    Nous rendre visite
                </a>
            </div>

            <div class="lg:col-span-6">
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?auto=format&fit=crop&q=80&w=600"
                         alt="Examen de la vue"
                         class="rounded-2xl w-full h-64 object-cover shadow-md">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&q=80&w=600"
                         alt="Lunettes de vue"
                         class="rounded-2xl w-full h-64 object-cover shadow-md mt-8">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION SERVICES -->
<section id="services" class="py-24 bg-gray-50 border-y border-gray-100 z-10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center mb-20 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-medical-red">Nos Services</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-anthracite tracking-tight">
                Nos Services & Produits
            </h2>
            <p class="text-sm text-gray-500 font-light max-w-xl mx-auto leading-relaxed">
                Des solutions optiques complètes pour toute la famille.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Service 1 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-medical-red flex items-center justify-center mb-6 group-hover:bg-medical-red group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-anthracite mb-3">Lunettes Médicales</h3>
                <p class="text-xs text-gray-500 leading-relaxed font-light">
                    Large choix de montures et verres adaptés à votre vue et à votre style au quotidien.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-medical-red flex items-center justify-center mb-6 group-hover:bg-medical-red group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-anthracite mb-3">Accessoires Optiques</h3>
                <p class="text-xs text-gray-500 leading-relaxed font-light">
                    Produits d'entretien, étuis et accessoires haut de gamme pour vos lunettes.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-medical-red flex items-center justify-center mb-6 group-hover:bg-medical-red group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-anthracite mb-3">Montage & Réparation</h3>
                <p class="text-xs text-gray-500 leading-relaxed font-light">
                    Montage précis de vos verres et réparation rapide de toutes vos montures.
                </p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-12 h-12 rounded-2xl bg-red-50 text-medical-red flex items-center justify-center mb-6 group-hover:bg-medical-red group-hover:text-white transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-anthracite mb-3">Entretien & Conseil</h3>
                <p class="text-xs text-gray-500 leading-relaxed font-light">
                    Accompagnement personnalisé et entretien régulier offert pour vos équipements.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SECTION SAV & AVANTAGES -->
<section id="sav" class="py-24 bg-white relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-7 space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-medical-red">Pourquoi Choisir New Optic Vision ?</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-anthracite tracking-tight">
                    Votre satisfaction, notre priorité
                </h2>
                
                <div class="space-y-4 pt-4">
                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                        <span class="text-2xl">🏆</span>
                        <div>
                            <h4 class="text-sm font-extrabold text-anthracite">Remise jusqu'à 50%</h4>
                            <p class="text-xs text-gray-500">Sur tout achat de lunettes médicales</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                        <span class="text-2xl">🛡️</span>
                        <div>
                            <h4 class="text-sm font-extrabold text-anthracite">1 an de garantie</h4>
                            <p class="text-xs text-gray-500">Sur vos lunettes médicales</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-xl">
                        <span class="text-2xl">💡</span>
                        <div>
                            <h4 class="text-sm font-extrabold text-anthracite">SAV & Conseil GRATUITS</h4>
                            <p class="text-xs text-gray-500">Entretien, conseil et réparation offerts</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5">
                <div class="bg-gradient-to-br from-anthracite to-soft-dark rounded-3xl p-10 text-white border-t-4 border-medical-red shadow-xl">
                    <div class="text-4xl mb-4">🔧</div>
                    <h4 class="text-2xl font-extrabold mb-3">SERVICE APRÈS-VENTE</h4>
                    <p class="text-gray-300 text-sm leading-relaxed font-light">
                        Nous restons à votre disposition après votre achat pour garantir la durabilité et le confort de votre équipement optique.
                    </p>
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <p class="text-xs font-bold uppercase tracking-wider text-medical-red">📞 679 89 35 19</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION LOCALISATION -->
<section id="localisation" class="py-24 bg-gray-50 border-y border-gray-100 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="max-w-3xl mx-auto text-center mb-20 space-y-4">
            <span class="text-xs font-bold uppercase tracking-widest text-medical-red">Localisation</span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-anthracite tracking-tight">
                Où Nous Trouver
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

            <div class="lg:col-span-5 space-y-6">
                <h3 class="text-2xl font-extrabold text-anthracite">Rendez-nous visite à Bafoussam</h3>
                <p class="text-gray-600 font-light">Notre cabinet est facilement accessible pour tous vos besoins en optique médicale.</p>

                <div class="bg-white rounded-2xl p-6 border-l-4 border-medical-red shadow-sm">
                    <h4 class="text-sm font-extrabold text-anthracite mb-2">📍 Adresse complète</h4>
                    <p class="text-sm text-gray-600 font-light"><strong class="text-anthracite">Arcades de l'Ouest</strong></p>
                    <p class="text-sm text-gray-600 font-light">Face entrée Friperie Marché « A »</p>
                    <p class="text-sm text-gray-600 font-light">Bafoussam, Cameroun</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border-l-4 border-medical-red shadow-sm">
                    <h4 class="text-sm font-extrabold text-anthracite mb-2">📞 Contact Direct</h4>
                    <p class="text-sm font-bold text-anthracite">679 89 35 19 / 677 89 12 19</p>
                </div>
            </div>

            <div class="lg:col-span-7">
                <div class="rounded-3xl overflow-hidden shadow-2xl border border-gray-200 h-[400px]">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15878.601552541334!2d10.4121!3d5.4777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f932f3f988b43%3A0x6b7720935105a305!2sBafoussam!5e0!3m2!1sfr!2scm!4v1710000000000!5m2!1sfr!2scm"
                        class="w-full h-full border-0"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION CONTACT RAPIDE -->
<section class="py-16 bg-anthracite relative z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
            Besoin d'un conseil ?
        </h3>
        <p class="text-gray-300 font-light mb-8">
            Contactez-nous dès maintenant pour toute question ou pour prendre rendez-vous.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:679893519" class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-sm font-bold uppercase tracking-wider text-white bg-medical-red hover:bg-dark-red transition-all">
                📞 Appeler maintenant
            </a>
            <a href="#localisation" class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-sm font-bold uppercase tracking-wider border border-white/20 text-white hover:border-medical-red hover:text-medical-red transition-all">
                📍 Nous rendre visite
            </a>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* Couleurs personnalisées pour New Optic Vision */
    :root {
        --medical-red: #dc2626;
        --dark-red: #b91c1c;
        --anthracite: #0f172a;
        --soft-dark: #1e293b;
    }

    .bg-anthracite { background-color: var(--anthracite); }
    .bg-soft-dark { background-color: var(--soft-dark); }
    .bg-medical-red { background-color: var(--medical-red); }
    .bg-dark-red { background-color: var(--dark-red); }
    .text-medical-red { color: var(--medical-red); }
    .text-anthracite { color: var(--anthracite); }
    .border-medical-red { border-color: var(--medical-red); }
    .hover\\:bg-dark-red:hover { background-color: var(--dark-red); }
    .hover\\:border-dark-red:hover { border-color: var(--dark-red); }

    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }

    @keyframes pulse-slow {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.05); }
    }
    .animate-pulse-slow {
        animation: pulse-slow 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    .animate-float {
        animation: float 5s ease-in-out infinite;
    }
</style>
@endpush