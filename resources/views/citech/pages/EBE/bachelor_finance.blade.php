@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="w-full">
   
    <!-- Main Header Section -->
    <div class="w-full lg:w-[85%] mx-auto mt-5 md:mt-8 lg:mt-10 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col lg:flex-row items-start lg:items-stretch gap-4 p-4 md:p-6 rounded-lg">
            
            <!-- Box 1 - Espace Auditeurs -->
            <div class="w-full lg:w-auto flex-shrink-0">
                <div class="space-y-3">
                    <div class="text-black text-lg md:text-xl font-bold mb-4">
                        Espace Auditeurs
                    </div>
                    
                    <div class="space-y-2">
                        <label for="identifiant_2" class="block text-white text-sm md:text-base">
                            Identifiant
                        </label>
                        <input type="text" 
                               name="identifiant_2" 
                               id="identifiant_2" 
                               class="w-full md:w-40 px-3 py-2 rounded-md border-2 border-white focus:outline-none focus:ring-2 focus:ring-white"
                               required>
                    </div>
                    
                    <div class="space-y-2">
                        <label for="password_2" class="block text-white text-sm md:text-base">
                            Mot de passe
                        </label>
                        <input type="password" 
                               name="mot_de_passe" 
                               id="password_2" 
                               class="w-full md:w-40 px-3 py-2 rounded-md border-2 border-white focus:outline-none focus:ring-2 focus:ring-white"
                               required>
                    </div>
                    
                    <div class="text-white text-xs md:text-sm font-bold">
                        <p class="text-center">
                            Mot de passe oublié? 
                            <a href="#" class="hover:text-gray-300 transition-colors duration-300 underline">
                                Cliquez ici
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="w-full lg:w-auto flex items-center justify-center lg:justify-start mt-4 lg:mt-0">
                <button type="submit" 
                        class="bg-transparent border-none rounded-full hover:scale-105 transition-transform duration-300 cursor-pointer">
                    <img class="w-16 h-16 md:w-20 md:h-20" 
                         src="{{ asset('assets/upload/img/button-1.png') }}" 
                         alt="Connexion">
                </button>
            </div>
            
            <!-- Box 2 - Video -->
            <div class="w-full lg:flex-1 flex items-center justify-center">
                <div class="w-full max-w-md lg:max-w-none">
                    <iframe class="w-full aspect-video rounded-lg shadow-lg" 
                            src="https://www.youtube.com/embed/JUtx6sfELTo" 
                            title="ismparis base FB" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                    </iframe>
                </div>
            </div>
            
            <!-- Box 3 - Inscription Buttons -->
            <div class="w-full lg:w-auto space-y-4 mt-4 lg:mt-8">
                <div class="border border-white bg-transparent text-white text-center p-3 rounded hover:text-gray-300 transition-colors duration-500 cursor-pointer">
                    <p class="font-bold">
                        <a href="#">S'inscrire</a>
                    </p>
                </div>
                
                <div class="border border-white bg-[#2f353e] text-white text-center p-3 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <p>
                        <a href="inscription_finance">
                            BACHELOR 3 FINANCE<br>
                            Analyste Financier
                        </a>
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Info Navigation Cards -->
    <div class="w-full flex justify-center mt-6 md:mt-8 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-4 max-w-6xl w-full">
            <div class="bg-[#2f353e] text-white text-center py-4 px-2 rounded border-4 border-[#2f353e] hover:text-[#f24c21] transition-colors duration-500">
                <p>
                    <a href="programme" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-2 rounded border-4 border-[#2f353e] hover:text-[#f24c21] transition-colors duration-500">
                <p>
                    <a href="equipe_pedagogique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-2 rounded border-4 border-[#2f353e] hover:text-[#f24c21] transition-colors duration-500">
                <p>
                    <a href="conditions" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-2 rounded border-4 border-[#2f353e] hover:text-[#f24c21] transition-colors duration-500">
                <p>
                    <a href="#" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[86%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        <h1 class="text-[#686D76] text-xl md:text-2xl lg:text-3xl font-bold mb-4 md:mb-6">
            Analyste financier, une compétence recherchée !
        </h1>
        
        <div class="space-y-4 text-[#686D76] text-sm md:text-base leading-relaxed">
            <p>
                Qu'entendons-nous par analyste financier ? Le diagnostic financier d'une entreprise peut être rapproché du bilan de santé établi en médecine pour un être humain. Il permet d'identifier les symptômes et de mettre en œuvre une thérapeutique adaptée. Le diagnostic financier s'appuyant sur les performances de l'entreprise propose les mesures à prendre pour assurer sa survie, son redressement et son développement par une nouvelle stratégie.
            </p>
            
            <p>
                En définitive cette compétence est utile autant à l'actionnaire qui se préoccupe de la rentabilité des fonds investis et de l'indépendance de l'entreprise, qu'au banquier qui se préoccupe aussi de rentabilité (aptitude de l'entreprise à rémunérer les fonds empruntés) et de sécurité (aptitude de l'entreprise à rembourser ces mêmes fonds).
            </p>
            
            <p>
                L'analyste financier est un collaborateur indispensable dans les services comptables ou financiers, chez les opérateurs de services crédits chez les banquiers ou encore chez les équipes de contrôles de gestion. Il est en quelque sorte la vigie de l'entreprise ou du financeur.
            </p>
            
            <p>
                Comme pour toutes nos formations, le format pédagogique autorise de se former tout en poursuivant ses activités professionnelles ou autres, et est orienté vers l'acquisition de véritables compétences pour l'excellence par le savoir-faire.
            </p>
            
            <p class="font-semibold">Docteur Annick ATSAIN</p>
            <p>Directrice Général</p>
            
            <h1 class="text-[#686D76] text-xl md:text-2xl lg:text-3xl font-bold mt-8 mb-4">
                Le Bachelor 3 FINANCE - Analyste financier
            </h1>
            
            <p>
                Ce Bachelor est dirigé par le Doyen honoraire Abdoulaye OUATTARA, Professeur à l'Université Félix Houphouët Boigny et grand spécialiste des sciences de gestion.
            </p>
            
            <p>
                Il a deux objectifs principaux. Le premier est de mettre l'apprenant en capacité d'élaborer et de mettre en œuvre une démarche de diagnostic économique et financier. Le second est de le rendre capable de rédiger un rapport de diagnostic complet et clair de la santé économique et financière d'une entreprise donnée.
            </p>
            
            <p>
                Aborder rationnellement le diagnostic financier suppose de répondre à un certain nombre de questions préalables concernant sa définition, ses finalités, ses outils et ses méthodes. Comme la plupart des disciplines scientifiques le diagnostic financier passera par une phase d'observation, puis de compréhension et enfin d'interprétation.
            </p>
            
            <p>
                Grâce à nos accords avec un grand nombre d'établissements d'enseignement supérieur en Europe comme sur le Continent Africain, nous mettons à disposition des salles de regroupement pour nos auditeurs dans un grand nombre de pays.
            </p>
            
            <p>
                Ce Bachelor de spécialisation ou de réorientation est directement accessible aux titulaires d'un Bac+2. La formation dure 9 mois au cours desquels vous alternerez les séances de travail individuel et les séminaires collectifs. En fonction de votre pays de résidence, CAF vous proposera plusieurs centres de séminaires (sous réserve d'un nombre suffisant d'admis ayant choisi ces centres et des places disponibles).
            </p>
            
            <h1 class="text-[#686D76] text-xl md:text-2xl font-bold mt-8 mb-4">
                Les modalités d'inscription
            </h1>
            
            <p>
                Pour vous inscrire, vous devez être titulaire au moins d'un Bac+2 (si ce n'est pas le cas, vous pouvez nous soumettre une demande de validation des acquis professionnels dite VAP).
            </p>
            
            <p>Si vous êtes intéressé(e) cliquez sous « S'inscrire »</p>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="w-full lg:w-[86%] mx-auto px-4 lg:px-0 mb-8">
        <div class="flex flex-col lg:flex-row gap-6">
            
            <!-- Registration Info Grid -->
            <div class="flex-1">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                    <!-- Headers -->
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">S'inscrire</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">Prochaine Rentrée</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="font-semibold text-sm md:text-base">Limite candidatures</p>
                    </div>
                    
                    <!-- Content -->
                    <div class="border-4 border-white bg-[#0c2b4e] text-white text-center py-3 px-2 rounded hover:text-[#686D76] transition-colors duration-500">
                        <p class="text-sm md:text-base">
                            <a href="inscription_finance">
                                BACHELOR 3 FINANCE<br>
                                Analyste Financier
                            </a>
                        </p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="text-sm md:text-base font-semibold">22 Avril 2026</p>
                    </div>
                    <div class="border-4 border-[#f24c21] bg-transparent text-[#686D76] text-center py-3 px-2 rounded">
                        <p class="text-sm md:text-base font-semibold">20 Avril 2026</p>
                    </div>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="w-full lg:w-auto">
                <div class="bg-[#f24c21] flex items-center gap-4 p-4 md:p-6 rounded-lg">
                    <div class="text-center">
                        <span class="text-white block mb-2 text-sm md:text-base">Nous contacter</span>
                        <a href="#" class="block hover:opacity-80 transition-opacity">
                            <img class="w-20 md:w-24 mx-auto" 
                                 src="{{ asset('assets/upload/img/wifi.svg') }}" 
                                 alt="Contact">
                        </a>
                    </div>
                    
                    <div class="flex flex-col gap-3">
                        <a href="#" class="hover:scale-110 transition-transform">
                            <img class="w-10 h-10" 
                                 src="{{ asset('assets/upload/img/facebook.png') }}" 
                                 alt="Facebook">
                        </a>
                        <a href="#" class="hover:scale-110 transition-transform">
                            <img class="w-10 h-10" 
                                 src="{{ asset('assets/upload/img/twitter.png') }}" 
                                 alt="Twitter">
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

</section>

@endsection