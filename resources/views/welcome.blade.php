<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NEX Optique | Vision Médicale & Lunetterie de Créateurs</title>
    <meta name="description"
        content="NEX Optique - Centre de vision médicale et optométrie de pointe. Examens de la vue avancés, verres correcteurs haut de gamme et montures de créateurs exclusives.">

    <!-- Vite local styling & script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white text-brand-dark selection:bg-brand-primary selection:text-white">

    <!-- BACKGROUND GLOWS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div
            class="absolute top-[10%] left-[-10%] w-[35vw] h-[35vw] rounded-full bg-brand-primary/8 blur-[120px] animate-pulse-slow">
        </div>
        <div class="absolute bottom-[20%] right-[-10%] w-[40vw] h-[40vw] rounded-full bg-brand-accent/5 blur-[150px] animate-pulse-slow"
            style="animation-delay: 2s;"></div>
    </div>

    <!-- HEADER / NAVIGATION -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-5 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="glass-card shadow-sm rounded-2xl px-6 py-4 flex items-center justify-between border border-white/50">

                <!-- Logo -->
                <a href="#" class="flex items-center space-x-3 group">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-tr from-brand-primary to-brand-hover flex items-center justify-center text-white shadow-md transition-transform group-hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <div>
                        <span
                            class="text-xl font-black tracking-tight text-brand-dark flex items-center gap-1.5 leading-none">
                            NEX <span class="text-brand-primary font-light">OPTIQUE</span>
                        </span>
                        <span class="text-[9px] font-bold tracking-widest text-brand-accent block uppercase">Vision
                            Médicale</span>
                    </div>
                </a>

                <!-- Desktop Links -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">Accueil</a>
                    <a href="#expertises"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">Nos
                        Services</a>
                    <a href="#diagnostics"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">Technologie</a>
                    <a href="#collection"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">Montures</a>
                    <a href="#clinique"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">La
                        Clinique</a>
                    <a href="#contact"
                        class="text-xs font-semibold uppercase tracking-wider text-brand-dark/70 hover:text-brand-primary transition-colors">Contact</a>
                </nav>

                <!-- Right CTA -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#contact"
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-hover hover:shadow-lg transition-all">
                        Prendre RDV
                    </a>
                </div>

                <!-- Mobile Menu btn -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" type="button"
                        class="text-brand-dark hover:text-brand-primary p-2 focus:outline-none" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <svg id="menu-icon-open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="menu-icon-close" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden flex-col bg-white/95 backdrop-blur-md border-b border-gray-100 px-6 py-6 space-y-4 shadow-xl">
            <a href="#"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2 border-b border-gray-50">Accueil</a>
            <a href="#expertises"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2 border-b border-gray-50">Nos
                Services</a>
            <a href="#diagnostics"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2 border-b border-gray-50">Technologie</a>
            <a href="#collection"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2 border-b border-gray-50">Montures</a>
            <a href="#clinique"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2 border-b border-gray-50">La
                Clinique</a>
            <a href="#contact"
                class="block text-sm font-bold uppercase tracking-wider text-brand-dark hover:text-brand-primary py-2">Contact</a>
            <a href="#contact"
                class="block text-center text-white bg-brand-primary px-4 py-3.5 rounded-xl text-xs font-bold uppercase tracking-widest">Prendre
                RDV en Ligne</a>
        </div>
    </header>

    <!-- HERO SECTION WITH DECORATION -->
    <section class="relative pt-32 pb-24 lg:pt-48 lg:pb-36 overflow-hidden z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Left Text Column -->
                <div class="lg:col-span-7 space-y-8 animate-fade-in-up">

                    <!-- Clinical Medical badge -->
                    <div
                        class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-emerald-50 border border-blue-100/50 rounded-full px-4 py-1.5 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-brand-accent animate-ping"></span>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-brand-hover">🧬 Centre de
                            Réfraction & Technologie Visuelle</span>
                    </div>

                    <!-- Title -->
                    <h1
                        class="text-4xl sm:text-5xl lg:text-6xl font-black tracking-tight text-brand-dark leading-tight">
                        NEX OPTIQUE<br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-accent">L'excellence
                            médicale</span> pour vos yeux.
                    </h1>

                    <!-- Description -->
                    <p class="text-base text-gray-500 font-light max-w-xl leading-relaxed">
                        Bienvenue chez NEX Optique. Nous combinons les techniques de diagnostic d'acuité visuelle les
                        plus avancées à une lunetterie d'exception. Vos yeux méritent une expertise médicale et un style
                        signature.
                    </p>

                    <!-- Stats Quick Banner -->
                    <div class="grid grid-cols-3 gap-6 max-w-lg py-4 border-y border-gray-100">
                        <div>
                            <span class="block text-2xl font-black text-brand-dark">0.01<span
                                    class="text-xs text-brand-primary uppercase font-bold ml-0.5">dioptre</span></span>
                            <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Mesure
                                ultra-précise</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-black text-brand-dark">100%</span>
                            <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Tiers payant
                                mutuelle</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-black text-brand-accent">2<span
                                    class="text-xs uppercase font-bold ml-0.5">ans</span></span>
                            <span class="text-[10px] font-bold text-gray-400 block uppercase mt-0.5">Garantie
                                d'adaptation</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="#contact"
                            class="inline-flex items-center justify-center px-8 py-4 rounded-xl shadow-lg border border-brand-primary text-xs font-bold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-hover hover:border-brand-hover hover:-translate-y-0.5 transition-all">
                            Prendre RDV Médical
                        </a>
                        <a href="#diagnostics"
                            class="inline-flex items-center justify-center px-8 py-4 rounded-xl text-xs font-bold uppercase tracking-wider border border-gray-200 text-brand-dark hover:border-brand-primary hover:text-brand-primary transition-all">
                            Découvrir Nos Technologies
                        </a>
                    </div>
                </div>

                <!-- Right Visual Column (Luxury Glasses / Floating Glass structure) -->
                <div class="lg:col-span-5 relative">
                    <div
                        class="relative w-full max-w-md mx-auto aspect-[4/5] sm:aspect-square lg:aspect-[4/5] rounded-[32px] overflow-hidden shadow-2xl border border-white/60 bg-gradient-to-b from-white/30 to-white/10 backdrop-blur-md p-4 group animate-float">
                        <img src="/images/hero.png" alt="Lunettes de luxe NEX Optique"
                            class="w-full h-full object-cover rounded-[24px] transition-transform duration-700 group-hover:scale-105">

                        <!-- Floating Glass Info Badge -->
                        <div
                            class="absolute bottom-8 left-8 right-8 glass-card border border-white/60 rounded-2xl p-4 shadow-xl">
                            <span
                                class="text-[10px] font-black uppercase text-brand-accent tracking-wider block mb-1">Modèle
                                Signature</span>
                            <div class="flex items-center justify-between">
                                <h4 class="text-sm font-extrabold text-brand-dark">Conception Ergonomique</h4>
                                <span class="text-xs font-bold text-brand-primary">Titane & Acétate</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : NOS EXPERTISES (SERVICES REDESIGNED) -->
    <section id="expertises" class="py-24 bg-brand-light/30 border-y border-gray-100 z-10 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header section -->
            <div class="max-w-3xl mx-auto text-center mb-20 space-y-4 scroll-reveal">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-accent">Soin & Réfraction</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Nos Expertises en Santé Visuelle
                </h2>
                <p class="text-sm text-gray-500 font-light max-w-xl mx-auto leading-relaxed">
                    Chez NEX Optique, chaque consultation fait l'objet d'un protocole rigoureux pour garantir le
                    meilleur confort de vue.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Service 1 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group scroll-reveal">
                    <span class="text-[10px] font-black tracking-widest text-gray-300 uppercase block mb-6">01 /
                        DIAGNOSTIC</span>
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Examen de Réfraction</h3>
                    <p class="text-xs text-gray-500 leading-relaxed font-light">
                        Bilan complet de votre acuité réalisé par nos experts pour détecter fatigue visuelle et
                        anomalies de convergence.
                    </p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group scroll-reveal">
                    <span class="text-[10px] font-black tracking-widest text-gray-300 uppercase block mb-6">02 /
                        LABORATOIRE</span>
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Verres Optiques Avancés</h3>
                    <p class="text-xs text-gray-500 leading-relaxed font-light">
                        Lunetterie équipée de verres antireflets de dernière génération filtrant sélectivement les
                        rayonnements nocifs.
                    </p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group scroll-reveal">
                    <span class="text-[10px] font-black tracking-widest text-gray-300 uppercase block mb-6">03 /
                        DESIGN</span>
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Conseil en Visagisme</h3>
                    <p class="text-xs text-gray-500 leading-relaxed font-light">
                        Choix de votre monture assisté par nos stylistes selon votre morphologie et vos préférences
                        stylistiques.
                    </p>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group scroll-reveal">
                    <span class="text-[10px] font-black tracking-widest text-gray-300 uppercase block mb-6">04 /
                        SUIVI</span>
                    <div
                        class="w-12 h-12 rounded-2xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Santé Oculaire au Travail</h3>
                    <p class="text-xs text-gray-500 leading-relaxed font-light">
                        Accompagnement et solutions spécifiques pour diminuer la fatigue oculaire liée à l'exposition
                        prolongée aux écrans.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : DIAGNOSTICS & CLINIQUE TECHNOLOGIQUE (EXAM SCREEN MOCK) -->
    <section id="diagnostics" class="py-24 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Description text -->
                <div class="lg:col-span-6 space-y-6 scroll-reveal">
                    <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Technologie
                        Médicale</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                        Une diagnostic de réfraction précis au 100ème de dioptre
                    </h2>
                    <p class="text-gray-550 leading-relaxed font-light">
                        NEX Optique est équipé des dernières technologies de topographie oculaire et d'aberrométrie de
                        chez Essilor et Nidek. Ces instruments nous permettent de cartographier la cornée et l'œil en 3D
                        afin de fabriquer des verres correcteurs totalement uniques, adaptés aux moindres
                        micro-variations de votre vision.
                    </p>

                    <!-- Feature check outline list -->
                    <div class="space-y-4 pt-2">
                        <div class="flex items-center space-x-3">
                            <span
                                class="w-5 h-5 rounded-full bg-brand-accent/15 text-brand-accent flex items-center justify-center text-xs">✓</span>
                            <span class="text-sm font-semibold text-brand-dark">Réfractomètre tridimensionnel à
                                wavefront</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span
                                class="w-5 h-5 rounded-full bg-brand-accent/15 text-brand-accent flex items-center justify-center text-xs">✓</span>
                            <span class="text-sm font-semibold text-brand-dark">Mesure et correction adaptées aux
                                conditions nocturnes</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span
                                class="w-5 h-5 rounded-full bg-brand-accent/15 text-brand-accent flex items-center justify-center text-xs">✓</span>
                            <span class="text-sm font-semibold text-brand-dark">Dépistage précoce des troubles de
                                fatigue oculaire</span>
                        </div>
                    </div>
                </div>

                <!-- Instrument visual display -->
                <div class="lg:col-span-6 scroll-reveal">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-150 p-3 bg-gray-50/50">
                        <img src="/images/exam.png" alt="Appareil d'examen optométrique NEX"
                            class="rounded-2xl w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : GALERIE / COLLECTION (MODERN & PREMIUM GRID) -->
    <section id="collection" class="py-24 bg-brand-light/30 border-y border-gray-100 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4 scroll-reveal">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Sélection Prestige</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Créateurs & Collections Limitées
                </h2>
                <p class="text-sm text-gray-500 font-light max-w-xl mx-auto leading-relaxed">
                    Découvrez nos pièces de lunetterie sélectionnées pour leur caractère unique et la finesse de leur
                    réalisation.
                </p>
            </div>

            <!-- Categories and premium items links -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Item 1 -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group scroll-reveal flex flex-col h-full">
                    <div class="aspect-square bg-gray-50 overflow-hidden relative">
                        <img src="/images/hero.png" alt="Modèles Eyewear designer"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span
                            class="absolute top-4 left-4 bg-brand-dark text-white text-[9px] font-bold tracking-widest uppercase px-3 py-1 rounded-full">New</span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-grow">
                        <div>
                            <h4 class="text-base font-extrabold text-brand-dark mb-1">Montures Acétate Premium</h4>
                            <p class="text-xs text-gray-400 font-light">Structure façonnée à la main en acétate naturel
                                renouvelable.</p>
                        </div>
                        <a href="#contact"
                            class="inline-flex items-center text-xs font-bold text-brand-primary hover:underline mt-4">
                            Prendre RDV d'essayage →
                        </a>
                    </div>
                </div>

                <!-- Item 2 -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group scroll-reveal flex flex-col h-full">
                    <div class="aspect-square bg-gray-50 overflow-hidden relative">
                        <img src="/images/boutique.png" alt="Showroom lunettes haut de gamme"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span
                            class="absolute top-4 left-4 bg-brand-accent text-white text-[9px] font-bold tracking-widest uppercase px-3 py-1 rounded-full">Tendance</span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-grow">
                        <div>
                            <h4 class="text-base font-extrabold text-brand-dark mb-1">Collection Métal & Or</h4>
                            <p class="text-xs text-gray-400 font-light">Finition dorée raffinée et structures légères en
                                titane pur.</p>
                        </div>
                        <a href="#contact"
                            class="inline-flex items-center text-xs font-bold text-brand-primary hover:underline mt-4">
                            Prendre RDV d'essayage →
                        </a>
                    </div>
                </div>

                <!-- Item 3 -->
                <div
                    class="bg-white rounded-3xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group scroll-reveal flex flex-col h-full">
                    <div class="aspect-square bg-gray-50 overflow-hidden relative">
                        <img src="/images/exam.png" alt="Cabinet médical NEX Optique"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <span
                            class="absolute top-4 left-4 bg-amber-500 text-white text-[9px] font-bold tracking-widest uppercase px-3 py-1 rounded-full">Vision</span>
                    </div>
                    <div class="p-6 flex flex-col justify-between flex-grow">
                        <div>
                            <h4 class="text-base font-extrabold text-brand-dark mb-1">Optique Clinique Active</h4>
                            <p class="text-xs text-gray-400 font-light">Gamme de verres antireflets et verres spéciaux
                                pour enfants.</p>
                        </div>
                        <a href="#contact"
                            class="inline-flex items-center text-xs font-bold text-brand-primary hover:underline mt-4">
                            Prendre RDV d'essayage →
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION : CLINIQUE (EQUIPE & VALEURS CLINIQUE) -->
    <section id="clinique" class="py-24 bg-white relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Image Team/Boutique -->
                <div class="lg:col-span-5 order-last lg:order-first scroll-reveal">
                    <div class="relative rounded-[32px] overflow-hidden shadow-xl border border-gray-100">
                        <img src="/images/boutique.png" alt="Boutique NEX Optique Vision médicale"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Clinic description/Team values -->
                <div class="lg:col-span-7 space-y-6 scroll-reveal">
                    <span class="text-xs font-bold uppercase tracking-widest text-brand-accent">NOTRE EXPERTISE
                        CLINIQUE</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                        Une équipe d’optométristes et d’experts en esthétique visuelle
                    </h2>
                    <p class="text-gray-500 leading-relaxed font-light">
                        NEX Optique n'est pas une simple boutique de lunettes. Nous sommes un centre dédié à la
                        correction médicale et au style de votre regard. Notre équipe permanente réunit des
                        opticiens-optométristes diplômés de la faculté de médecine, formés de manière continue aux
                        technologies ophtalmologiques de pointe, ainsi que des stylistes visagistes pour configurer et
                        harmoniser vos montures.
                    </p>

                    <!-- Small profiles mocks -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4 border-t border-gray-150">
                        <div class="flex items-center space-x-4">
                            <span class="text-2xl">👩‍⚕️</span>
                            <div>
                                <h4 class="text-sm font-extrabold text-brand-dark">Dr. Sophie Laurent</h4>
                                <p class="text-xs text-gray-400">Optométriste diplômée d'État</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="text-2xl">👨‍🎨</span>
                            <div>
                                <h4 class="text-sm font-extrabold text-brand-dark">Marc Dubois</h4>
                                <p class="text-xs text-gray-400">Visagiste et Designer Montures</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : AVIS PATIENTS / CLIENTS -->
    <section id="temoignages" class="py-24 bg-brand-light/30 border-t border-gray-100 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-20 space-y-4 scroll-reveal">
                <span
                    class="text-xs font-bold uppercase tracking-widest text-brand-primary font-semibold">Témoignages</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Ce que disent nos patients
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Avis 1 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm flex flex-col justify-between scroll-reveal">
                    <div>
                        <div class="flex space-x-1 text-amber-500 mb-6 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-xs text-gray-500 italic leading-relaxed font-light">
                            "Un service d'optométrie d'une précision médicale incomparable. Les tests de vue prennent le
                            temps de vérifier la fatigue visuelle. L'accueil et l'accompagnement de NEX Optique sont
                            formidables."
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center space-x-2">
                        <span class="text-xs font-bold text-brand-dark">Arnaud G.</span>
                        <span
                            class="text-[9px] bg-blue-100/50 text-brand-primary px-2 py-0.5 rounded-full font-bold uppercase">Avis
                            vérifié</span>
                    </div>
                </div>

                <!-- Avis 2 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm flex flex-col justify-between scroll-reveal">
                    <div>
                        <div class="flex space-x-1 text-amber-500 mb-6 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-xs text-gray-500 italic leading-relaxed font-light">
                            "Je cherchais des lunettes de créateur introuvables à Paris. Marc m'a conseillé un modèle en
                            acétate japonais magnifique qui s'adapte parfaitement à mon style. Je recommande à 100%."
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center space-x-2">
                        <span class="text-xs font-bold text-brand-dark">Hélène R.</span>
                        <span
                            class="text-[9px] bg-blue-100/50 text-brand-primary px-2 py-0.5 rounded-full font-bold uppercase">Avis
                            vérifié</span>
                    </div>
                </div>

                <!-- Avis 3 -->
                <div
                    class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm flex flex-col justify-between scroll-reveal">
                    <div>
                        <div class="flex space-x-1 text-amber-500 mb-6 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-xs text-gray-500 italic leading-relaxed font-light">
                            "Le tiers payant a été entièrement géré directement de leur côté avec ma mutuelle. Je n'ai
                            fait aucune avance de frais et aucune démarche administrative complexe."
                        </p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-gray-100 flex items-center space-x-2">
                        <span class="text-xs font-bold text-brand-dark">Guillaume F.</span>
                        <span
                            class="text-[9px] bg-blue-100/50 text-brand-primary px-2 py-0.5 rounded-full font-bold uppercase">Avis
                            vérifié</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION : CONTACT & PRÉ-RESERVATION DE RETROUTEMENT -->
    <section id="contact" class="py-24 bg-white relative z-10 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Form Info links -->
                <div class="lg:col-span-5 space-y-8 scroll-reveal">
                    <div>
                        <span class="text-xs font-bold text-brand-primary uppercase tracking-widest">NEX Optique
                            Secrétariat</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight mt-2">Nous
                            planifions votre consultation.</h2>
                    </div>

                    <!-- Dynamic Live status check box -->
                    <div
                        class="bg-gradient-to-br from-gray-50 to-blue-50/20 border border-gray-200/50 rounded-2xl p-5 space-y-4">
                        <div class="flex items-center space-x-2.5">
                            <span id="hours-indicator-dot" class="w-2.5 h-2.5 rounded-full bg-brand-accent"></span>
                            <span id="hours-indicator-text"
                                class="text-xs font-bold text-brand-dark uppercase tracking-wider">Clinique ouverte en
                                ce moment</span>
                        </div>
                        <p class="text-xs text-gray-400 font-light leading-relaxed">
                            Notre secrétariat prend en charge les demandes de rendez-vous de réfraction et d'adaptation
                            du Lundi au Samedi de 09:00 à 19:30.
                        </p>
                    </div>

                    <div class="space-y-4 text-sm text-gray-500 font-light">
                        <div class="flex items-start space-x-3">
                            <span>📞</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Téléphone Secrétariat</h4>
                                <p class="text-xs mt-0.5">+33 1 76 54 32 10</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span>💬</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Urgence WhatsApp</h4>
                                <p class="text-xs mt-0.5">Contact direct avec nos optométristes</p>
                                <a href="https://wa.me/33176543210" target="_blank"
                                    class="inline-flex items-center text-xs font-bold text-brand-accent hover:underline mt-1.5">
                                    Discuter sur WhatsApp
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <span>📍</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Adresse Centre</h4>
                                <p class="text-xs mt-0.5">NEX Optique - 42 Avenue Montaigne, 75008 Paris - France</p>
                            </div>
                        </div>
                    </div>

                    <!-- Visual map dashboard -->
                    <div
                        class="rounded-3xl border border-gray-200 overflow-hidden shadow-sm aspect-video bg-gray-50 flex flex-col justify-center items-center text-center p-6 relative">
                        <span class="text-3xl mb-2">🗺️</span>
                        <h4 class="font-bold text-brand-dark text-xs">Cabinet NEX Optique Paris VIII</h4>
                        <p class="text-[11px] text-gray-400 max-w-xs mt-1">À 2 min à pied du métro Franklin D.
                            Roosevelt. Parking disponible.</p>
                        <div
                            class="absolute bottom-0 left-0 right-0 h-1.5 bg-gradient-to-r from-brand-primary to-brand-accent">
                        </div>
                    </div>
                </div>

                <!-- Action Booking Form -->
                <div
                    class="lg:col-span-7 bg-white rounded-[32px] p-8 lg:p-10 border border-gray-150 shadow-xl scroll-reveal">
                    <h3 class="text-xl font-extrabold text-brand-dark mb-2">Déposer une demande de consultation</h3>
                    <p class="text-xs text-gray-400 font-light mb-8">
                        Réservez un créneau en 1 minute. Nos opticiens vous rappellent immédiatement pour caler
                        l'horaire.
                    </p>

                    <form id="booking-form" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Nom
                                    Complet</label>
                                <input type="text" id="name" required
                                    class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors">
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Téléphone</label>
                                <input type="tel" id="phone" required
                                    class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Adresse
                                Email</label>
                            <input type="email" id="email" required
                                class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="service"
                                    class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Motif
                                    d'examen</label>
                                <select id="service"
                                    class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors">
                                    <option>Bilan visuel complet de réfraction</option>
                                    <option>Choix de montures & stylisme</option>
                                    <option>Adaptation & apprentissage lentilles</option>
                                    <option>Consultation basse vision / DMLA</option>
                                </select>
                            </div>
                            <div>
                                <label for="date" class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Date
                                    d'examen souhaitée</label>
                                <input type="date" id="date" required
                                    class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-[10px] font-bold uppercase text-gray-400 mb-2">Notes
                                médicales ou stylistiques</label>
                            <textarea id="message" rows="3"
                                class="w-full bg-gray-50 px-4 py-3.5 rounded-xl border border-gray-200 text-xs focus:outline-none focus:border-brand-primary font-medium transition-colors"
                                placeholder="Précisez votre correction actuelle ou vos besoins spécifiques..."></textarea>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="rgpd" required
                                class="rounded text-brand-primary border-gray-200 focus:ring-brand-primary w-4.5 h-4.5">
                            <label for="rgpd" class="text-[10px] text-gray-400">J'autorise NEX Optique à m'appeler sur
                                ces coordonnées pour fixer le rendez-vous conformément aux mentions légales.</label>
                        </div>

                        <button type="submit"
                            class="w-full py-4 text-xs font-bold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-hover rounded-xl shadow-md transition-colors">
                            Envoyer la Demande de Consultation
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-brand-deep py-20 text-gray-500 border-t border-gray-900 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">

                <!-- Identity -->
                <div class="space-y-4 col-span-1 md:col-span-1">
                    <span class="text-xl font-black text-white block leading-none">NEX <span
                            class="text-brand-primary font-light">OPTIQUE</span></span>
                    <p class="text-xs leading-relaxed text-gray-500 font-light">
                        Centre de diagnostic visuel & Créateurs de lunetterie haut de gamme. Conventionné toutes
                        mutuelles.
                    </p>
                </div>

                <!-- Navigation links -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Le Cabinet</h4>
                    <ul class="space-y-2 text-xs font-light">
                        <li><a href="#" class="hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#expertises" class="hover:text-white transition-colors">Nos Services</a></li>
                        <li><a href="#diagnostics" class="hover:text-white transition-colors">Technologie
                                Diagnostique</a></li>
                        <li><a href="#collection" class="hover:text-white transition-colors">Modèles Créateurs</a></li>
                    </ul>
                </div>

                <!-- Infos -->
                <div class="space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Informations</h4>
                    <ul class="space-y-2 text-xs font-light">
                        <li><a href="#" class="hover:text-white transition-colors">Mentions Légales</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Gestion RGPD</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cookies et traceurs</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Chartes de Déontologie</a></li>
                    </ul>
                </div>

                <!-- Certification -->
                <div class="space-y-4">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Agréments & Garanties</h4>
                    <p class="text-xs text-gray-500 leading-relaxed font-light">
                        Agrée Sécurité sociale et conventions tiers payant réseaux mutuelles nationaux.
                    </p>
                    <div class="flex items-center space-x-3 text-2xl filter grayscale opacity-60">
                        <span>🏥</span>
                        <span>🛡️</span>
                        <span>🧬</span>
                    </div>
                </div>

            </div>

            <!-- Subfooter -->
            <div
                class="mt-16 pt-8 border-t border-gray-900 flex flex-col sm:flex-row justify-between items-center text-xs text-gray-600 gap-4">
                <p>&copy; 2026 NEX Optique Vision Médicale. Tous droits réservés.</p>
                <p class="text-[10px]">Site autonome compilé en local par Vite & Tailwind CSS v4.</p>
            </div>
        </div>
    </footer>

    <!-- TOAST ALERT SUCCESS -->
    <div id="toast-success"
        class="fixed bottom-8 right-8 z-50 transform translate-y-24 opacity-0 pointer-events-none transition-all duration-500 ease-out max-w-sm w-full bg-white rounded-3xl shadow-2xl border border-brand-accent/20 p-6 flex items-start space-x-4">
        <div
            class="w-10 h-10 rounded-2xl bg-brand-accent/10 text-brand-accent flex items-center justify-center flex-shrink-0 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <div>
            <h4 class="text-sm font-extrabold text-brand-dark">Demande pré-enregistrée !</h4>
            <p class="text-xs text-gray-500 mt-1">Votre demande a été transmise à notre secrétariat. Un opticien-conseil
                NEX Optique vous rappellera par téléphone dans l'heure pour fixer définitivement l'horaire de votre
                bilan visuel.</p>
        </div>
    </div>

    <!-- SCRIPT FOR LIVE OPEN/CLOSED CLINIC STATUS -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const checkOpeningHour = () => {
                const now = new Date();
                const day = now.getDay(); // 0 is Sunday, 1 is Monday, ..., 6 is Saturday
                const hour = now.getHours();
                const minutes = now.getMinutes();
                const totalMinutes = hour * 60 + minutes;

                const indicatorDot = document.getElementById('hours-indicator-dot');
                const indicatorText = document.getElementById('hours-indicator-text');

                if (!indicatorDot || !indicatorText) return;

                // Open Monday (1) to Saturday (6) from 09:00 (540 mins) to 19:30 (1170 mins)
                const startMins = 9 * 60; // 09:00
                const endMins = 19 * 60 + 30; // 19:30

                if (day >= 1 && day <= 6 && totalMinutes >= startMins && totalMinutes < endMins) {
                    // Open
                    indicatorDot.className = 'w-2.5 h-2.5 rounded-full bg-brand-accent';
                    indicatorText.textContent = 'Clinique ouverte en ce moment';
                    indicatorText.className = 'text-xs font-bold text-brand-dark uppercase tracking-wider';
                } else {
                    // Closed
                    indicatorDot.className = 'w-2.5 h-2.5 rounded-full bg-red-500';
                    indicatorText.textContent = 'Clinique actuellement fermée';
                    indicatorText.className = 'text-xs font-bold text-red-500 uppercase tracking-wider';
                }
            };
            checkOpeningHour();
            // Checking every minute
            setInterval(checkOpeningHour, 60000);
        });
    </script>

</body>

</html>