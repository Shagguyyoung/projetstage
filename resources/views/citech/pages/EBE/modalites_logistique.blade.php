@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="w-full">
    
    <!-- Header Section -->
    <div class="w-full lg:w-[85%] mx-auto mt-5 md:mt-8 lg:mt-10 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col md:flex-row items-center justify-center gap-4 p-6 md:p-8 rounded-lg">
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-transparent text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <span class="text-base md:text-lg font-medium">S'inscrire</span>
                </div>
            </div>
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-[#2f353e] text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <a href="inscription_logistique" class="block text-base md:text-lg font-medium">
                        BACHELOR 3 LOGISTIQUE
                        <br>
                        RESPONSABLE LOGISTIQUE
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Navigation Cards -->
    <div class="w-full flex justify-center mt-6 md:mt-8 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 md:gap-5 max-w-6xl w-full">
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="programme_logistique" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="equipe_logistique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="conditions_logistique" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="modalites_logistique" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
            
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[85%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        
        <h1 class="text-[#686D76] text-lg md:text-xl lg:text-2xl font-bold mb-4 md:mb-6">
            <strong><u>Frais de dossier</u></strong>
        </h1>
        
        <div class="space-y-4 md:space-y-6 text-justify">
            
            <p class="text-[#686D76] text-xs md:text-sm leading-relaxed font-arial">
                Pour pouvoir candidater vous devez vous acquitter des frais de dossier d'un montant de <strong>10 000 Fcfa</strong>
            </p>
            
            <div class="space-y-4">
                
                <p class="text-[#686D76] text-xs md:text-sm font-arial">
                    <u>Frais de scolarité du Bachelor 3 :</u> <strong>600 000 Fcfa</strong>
                </p>
                
                <p class="text-[#686D76] text-xs md:text-sm font-arial">
                    <strong>CAF est agréée par le FDFP.</strong>
                </p>
                
                <div>
                    <p class="text-[#686D76] text-xs md:text-sm font-arial mb-2">
                        <u>Acompte pré-inscription :</u>
                    </p>
                    <p class="text-[#686D76] text-xs md:text-sm font-arial leading-relaxed">
                        <strong>200 000 Fcfa</strong> à verser dès l'acceptation de votre candidature. Ce versement est nécessaire pour la validation de votre admission. Cette somme ne sera pas restituée si vous décidez de ne pas poursuivre.
                    </p>
                </div>
                
                <p class="text-[#686D76] text-xs md:text-sm font-arial">
                    <u>Solde de la scolarité</u> (à verser au plus tard la veille du début des cours) : <strong>400 000 Fcfa</strong>
                </p>
                
                <div>
                    <p class="text-[#686D76] text-xs md:text-sm font-arial font-bold mb-2">
                        <u>Financement</u>
                    </p>
                    <p class="text-[#686D76] text-xs md:text-sm font-arial leading-relaxed">
                        Sur demande, expresse et motivée et avec présentation de garanties, des facilités de paiement peuvent être proposées par CAF (<a href="mailto:admissions@blearn.net" class="text-[#f24c21] hover:underline">admissions@blearn.net</a>)
                    </p>
                </div>
                
                <div class="pt-4 border-t border-gray-300">
                    <p class="text-[#686D76] text-xs md:text-sm font-bold mb-2">
                        <u>Important :</u>
                    </p>
                    
                    <p class="text-[#686D76] text-xs md:text-sm font-arial leading-relaxed">
                        L'inscription au Bachelor 3 ne sera considérée comme définitive qu'au paiement de la totalité des frais de scolarité. En tout état de cause, ne pourra être admis à la diplomation que l'étudiant ayant soldé ses frais de scolarité de l'année en cours.
                    </p>
                </div>
                
            </div>
            
        </div>
        
    </div>

</section>

@endsection