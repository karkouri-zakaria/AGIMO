<?php
    error_log("Debug: PHP is running");
     ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./dist/styles.css" rel="stylesheet">
        <title>Agimo</title>
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="./assets/images/ico.png">
        <!-- Smooth Scrolling -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </head>
    <body class="bg-background-main font-roboto tracking-wide">
        <header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
            <div class="flex items-center justify-between px-6 py-4">
                <!-- Logo on the left -->
                <div class="flex items-center">
                    <img src="assets/images/AGIMOLOGO FINAL.svg" alt="Logo" class="h-24 w-auto pl-8">
                </div>
                <!-- Contact text on the right -->
                <div class="flex items-center">
                    <span class="text-main font-extrabold text-2xl cursor-pointer hover:text-gray-600 transition-colors">
                    Nous contacter
                    </span>
                </div>
            </div>
        </header>
        <main>
            <!-- Hero Section -->
            <section class="bg-red-100 h-screen flex flex-col" style="background-image: url('https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos.webp'); background-size: cover; background-position: center;">
                <!-- First div -->
                <div class="bg-black bg-opacity-35 w-full h-5/6 flex flex-col items-center justify-center text-center pt-32">
                    <h1 class="text-white text-5xl font-extrabold mb-4">Investissez dans l'immobilier à AGIMO<br>avec un accompagnement sur mesure !</h1>
                    <h2 class="text-white text-3xl font-bold mb-14 text-center whitespace-nowrap">Découvrez les opportunités rentables à AGIMO et bénéficiez d'un accompagnement expert<br>pour un investissement sécurisé.</h2>
                    <a href="#contact_us" class="bg-second hover:bg-second-700 text-white font-bold py-2 px-6 rounded-full transition-colors duration-300 text-3xl">Simulez votre investissement</a>
                </div>
                <!-- Second div -->
                <div class="w-full h-1/6 bg-main flex items-center justify-center overflow-hidden relative">
                    <div class="w-2/3 h-full flex items-center justify-center overflow-hidden">
                        <div id="carousel" class="flex transition-transform duration-500 ease-in-out" style="width: 175%;">
                            <!-- Image 1 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 1" class="h-16 object-contain">
                            </div>
                            <!-- Image 2 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 2" class="h-16 object-contain">
                            </div>
                            <!-- Image 3 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 3" class="h-16 object-contain">
                            </div>
                            <!-- Image 4 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 4" class="h-16 object-contain">
                            </div>
                            <!-- Image 5 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 5" class="h-16 object-contain">
                            </div>
                            <!-- Image 6 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 6" class="h-16 object-contain">
                            </div>
                            <!-- Image 7 -->
                            <div class="w-1/4 flex-shrink-0 px-2 flex items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/bnp-paribas-logo-investissement-angers-charleos.webp" alt="Image 7" class="h-16 object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 2 -->
            <section class="flex items-center justify-center">
                <div class="rounded-2xl bg-second h-2/3 w-2/3 flex flex-col items-center justify-center p-6 m-14">
                    <h2 class="text-white text-2xl font-bold mb-4 text-center">Statistiques clés sur le marché immobilier à AGIMO</h2>
                    <div class="flex justify-between items-center w-full space-x-4">
                        <div class="text-center flex-1">
                            <div class="text-second text-8xl font-extrabold mb-2" style="text-shadow: -2px -2px 0 white, 2px -2px 0 white, -2px 2px 0 white, 2px 2px 0 white;">6.7%</div>
                            <h3 class="text-white text-lg font-extrabold">rentabilité pour les investissements sur la ville de AGIMO</h3>
                        </div>
                        <div class="text-center flex-1">
                            <div class="text-second text-8xl font-extrabold mb-2" style="text-shadow: -2px -2px 0 white, 2px -2px 0 white, -2px 2px 0 white, 2px 2px 0 white;">+26%</div>
                            <h3 class="text-white text-lg font-extrabold">loyer médian sur 5 ans (4ème arrondissement)</h3>
                        </div>
                        <div class="text-center flex-1">
                            <div class="text-second text-8xl font-extrabold mb-2" style="text-shadow: -2px -2px 0 white, 2px -2px 0 white, -2px 2px 0 white, 2px 2px 0 white;">+33%</div>
                            <h3 class="text-white text-lg font-extrabold">Prix moyen du m² sur 5 ans (4ème arrondissement)</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 3 -->
            <section class="flex items-start justify-center p-8 relative">
                <!-- Background Image -->
                <img src="assets/images/Vague-scaled.svg" alt="Background" class="absolute inset-0 w-full object-left">
                <div class="w-full px-44 flex space-x-40 mt-44 relative z-10">
                    <!-- First Column -->
                    <div class="w-1/2 flex flex-col">
                        <h2 class="text-white text-3xl font-bold mb-4">Pourquoi investir à</h2>
                        <h1 class="text-white text-5xl font-extrabold mb-8 relative -top-6">AGIMO ?</h1>
                        <!-- 2x2 Grid -->
                        <div class="grid grid-cols-2 grid-rows-2 gap-6">
                            <div class="p-6 flex flex-col items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/ville-dynamique-expansion-investissement-angers-charleos.gif" alt="element 1" class="h-24 mb-3">
                                <span class="text-white text-2xl font-bold text-center leading-relaxed">Ville dynamique et en pleine expansion</span>
                            </div>
                            <div class="p-6 flex flex-col items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/ville-dynamique-expansion-investissement-angers-charleos.gif" alt="element 2" class="h-24 mb-3">
                                <span class="text-white text-2xl font-bold text-center leading-relaxed">Pôle universitaire attractif</span>
                            </div>
                            <div class="p-6 flex flex-col items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/ville-dynamique-expansion-investissement-angers-charleos.gif" alt="element 3" class="h-24 mb-3">
                                <span class="text-white text-2xl font-bold text-center leading-relaxed">Forte demande locative</span>
                            </div>
                            <div class="p-6 flex flex-col items-center justify-center">
                                <img src="https://charleos.com/wp-content/uploads/2025/03/ville-dynamique-expansion-investissement-angers-charleos.gif" alt="element 4" class="h-24 mb-3">
                                <span class="text-white text-2xl font-bold text-center leading-relaxed">Dispositifs fiscaux avantageux</span>
                            </div>
                        </div>
                    </div>
                    <!-- Second Column -->
                    <div class="w-1/2 flex flex-col">
                        <h3 class="text-white text-2xl mb-4 font-extrabold text-center">Quartiers dynamiques marseillais</h3>
                        <div class="flex-1 relative">
                            <img src="assets/images/Map.webp" alt="Carte de AGIMO" class="w-full h-full object-cover rounded-3xl">
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 4 -->
            <section class="h-screen flex flex-col items-center justify-center p-8">
                <!-- H1 Title -->
                <h1 class="text-main text-4xl font-semibold mb-12 text-center">Où investir à AGIMO ?</h1>
                <!-- 2x4 Grid -->
                <div class="grid grid-cols-4 grid-rows-2 gap-12 w-full text-second px-44 mb-12">
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-3 flex flex-col items-start justify-center flex-grow">
                            <h1 class="text-2xl font-semibold mb-3 text-center w-full">1er Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Centre historique et touristique<br>
                                • Forte demande locative étudiante
                            </p>
                        </div>  
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="1er Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-3 flex flex-col items-start justify-center flex-grow">
                            <h1 class="text-2xl font-semibold mb-3 text-center w-full">2ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Quartier d'affaires en développement<br>
                                • Excellent potentiel de plus-value
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="2ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-3 flex flex-col items-start justify-center flex-grow">
                            <h1 class="text-2xl font-semibold mb-3 text-center w-full">3ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Proximité universités et écoles<br>
                                • Marché locatif dynamique
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="3ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-6 flex flex-col items-center justify-center flex-grow">
                            <h1 class="text-2xl font-bold mb-3 text-center">4ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Quartier résidentiel prisé<br>
                                • Transports en commun développés
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="4ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-6 flex flex-col items-center justify-center flex-grow">
                            <h1 class="text-2xl font-bold mb-3 text-center">5ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Zone portuaire en rénovation<br>
                                • Investissement à fort potentiel
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="5ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-6 flex flex-col items-center justify-center flex-grow">
                            <h1 class="text-2xl font-bold mb-3 text-center">6ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Quartier familial recherché<br>
                                • Espaces verts et commerces
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="6ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-6 flex flex-col items-center justify-center flex-grow">
                            <h1 class="text-2xl font-bold mb-3 text-center">7ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Secteur industriel en mutation<br>
                                • Prix attractifs et perspectives
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="7ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                    <div class="bg-white rounded-t-3xl flex flex-col border border-white/30 hover:bg-white/30 transition-all duration-300 overflow-hidden" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                        <div class="p-6 flex flex-col items-center justify-center flex-grow">
                            <h1 class="text-2xl font-bold mb-3 text-center">8ème Arrondissement</h1>
                            <p class="text-md font-semibold my-4 text-left">
                                • Plages et cadre de vie exceptionnel<br>
                                • Marché haut de gamme stable
                            </p>
                        </div>
                        <img src="https://charleos.com/wp-content/uploads/2025/05/investir-a-marseille-charleos-quartier-belle-de-mai.webp" alt="8ème Arrondissement" class="w-full h-32 object-cover">
                    </div>
                </div>
                <!-- CTA Link -->
                <a href="#contact" class="bg-main hover:bg-second-700 text-white font-bold py-2 px-6 rounded-full transition-colors duration-300 text-2xl">
                Simulez votre investissement
                </a>
            </section>
            <!-- Section 5 -->
            <section class="h-screen flex flex-col items-center justify-center p-8 text-main">
                <!-- H1 Title -->
                <h1 class="text-main text-4xl font-semibold mb-12 text-center">Simulation sur le 4e arrondissement</h1>
                <!-- Card -->
                <div class=" w-4/5 bg-white rounded-3xl flex flex-row items-center" style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);">
                    <div class="h-full w-1/2 relative" 
                        x-data="{
                        current: 0,
                        images: [
                        'https://charleos.com/wp-content/uploads/2025/03/offres-investissement-angers-charleos-investissement-locatif-C.webp',
                        'https://charleos.com/wp-content/uploads/2025/03/offres-investissement-angers-charleos-investissement-locatif-G.webp',
                        'https://charleos.com/wp-content/uploads/2025/03/offres-investissement-angers-charleos-investissement-locatif-C.webp',
                        'https://charleos.com/wp-content/uploads/2025/03/offres-investissement-angers-charleos-investissement-locatif-G.webp',
                        'https://charleos.com/wp-content/uploads/2025/03/offres-investissement-angers-charleos-investissement-locatif-C.webp',
                        ],
                        autoplay() {
                        setInterval(() => {
                        this.current = (this.current + 1) % this.images.length;
                        }, 5000);
                        }
                        }"
                        x-init="autoplay()">
                        <!-- Image -->
                        <div class="h-full w-full">
                            <img 
                                :src="images[current]" 
                                alt="" 
                                class="w-full h-full object-contain rounded-l-2xl transition duration-500"
                                />
                        </div>
                        <!-- Dots Positioned Higher Inside the Image -->
                        <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2">
                            <template x-for="(image, index) in images" :key="index">
                                <button 
                                    class="w-3 h-3 rounded-full transition-colors duration-300"
                                    :class="current === index ? 'bg-white' : 'bg-gray-400'"
                                    @click="current = index"
                                    ></button>
                            </template>
                        </div>
                    </div>
                    <div class="h-full w-1/2 p-8 flex flex-col justify-center">
                        <h1 class="text-2xl font-bold mb-4">Le quartier des Cinq Avenues (4e arr.)</h1>
                        <h3 class="text-xl font-medium mb-4">T2 à 169 000 euros</h3>
                        <!-- Accordion -->
                        <div class="space-y-2 text-main">
                            <!-- Accordion Item 1 -->
                            <div class="">
                                <button class="accordion-toggle w-full px-4 py-3 text-left text-sm font-medium hover:bg-gray-50 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(1)">
                                <span class="text-xl">🏘️ Cadre de vie recherché</span>
                                <span id="icon-1" class="w-4 h-4 flex items-center justify-center text-white text-md font-light transition-all duration-500 bg-main rounded-full"></span>
                                </button>
                                <div id="content-1" class="px-4 pb-3 text-md transition-all duration-1000">
                                    Rentabilité brute: 7.2% • Prix au m²: 3,800€ • Charges: 150€/mois
                                </div>
                            </div>
                            <!-- Accordion Item 2 -->
                            <div class="">
                                <button class="accordion-toggle w-full px-4 py-3 text-left text-sm font-medium hover:bg-gray-50 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(2)">
                                <span class="text-xl">🚆 Accessibilité</span>
                                <span id="icon-2" class="w-4 h-4 flex items-center justify-center text-white text-md font-light transition-all duration-500 bg-main rounded-full">+</span>
                                </button>
                                <div id="content-2" class="hidden px-4 pb-3 text-md transition-all duration-1000">
                                    Métro Cinq Avenues (2 min) • Universités (15 min) • Centre-ville (10 min)
                                </div>
                            </div>
                            <!-- Accordion Item 3 -->
                            <div class="">
                                <button class="accordion-toggle w-full px-4 py-3 text-left text-sm font-medium hover:bg-gray-50 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(3)">
                                <span class="text-xl">📈 Dynamique immobilière</span>
                                <span id="icon-3" class="w-4 h-4 flex items-center justify-center text-white text-md font-light transition-all duration-500 bg-main rounded-full">+</span>
                                </button>
                                <div id="content-3" class="hidden px-4 pb-3 text-md transition-all duration-1000">
                                    44 m² • 2 pièces • 1 chambre • Balcon • Parking inclus
                                </div>
                            </div>
                            <!-- Accordion Item 4 -->
                            <div class="">
                                <button class="accordion-toggle w-full px-4 py-3 text-left text-sm font-medium hover:bg-gray-50 focus:outline-none flex justify-between items-center" onclick="toggleAccordion(4)">
                                <span class="text-xl">🎯 Potentiel locatif</span>
                                <span id="icon-4" class="w-4 h-4 flex items-center justify-center text-white text-md font-light transition-all duration-500 bg-main rounded-full">+</span>
                                </button>
                                <div id="content-4" class="hidden px-4 pb-3 text-md">
                                    Rénové récemment • Cuisine équipée • Prêt à louer • DPE: C
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section 6 -->
            <section class="flex flex-col items-center justify-center p-8 bg-main">
                <h2 class="text-4xl font-extrabold text-white mt-16">Accompagnement Charleos :</h2>
                <h2 class="text-4xl font-extrabold text-second">
                Notre Méthodologie</h3>
                <div class="flex items-center justify-center mt-8 mx-44 space-x-16 space-y-4 text-white text-center">
                    <div class="flex flex-col items-center justify-center mt-8">
                        <img src="https://charleos.com/wp-content/uploads/2025/03/analyse-projet-objectif-investissement-angers-charleos-investissement-locatif.webp" alt="analyse projet" class="h-24">
                        <h3 class="text-2xl font-bold mb-4">Analyse de votre projet et de vos objectifs</h3>
                        <p class="text-md mb-4 font-medium">Nous étudions vos objectifs d'investissement et votre situation financière pour vous proposer les meilleures options.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-8">
                        <img src="https://charleos.com/wp-content/uploads/2025/03/analyse-projet-objectif-investissement-angers-charleos-investissement-locatif.webp" alt="analyse projet" class="h-24">
                        <h3 class="text-2xl font-bold mb-4">Analyse de votre projet et de vos objectifs</h3>
                        <p class="text-md mb-4 font-medium">Nous étudions vos objectifs d'investissement et votre situation financière pour vous proposer les meilleures options.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-8">
                        <img src="https://charleos.com/wp-content/uploads/2025/03/analyse-projet-objectif-investissement-angers-charleos-investissement-locatif.webp" alt="analyse projet" class="h-24">
                        <h3 class="text-2xl font-bold mb-4">Analyse de votre projet et de vos objectifs</h3>
                        <p class="text-md mb-4 font-medium">Nous étudions vos objectifs d'investissement et votre situation financière pour vous proposer les meilleures options.</p>
                    </div>
                    <div class="flex flex-col items-center justify-center mt-8">
                        <img src="https://charleos.com/wp-content/uploads/2025/03/analyse-projet-objectif-investissement-angers-charleos-investissement-locatif.webp" alt="analyse projet" class="h-24">
                        <h3 class="text-2xl font-bold mb-4">Analyse de votre projet et de vos objectifs</h3>
                        <p class="text-md mb-4 font-medium">Nous étudions vos objectifs d'investissement et votre situation financière pour vous proposer les meilleures options.</p>
                    </div>
                </div>
            </section>
            <!-- Section 7 -->
            <section class="flex flex-col items-center justify-center p-8">
            </section>
            <!-- Section 8 -->
            <section class="flex flex-col items-center justify-center p-8 bg-second">
                <h2 class="text-4xl font-extrabold text-white mt-16">Obtenez votre étude personnalisée</h2>
                <h2 class="text-4xl font-extrabold text-main">
                gratuitement</h3>
                <div class="flex items-center justify-center mt-14 mx-44 space-x-16 space-y-4 text-white text-center">
                    <div class="w-1/2 space-y-6">
                        <input type="text" id="prenom" name="prenom" placeholder="Prénom *" required class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <input type="text" id="nom" name="nom" placeholder="Nom *" required class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <input type="text" id="pays" name="pays" placeholder="Pays de domiciliation *" required class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <input type="email" id="email" name="email" placeholder="Adresse e-mail *" required class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <input type="tel" id="telephone" name="telephone" placeholder="Téléphone *" required class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <input type="text" id="objectif" name="objectif" placeholder="Objectif d'investissement (résidence principale, locatif...)" class="w-full px-8 py-4 bg-white text-black rounded-full border-none outline-none placeholder-black placeholder:font-medium">
                        <form>
                            <button type="submit" class="px-6 py-2 bg-main text-white text-2xl font-extrabold rounded-full hover:bg-second-700 transition-colors duration-300 mt-12">Je lance mon projet</button>
                        </form>
                    </div>
                    <div class="w-1/2 flex justify-evenly items-start text-center space-x-8">
                        <div class="flex flex-col items-center justify-start">
                            <img src="https://charleos.com/wp-content/uploads/2025/02/Frederick-Tailpied-Gestionnaire-pratrimoine-scaled-1.webp" alt="Frédérick TALPIED" class="h-96 mb-4">
                            <h2 class="text-2xl font-extrabold text-main">Frédérick TALPIED</h2>
                            <p class="text-xl font-extrabold">Associé Gérant</p>
                            <p class="text-xl font-medium m-8"> <span class="text-3xl px-2 font-extrabold text-main">☎</span> 06 12 64 40 26</p>
                            <button type="submit" class="px-6 py-2 bg-main text-white text-md font-extrabold rounded-full hover:bg-second-700 transition-colors duration-300">Prendre rendez-vous</button>
                        </div>
                        <div class="flex flex-col items-center justify-start">
                            <img src="https://charleos.com/wp-content/uploads/2025/02/Frederick-Tailpied-Gestionnaire-pratrimoine-scaled-1.webp" alt="Atda DIAO" class="h-96 mb-4">
                            <h2 class="text-2xl font-extrabold text-main">Aïda DIAO</h2>
                            <p class="text-xl font-bold">Chasseur immobilier à AGIMO</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="flex flex-col justify-center space-x-8 p-8 pt-16 bg-second">
            <div class="flex justify-center space-x-16 pt-16">
                <div class="flex flex-col items-center">
                    <img src="assets/images/AGIMOLOGO FINAL.svg" alt="Charleos Logo" class="h-96 bg-white">
                </div>
                <div>
                    <div class="mb-8 mr-24">
                        <h2 class="text-4xl font-extrabold text-white mb-4">Services</h2>
                        <ul class="text-main text-md font-medium">
                            <li>Suivi de A à Z</li>
                            <li>Recherche de biens</li>
                            <li>Recherche de financement</li>
                            <li>Service de gestion locative</li>
                            <li>Aide à la fiscalité française</li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-4xl font-extrabold text-white mb-4">Conseils</h2>
                        <ul class="text-main text-md font-medium">
                            <li>Conférences et webinaires</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-8 mr-6">
                        <h2 class="text-4xl font-extrabold text-white mb-4">Qui sommes nous ?</h2>
                        <ul class="text-main text-md font-medium">
                            <li>Une entreprise humaine</li>
                            <li>Notre expertise, notre différence</li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="text-4xl font-extrabold text-white mb-4">Réalisations</h2>
                        <ul class="text-main text-md font-medium">
                            <li>Rénovation</li>
                            <li>Meubler mon logement</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <h2 class="text-4xl font-extrabold text-white mb-4">CONTACT</h2>
                    <ul class="text-main text-md font-medium">
                        <li>Contact</li>
                        <li>Mentions légales</li>
                        <li>Confidentialité</li>
                        <li>Politique de cookies</li>
                    </ul>
                    <!-- Social Media Icons -->
                    <div class="flex space-x-4 mt-6">
                        <!-- Instagram -->
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity cursor-pointer">
                            <svg class="w-6 h-6 text-main" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <!-- Facebook -->
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity cursor-pointer">
                            <svg class="w-6 h-6 text-main" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 3.667h-3.533v7.98H9.101z"/>
                            </svg>
                        </div>
                        <!-- LinkedIn -->
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity cursor-pointer">
                            <svg class="w-6 h-6 text-main" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <ul class="flex flex-row justify-center items-center space-x-1 p-8 pt-20 pb-40 text-white text-center font-medium">
                    <li><a href="#">Mentions légales</a></li>
                    <li class="text-white">|</li>
                    <li><a href="#">Contact</a></li>
                    <li class="text-white">|</li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li class="text-white">|</li>
                    <li><a href="#">Gestion des Cookies</a></li>
                </ul>
            </div>
            <div>
            </div>
        </footer>
        <script>
            let currentIndex = 0;
            const carousel = document.getElementById('carousel');
            const totalImages = 7;
            const visibleImages = 4;
            
            function slideCarousel() {
                currentIndex++;
                
                // Calculate the transform percentage
                const translateX = -(currentIndex * (100 / visibleImages));
                carousel.style.transform = `translateX(${translateX}%)`;
                
                // Reset to beginning when we've shown all images
                if (currentIndex >= totalImages - visibleImages + 1) {
                    setTimeout(() => {
                        carousel.style.transition = 'none';
                        currentIndex = 0;
                        carousel.style.transform = 'translateX(0%)';
                        
                        // Re-enable transition after reset
                        setTimeout(() => {
                            carousel.style.transition = 'transform 0.5s ease-in-out';
                        }, 50);
                    }, 500);
                }
            }
            
            // Accordion functionality
            function toggleAccordion(index) {
                const content = document.getElementById(`content-${index}`);
                const icon = document.getElementById(`icon-${index}`);
                
                // Check if this accordion is currently open
                const isCurrentlyOpen = !content.classList.contains('hidden');
                
                // Close all accordions first and set all icons to "+" with blue background
                for (let i = 1; i <= 5; i++) {
                    const otherContent = document.getElementById(`content-${i}`);
                    const otherIcon = document.getElementById(`icon-${i}`);
                    
                    if (otherContent && otherIcon) {
                        otherContent.classList.add('hidden');
                        otherIcon.textContent = '+';
                        otherIcon.classList.remove('bg-transparent');
                        otherIcon.classList.add('bg-main');
                    }
                }
                
                // If the clicked accordion was closed, open it and hide the circle completely
                if (!isCurrentlyOpen) {
                    content.classList.remove('hidden');
                    icon.textContent = '';
                    icon.classList.remove('bg-main');
                    icon.classList.add('bg-transparent');
                }
            }
            
            // Start the carousel when page loads
            document.addEventListener('DOMContentLoaded', function() {
                setInterval(slideCarousel, 500); // Slide every 0.5 seconds
                
                // Initialize first accordion as open by default
                const firstIcon = document.getElementById('icon-1');
                if (firstIcon) {
                    firstIcon.classList.remove('bg-main');
                    firstIcon.classList.add('bg-transparent');
                    firstIcon.textContent = '';
                }
            });
        </script>
    </body>
</html>