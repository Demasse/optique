@extends('layouts.app')

@section('title', 'NEW OPTIC VISION MÉDICAL | Cabinet d\'Optique Médicale - Bafoussam')

@section('content')

    {{-- HERO SECTION --}}
    <section class="hero" id="accueil">
        <div class="container hero-grid">
            <div class="hero-content">
                <span class="section-tag">Cabinet d'Optique Médicale</span>
                <h1>Cabinet <span>NEW OPTIC VISION MÉDICAL</span></h1>
                <div class="slogan-badge">"Votre Partenaire Santé pour la Vue à Vie"</div>
                <p>Spécialiste de la santé visuelle à Bafoussam. Nous assurons la vente de lunettes médicales,
                    d'accessoires optiques, ainsi que le montage, la réparation et le conseil personnalisé.</p>
                <div class="hero-btns">
                    <a href="https://wa.me/237679893519" class="btn btn-action">
                        📞 Nous Contacter (WhatsApp)
                    </a>
                    <a href="#promotions" class="btn btn-outline">Voir les Promos (-50%)</a>
                </div>
            </div>

            <div class="hero-image-card">
                <img src="{{ asset('images/hero.png') }}"
                    alt="Consultation et lunettes médicales chez New Optic Vision Médical Bafoussam">
            </div>
        </div>
    </section>

    {{-- PROMOTIONS & GARANTIES --}}
    <section id="promotions">
        <div class="container">
            <div class="promo-card">
                <div>
                    <span class="section-tag" style="background:rgba(220, 38, 38, 0.2); color:#FCA5A5;">Offre Spéciale
                        Clientèle</span>
                    <h3>Jusqu'à -50% de Remise sur vos Lunettes Médicales</h3>
                    <p style="font-size:0.9rem; color:#CBD5E1;">Bénéficiez de la meilleure qualité optique au meilleur
                        prix à Bafoussam avec des garanties exclusives :</p>
                    <ul class="promo-list">
                        <li>✅ <strong>1 an de garantie</strong> sur vos lunettes médicales</li>
                        <li>✅ Entretien & Conseils <strong>GRATUITS</strong></li>
                        <li>✅ Réparation & Ajustement <strong>GRATUITS</strong></li>
                        <li>✅ Service Après-Vente (SAV) réactif</li>
                    </ul>
                </div>
                <div>
                    <a href="tel:679893519" class="btn btn-action"> Appeler le 679 89 35 19</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES COMPACTS --}}
    <section class="bg-light" id="services">
        <div class="container">
            <div style="text-align:center; margin-bottom: 20px;">
                <span class="section-tag">Notre Savoir-Faire</span>
                <h2 class="section-title">Activités & Services Optiques</h2>
            </div>

            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">👓</div>
                    <h3>Lunettes Médicales</h3>
                    <p>Vente de verres correcteurs adaptés à vos ordonnances ophtalmiques pour une vision nette et
                        confortable.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🛠️</div>
                    <h3>Montage & Réparation</h3>
                    <p>Montage précis de vos verres sur monture et service de réparation rapide (remplacement de vis,
                        plaquettes, ajustement).</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">🧼</div>
                    <h3>Entretien Gratuit</h3>
                    <p>Nettoyage professionnel aux ultrasons et vérification régulière de l'état de vos lunettes sans
                        aucun frais.</p>
                </div>

                <div class="service-card">
                    <div class="service-icon">👨‍⚕️</div>
                    <h3>Conseil en Santé Visuelle</h3>
                    <p>Accompagnement personnalisé pour le choix de vos montures selon la morphologie de votre visage et
                        votre quotidien.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUITS & ACCESSOIRES --}}
    <section id="produits">
        <div class="container">
            <div style="text-align:center; margin-bottom: 20px;">
                <span class="section-tag">Équipements</span>
                <h2 class="section-title">Lunettes & Accessoires Optiques</h2>
            </div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/exam.png') }}" alt="Montures Médicales">
                    </div>
                    <div class="product-info">
                        <h3>Montures Médicales</h3>
                        <p>Large choix de montures solides, légères et élégantes pour adultes et enfants.</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/boutique.png') }}" alt="Verres Teintés et Solaires">
                    </div>
                    <div class="product-info">
                        <h3>Verres Teintés & Solaires</h3>
                        <p>Protection contre les rayons UV avec possibilité de correction médicale.</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('images/first.avif') }}" alt="Accessoires Optiques">
                    </div>
                    <div class="product-info">
                        <h3>Accessoires Optiques</h3>
                        <p>Étuis de protection, lingettes microfibres, sprays nettoyants et cordons.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT & LOCALISATION BAFOUSSAM --}}
    <section class="bg-light" id="contact">
        <div class="container">
            <div style="text-align:center; margin-bottom: 20px;">
                <span class="section-tag">Rendez-Nous Visite</span>
                <h2 class="section-title">Contact & Localisation à Bafoussam</h2>
            </div>

            <div class="contact-grid">
                <div class="contact-box">
                    <h3 style="margin-bottom: 16px;">Coordonnées du Cabinet</h3>

                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <strong>Localisation Exacte :</strong>
                            <p style="color:var(--text-muted); font-size:0.9rem;">Situé aux Arcades de l'Ouest, Face
                                entrée Friperie Marché « A », Bafoussam</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <strong>Téléphones / Contacts :</strong>
                            <p style="color:var(--text-muted); font-size:0.9rem;">
                                <a href="tel:679893519" style="color:var(--green-action); font-weight:700;">679 89 35 19</a>
                                /
                                <a href="tel:677891219" style="color:var(--green-action); font-weight:700;">677 89 12 19</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">🛡️</div>
                        <div>
                            <strong>Garantie & SAV :</strong>
                            <p style="color:var(--text-muted); font-size:0.9rem;">Service Après-Vente garanti sur place
                                pour tout besoin d'ajustement ou de réparation.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-box"
                    style="display:flex; flex-direction:column; justify-content:center; text-align:center;">
                    <h3 style="margin-bottom: 10px;">Une Question ou un Besoin Urgent ?</h3>
                    <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom: 18px;">Contactez directement
                        notre opticien sur WhatsApp pour réserver vos lunettes ou demander un conseil.</p>
                    <a href="https://wa.me/237679893519" target="_blank" class="btn btn-whatsapp" style="padding:14px;">
                        Discuter directement sur WhatsApp (679 89 35 19)
                    </a>
                    <br>
                    <a href="#" class="btn btn-reservation" style="padding:14px;">
                        Faire une reservation
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection