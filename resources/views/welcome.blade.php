<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vision Signature | Opticien & Soins Visuels Haut de Gamme</title>
    <meta name="description"
        content="Découvrez Vision Signature, votre opticien de confiance. Consultation de la vue, examen optométrique de pointe et montures de créateurs exclusives.">

    <!-- Vite local styling & script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white text-brand-dark selection:bg-brand-secondary selection:text-white">

    <!-- HEADER / NAVIGATION -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 py-5 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">

                <!-- Logo -->
                <a href="#" class="flex items-center space-x-3 group">
                    <div
                        class="w-10 h-10 rounded-full bg-brand-primary flex items-center justify-center text-white shadow-lg transition-transform group-hover:scale-105">
                        <!-- Eye Icon SVG -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-xl font-bold tracking-tight text-brand-dark block leading-none">VISION</span>
                        <span
                            class="text-xs font-semibold tracking-widest text-brand-secondary block uppercase">Signature</span>
                    </div>
                </a>

                <!-- Desktop Navigation Links -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="#"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">Accueil</a>
                    <a href="#propos"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">À
                        Propos</a>
                    <a href="#services"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">Services</a>
                    <a href="#produits"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">Collection</a>
                    <a href="#temoignages"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">Avis</a>
                    <a href="#contact"
                        class="text-sm font-medium text-brand-dark/80 hover:text-brand-primary transition-colors">Contact</a>
                </nav>

                <!-- Action Button -->
                <div class="hidden md:block">
                    <a href="#contact"
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-secondary transition-all hover:shadow-lg hover:-translate-y-0.5">
                        Prendre RDV
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" type="button"
                        class="text-brand-dark hover:text-brand-primary p-2 focus:outline-none" aria-expanded="false">
                        <span class="sr-only">Ouvrir le menu</span>
                        <!-- Custom Menu Hamburger & Close -->
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
            class="hidden md:hidden flex-col bg-white border-b border-gray-100 px-4 pt-2 pb-6 space-y-3 shadow-lg">
            <a href="#" class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">Accueil</a>
            <a href="#propos" class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">À
                Propos</a>
            <a href="#services"
                class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">Services</a>
            <a href="#produits"
                class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">Collection</a>
            <a href="#temoignages"
                class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">Avis</a>
            <a href="#contact"
                class="block text-base font-medium text-brand-dark hover:text-brand-primary py-2">Contact</a>
            <a href="#contact"
                class="block text-center text-white bg-brand-primary px-4 py-3 rounded-md text-sm font-semibold uppercase tracking-wider">Prendre
                RDV</a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section
        class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 bg-gradient-to-br from-brand-light via-white to-blue-50/30 overflow-hidden">
        <!-- Abstract glowing light background elements -->
        <div
            class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-secondary/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="absolute bottom-10 right-1/10 w-80 h-80 bg-brand-green/5 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">

                <!-- Left text column -->
                <div class="lg:col-span-6 space-y-6 animate-fade-in-up">
                    <span
                        class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider text-brand-primary bg-blue-100/50">
                        ✨ Excellence Optique & Soins
                    </span>
                    <h1
                        class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-brand-dark leading-none">
                        Révélez la beauté de votre <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-brand-secondary">vision</span>.
                    </h1>
                    <p class="text-lg text-gray-600 max-w-xl leading-relaxed">
                        Des examens de vue de haute précision par nos opticiens experts et une collection exclusive de
                        montures de créateurs mondiaux pour magnifier votre regard.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 pt-2">
                        <a href="#contact"
                            class="inline-flex items-center justify-center px-8 py-3.5 rounded-full shadow-lg text-sm font-bold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-secondary hover:shadow-xl hover:-translate-y-0.5 transition-all">
                            Prendre Rendez-vous
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center px-8 py-3.5 rounded-full shadow-sm text-sm font-bold uppercase tracking-wider border-2 border-gray-200 text-brand-dark hover:border-brand-primary hover:text-brand-primary transition-all">
                            Nos Services
                        </a>
                    </div>
                </div>

                <!-- Right visual column -->
                <div class="lg:col-span-6 relative">
                    <!-- Premium Glassmorphism background border effect -->
                    <div
                        class="relative w-full max-w-lg mx-auto aspect-square overflow-hidden rounded-2xl shadow-2xl border border-white/60 bg-white/20 backdrop-blur-sm p-4">
                        <img src="/images/hero.png" alt="Lunettes de créateurs haut de gamme"
                            class="w-full h-full object-cover rounded-xl transition-transform duration-700 hover:scale-105">
                    </div>
                    <!-- Experience badge indicator overlay -->
                    <div
                        class="absolute -bottom-6 -left-6 bg-white/95 backdrop-blur shadow-xl rounded-2xl p-5 border border-blue-50/50 hidden sm:flex items-center space-x-4 max-w-xs">
                        <div class="p-3 bg-brand-primary/10 text-brand-primary rounded-xl">
                            <!-- Glasses Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-extrabold text-brand-dark">Garantie Qualité</h4>
                            <p class="text-xs text-gray-500">Verres certifiés d'origine française & européenne</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION : À PROPOS -->
    <section id="propos" class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- About Image Column -->
                <div class="lg:col-span-5 scroll-reveal">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                        <img src="/images/boutique.png" alt="Notre boutique haut de gamme"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- About Text Column -->
                <div class="lg:col-span-7 space-y-6 scroll-reveal">
                    <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">L'Art de Voir</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                        Une signature optique unique, dédiée à votre santé visuelle depuis 15 ans.
                    </h2>
                    <p class="text-gray-600 leading-relaxed font-light">
                        Chez <strong class="font-medium text-brand-dark">Vision Signature</strong>, nous associons
                        l'expertise médicale de l'optométrie à une attention artistique rigoureuse pour sélectionner vos
                        montures. Notre mission est d'offrir une expérience de conseil d'exception et des solutions
                        visuelles sur mesure qui épousent votre style de vie.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4 border-t border-gray-100">
                        <div>
                            <span class="block text-4xl font-extrabold text-brand-primary">15+</span>
                            <span class="text-sm font-semibold text-gray-500 block mt-1">Ans d'Expertise Médicale</span>
                        </div>
                        <div>
                            <span class="block text-4xl font-extrabold text-brand-green">10k+</span>
                            <span class="text-sm font-semibold text-gray-500 block mt-1">Regards Sublimés</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION : NOS SERVICES -->
    <section id="services" class="py-20 lg:py-32 bg-brand-light/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4 scroll-reveal">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Savoir-faire et
                    Précision</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Des services sur-mesure pour votre bien-être visuel
                </h2>
                <p class="text-gray-600 font-light">
                    Notre équipe d’opticiens et d'optométristes diplômés vous accompagne à chaque étape avec des
                    technologies de diagnostic visuel de pointe.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Service 1 -->
                <div
                    class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group scroll-reveal">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors duration-300">
                        <!-- Eye Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Examen de la Vue</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-light">
                        Contrôle optométrique poussé et bilan visuel complet réalisé avec des appareils médicaux de
                        dernière génération.
                    </p>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group scroll-reveal">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors duration-300">
                        <!-- Sparkles Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Verres Correcteurs</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-light">
                        Technologie de verres unifocaux et progressifs antireflets, hydrophobes et protecteurs contre la
                        lumière bleue.
                    </p>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group scroll-reveal">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors duration-300">
                        <!-- Custom Glasses Frame -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 11h.01M17 11h2a2 2 0 012 2v1a2 2 0 01-2 2h-2a2 2 0 01-2-2v-1a2 2 0 012-2zm-12 0h2a2 2 0 012 2v1a2 2 0 01-2 2H5a2 2 0 01-2-2v-1a2 2 0 012-2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Montures de Créateurs</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-light">
                        Sélection pointue de créateurs internationaux de lunettes de vue et de lunettes de soleil
                        alliant esthétique et confort.
                    </p>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-white rounded-2xl p-8 border border-gray-100 shadow-sm transition-all duration-300 hover:shadow-xl hover:-translate-y-1 group scroll-reveal">
                    <div
                        class="w-12 h-12 rounded-xl bg-blue-50 text-brand-primary flex items-center justify-center mb-6 group-hover:bg-brand-primary group-hover:text-white transition-colors duration-300">
                        <!-- Health Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-brand-dark mb-3">Santé Visuelle</h3>
                    <p class="text-sm text-gray-500 leading-relaxed font-light">
                        Conseils sur l'hygiène visuelle au quotidien (écrans, fatigue oculaire) et adaptation
                        personnalisée de vos lentilles.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : POURQUOI NOUS CHOISIR -->
    <section class="py-20 lg:py-32 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- Detail text content Column -->
                <div class="lg:col-span-6 space-y-8 scroll-reveal">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Différence
                            Clinique</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight mt-2">
                            L'excellence de la santé visuelle accessible à tous.
                        </h2>
                    </div>

                    <!-- Bullet points structure -->
                    <div class="space-y-6">

                        <!-- Choice 1 -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-brand-dark">Équipements Haute Précision</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">Nous utilisons le matériel ophtalmique
                                    de pointe pour cartographier votre vue et dépister les troubles oculaires.</p>
                            </div>
                        </div>

                        <!-- Choice 2 -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-brand-dark">Tiers Payant Intégral</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">Conventionné avec l'ensemble des
                                    réseaux de mutuelles pour vous éviter l'avance des frais de santé.</p>
                            </div>
                        </div>

                        <!-- Choice 3 -->
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold text-brand-dark">Garanties Sérénité de 2 Ans</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">En cas de casse, d'inadaptation ou de
                                    détérioration de vos verres progressifs ou montures.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Right visual Column -->
                <div class="lg:col-span-6 scroll-reveal">
                    <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                        <img src="/images/exam.png" alt="Examen visuel ophtalmique de pointe"
                            class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION : GALERIE DE PRODUITS -->
    <section id="produits" class="py-20 lg:py-32 bg-brand-light/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4 scroll-reveal">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Sélection Exclusive</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Nos Montures & Lunettes Prestige
                </h2>
                <p class="text-gray-600 font-light">
                    Chaque silhouette est une célébration du design. Découvrez un aperçu de nos gammes optiques et
                    solaires disponibles en magasin.
                </p>
            </div>

            <!-- Interactive visual categories -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Category 1 -->
                <div class="relative rounded-2xl overflow-hidden group shadow-md aspect-[16/10] scroll-reveal">
                    <img src="/images/hero.png" alt="Montures de vue"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/20 to-transparent flex flex-col justify-end p-8">
                        <span class="text-xs font-bold tracking-widest text-brand-secondary uppercase mb-2">Collection
                            Vista</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Montures de Vue Minimalistes</h3>
                        <p class="text-gray-300 text-sm font-light max-w-md">Titanes, acétates japonais et designs
                            contemporains de créateurs.</p>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="relative rounded-2xl overflow-hidden group shadow-md aspect-[16/10] scroll-reveal">
                    <img src="/images/boutique.png" alt="Collection Solaire"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/20 to-transparent flex flex-col justify-end p-8">
                        <span class="text-xs font-bold tracking-widest text-brand-green uppercase mb-2">Collection
                            Sun</span>
                        <h3 class="text-2xl font-bold text-white mb-2">Modèles Solaires de Luxe</h3>
                        <p class="text-gray-300 text-sm font-light max-w-md">Protégez vos yeux avec style. Verres
                            solaires polarisés haute définition.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION : TÉMOIGNAGES -->
    <section id="temoignages" class="py-20 lg:py-32 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-4 scroll-reveal">
                <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Partage d'Expérience</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight">
                    Ils font confiance à Vision Signature
                </h2>
                <p class="text-gray-600 font-light">
                    La satisfaction de nos patients et clients est au centre de notre attention quotidienne.
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Review 1 -->
                <div
                    class="bg-brand-light rounded-2xl p-8 border border-gray-100/50 flex flex-col justify-between scroll-reveal">
                    <div>
                        <!-- Rating Stars -->
                        <div class="flex space-x-1 text-yellow-500 mb-6">
                            <span class="text-xl">★</span><span class="text-xl">★</span><span
                                class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed font-light italic">
                            "Un service d'optométrie d'une précision incroyable. L'opticien a pris le temps d'analyser
                            ma fatigue oculaire. Ma nouvelle monture progressive est à la fois légère et esthétique."
                        </p>
                    </div>
                    <div class="mt-8 pt-4 border-t border-gray-200/50 flex items-center space-x-3">
                        <div>
                            <h4 class="text-sm font-bold text-brand-dark">Arnaud V.</h4>
                            <p class="text-xs text-gray-500">Client fidèle depuis 3 ans</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div
                    class="bg-brand-light rounded-2xl p-8 border border-gray-100/50 flex flex-col justify-between scroll-reveal">
                    <div>
                        <!-- Rating Stars -->
                        <div class="flex space-x-1 text-yellow-500 mb-6">
                            <span class="text-xl">★</span><span class="text-xl">★</span><span
                                class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed font-light italic">
                            "Excellent accueil et large sélection de fabricants de créateurs introuvables ailleurs. Les
                            conseils en visagisme m'ont aidé à choisir la monture parfaite pour mon visage."
                        </p>
                    </div>
                    <div class="mt-8 pt-4 border-t border-gray-200/50 flex items-center space-x-3">
                        <div>
                            <h4 class="text-sm font-bold text-brand-dark">Élise M.</h4>
                            <p class="text-xs text-gray-500">Achat de solaire & verres correcteurs</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div
                    class="bg-brand-light rounded-2xl p-8 border border-gray-100/50 flex flex-col justify-between scroll-reveal">
                    <div>
                        <!-- Rating Stars -->
                        <div class="flex space-x-1 text-yellow-500 mb-6">
                            <span class="text-xl">★</span><span class="text-xl">★</span><span
                                class="text-xl">★</span><span class="text-xl">★</span><span class="text-xl">★</span>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed font-light italic">
                            "Le tiers payant a été entièrement géré directement avec ma mutuelle. Je n'ai eu aucune
                            paperasse administrative à faire. Service impeccable et très humain !"
                        </p>
                    </div>
                    <div class="mt-8 pt-4 border-t border-gray-200/50 flex items-center space-x-3">
                        <div>
                            <h4 class="text-sm font-bold text-brand-dark">Julien D.</h4>
                            <p class="text-xs text-gray-500">Client - Lunettes de vue</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECTION : CONTACT & RENDEZ-VOUS -->
    <section id="contact" class="py-20 lg:py-32 bg-brand-light/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">

                <!-- Col 1 : Info + Maps Mockup -->
                <div class="lg:col-span-5 space-y-8 scroll-reveal">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-widest text-brand-primary">Planifier une
                            Visite</span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-dark tracking-tight mt-2">Nous sommes
                            là pour vous.</h2>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <span class="text-brand-primary font-bold text-lg mt-0.5">📍</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Notre Adresse</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">15 Avenue de l'Optique, 75008 Paris -
                                    France</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <span class="text-brand-primary font-bold text-lg mt-0.5">📞</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Téléphone & WhatsApp</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">Tél: +33 1 23 45 67 89</p>
                                <a href="https://wa.me/33123456789" target="_blank"
                                    class="inline-flex items-center text-xs font-bold text-brand-green hover:underline mt-1.5">
                                    💬 Discuter via WhatsApp
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <span class="text-brand-primary font-bold text-lg mt-0.5">⏰</span>
                            <div>
                                <h4 class="font-bold text-brand-dark">Horaires d'Ouverture</h4>
                                <p class="text-sm text-gray-500 font-light mt-1">Lundi au Samedi : 09:00 – 19:30</p>
                                <p class="text-xs text-red-500 mt-1">Fermé le Dimanche</p>
                            </div>
                        </div>
                    </div>

                    <!-- Beautiful Google Maps Fallback Grid -->
                    <div
                        class="rounded-2xl border border-gray-200 overflow-hidden shadow-sm aspect-video bg-gray-100 flex flex-col justify-center items-center text-center p-6">
                        <div class="text-3xl mb-2">🗺️</div>
                        <h4 class="font-bold text-brand-dark text-sm">Vision Signature Paris</h4>
                        <p class="text-xs text-gray-500 max-w-xs mt-1">Idéalement situé à proximité du métro - parking
                            réservé aux clients.</p>
                        <!-- Structured element for CSS map mock -->
                        <div
                            class="mt-4 w-full h-2 bg-gradient-to-r from-brand-secondary/30 via-brand-green/30 to-brand-primary/30 rounded-full animate-pulse">
                        </div>
                    </div>
                </div>

                <!-- Col 2 : Elegant Booking Form -->
                <div
                    class="lg:col-span-7 bg-white rounded-2xl p-8 lg:p-10 border border-gray-100 shadow-md scroll-reveal">
                    <h3 class="text-xl font-extrabold text-brand-dark mb-2">Demande de Consultation</h3>
                    <p class="text-sm text-gray-500 font-light mb-8">Remplissez ce formulaire rapide pour pré-réserver
                        votre créneau horaire. Notre secrétariat vous guidera pour confirmer.</p>

                    <form id="booking-form" class="space-y-6">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-xs font-semibold uppercase text-gray-500 mb-2">Nom
                                    Complet</label>
                                <input type="text" id="name" required
                                    class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors">
                            </div>
                            <div>
                                <label for="phone"
                                    class="block text-xs font-semibold uppercase text-gray-500 mb-2">Numéro de
                                    téléphone</label>
                                <input type="tel" id="phone" required
                                    class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="email"
                                class="block text-xs font-semibold uppercase text-gray-500 mb-2">Email</label>
                            <input type="email" id="email" required
                                class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="service"
                                    class="block text-xs font-semibold uppercase text-gray-500 mb-2">Motif du
                                    rendez-vous</label>
                                <select id="service"
                                    class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors">
                                    <option>Bilan visuel / Examen de la vue</option>
                                    <option>Choix de nouvelles montures</option>
                                    <option>Ajustement / Adaptation lentilles</option>
                                    <option>Conseil & Autre demande</option>
                                </select>
                            </div>
                            <div>
                                <label for="date" class="block text-xs font-semibold uppercase text-gray-500 mb-2">Date
                                    Souhaitée</label>
                                <input type="date" id="date" required
                                    class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors">
                            </div>
                        </div>

                        <div>
                            <label for="message"
                                class="block text-xs font-semibold uppercase text-gray-500 mb-2">Informations
                                complémentaires</label>
                            <textarea id="message" rows="4"
                                class="w-full bg-gray-50 px-4 py-3 rounded-lg border border-gray-200 text-sm focus:outline-none focus:border-brand-primary transition-colors"
                                placeholder="Détaillez vos besoins ou précisez vos disponibilités..."></textarea>
                        </div>

                        <div class="flex items-center space-x-2">
                            <input type="checkbox" id="rgpd" required
                                class="rounded text-brand-primary border-gray-300">
                            <label for="rgpd" class="text-xs text-gray-500">J'accepte le traitement de mes données
                                uniquement pour planifier ce rendez-vous.</label>
                        </div>

                        <button type="submit"
                            class="w-full py-4 text-sm font-bold uppercase tracking-wider text-white bg-brand-primary hover:bg-brand-secondary rounded-lg transition-colors">
                            Envoyer la Demande de Rendez-vous
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-brand-dark py-12 text-gray-400 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- Brand block -->
                <div class="space-y-4">
                    <span class="text-xl font-bold tracking-tight text-white block">VISION SIGNATURE</span>
                    <p class="text-xs leading-relaxed text-gray-400">
                        Votre partenaire optique et visuel pour des montures stylisées et des examens de vue
                        d’excellence.
                    </p>
                </div>

                <!-- Fast Links -->
                <div class="space-y-3">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider">Liens Rapides</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#propos" class="hover:text-white transition-colors">À Propos</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Nos Services</a></li>
                        <li><a href="#produits" class="hover:text-white transition-colors">Nos Montures</a></li>
                    </ul>
                </div>

                <!-- Legals -->
                <div class="space-y-3">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider">Informations</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="#" class="hover:text-white transition-colors">Mentions Légales</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Confidentialité RGPD</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cookies</a></li>
                    </ul>
                </div>

                <!-- Socials & Dev Info -->
                <div class="space-y-4">
                    <h4 class="text-sm font-bold text-white uppercase tracking-wider">Moyens de Paiement</h4>
                    <p class="text-xs text-gray-400">
                        CB, Visa, Mastercard, Chèques. Tiers Payant Mutuelle accepté.
                    </p>
                    <div class="flex space-x-3 text-lg">
                        <span>💳</span>
                        <span>🏥</span>
                        <span>🛡️</span>
                    </div>
                </div>

            </div>

            <!-- Bottom Sub-footer -->
            <div
                class="mt-12 pt-8 border-t border-gray-800 text-center text-xs text-gray-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>&copy; 2026 Vision Signature. Tous droits réservés.</p>
                <p class="text-[10px] text-gray-600">Site local autonome compilé localement par Vite & Tailwind v4.</p>
            </div>
        </div>
    </footer>

    <!-- TOAST SUCCESS FEEDBACK -->
    <div id="toast-success"
        class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 pointer-events-none transition-all duration-500 ease-out max-w-sm w-full bg-white rounded-2xl shadow-2xl border border-brand-green/20 p-5 flex items-start space-x-4">
        <div
            class="w-10 h-10 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center flex-shrink-0 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <div>
            <h4 class="text-sm font-bold text-brand-dark">Demande envoyée !</h4>
            <p class="text-xs text-gray-500 mt-1">Merci pour votre demande. Un conseiller Vision Signature vous
                contactera par téléphone sous 2 heures ouvrées pour valider la date définitive.</p>
        </div>
    </div>

</body>

</html>