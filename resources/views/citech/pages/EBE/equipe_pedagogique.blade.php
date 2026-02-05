@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="w-full">
    
    <!-- Header Section -->
    <div class="w-full lg:w-[88%] mx-auto mt-5 md:mt-8 lg:mt-10 px-4 lg:px-0">
        <div class="bg-[#f24c21] flex flex-col md:flex-row items-center justify-center gap-4 p-6 md:p-8 rounded-lg">
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-transparent text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <span class="text-base md:text-lg font-medium">S'inscrire</span>
                </div>
            </div>
            
            <div class="w-full md:w-auto max-w-md">
                <div class="border border-white bg-[#2f353e] text-white text-center py-3 px-6 rounded hover:text-gray-400 transition-colors duration-500 cursor-pointer">
                    <a href="inscription_finance" class="block text-base md:text-lg font-medium">
                        BACHELOR 3 FINANCE
                        <br>
                        ANALYSTE FINANCIER
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
                    <a href="programme" class="text-sm md:text-base">Programme</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="equipe_pedagogique" class="text-sm md:text-base">L'Équipe pédagogique</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="conditions" class="text-sm md:text-base">Conditions</a>
                </p>
            </div>
            
            <div class="bg-[#2f353e] text-white text-center py-4 px-3 rounded hover:text-[#f24c21] transition-colors duration-500 cursor-pointer">
                <p>
                    <a href="modalites" class="text-sm md:text-base">Modalités</a>
                </p>
            </div>
            
        </div>
    </div>

    <!-- Main Content Card -->
    <div class="w-full lg:w-[88%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-4 md:p-6 lg:p-8 rounded-lg">
        
        <h1 class="text-[#686D76] text-base md:text-lg lg:text-xl font-bold mb-2">
            <u>L'équipe pédagogique du <strong>BACHELOR 3 FINANCE - Analyste financier</strong></u>
        </h1>
        
        <h2 class="text-[#686D76] text-base md:text-lg mb-6 md:mb-8">
            dirigée par le Pr Abdoulaye OUATTARA
        </h2>
        
        <div class="space-y-6 md:space-y-8 text-justify">
            
            <div class="text-[#686D76] text-sm md:text-base leading-relaxed">
                <span class="font-arial">
                    <strong>Professeur Abdoulaye OUATTARA,</strong> Doyen honoraire de l'UFR SEG de l'Université Félix Houphouët Boigny.
                </span>
            </div>
            
            <div class="text-[#686D76] text-sm md:text-base leading-relaxed">
                <span class="font-arial">
                    <strong>Annick ATSAIN,</strong> Maître Assistant à l'Université de Daloa, Docteur en sciences de gestion de l'Université Félix Houphouët-Boigny.
                </span>
            </div>
            
            <div class="text-black text-sm md:text-base leading-relaxed">
                <span class="font-arial">
                    <strong>Alassane OUATTARA,</strong> Maître Assistant au CESAG (Dakar), Docteur en comptabilité et finance de l'Université Paris-Est (France).
                </span>
            </div>
            
            <div class="text-[#686D76] text-sm md:text-lg leading-relaxed">
                <span class="font-arial">
                    <strong>Yann Cédric Armel VANGAH,</strong> Docteur en sciences de gestion de l'Université Félix Houphouët-Boigny.
                </span>
            </div>
            
        </div>
        
    </div>

</section>

@endsection