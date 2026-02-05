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
    <div class="w-full lg:w-[85%] mx-auto mt-6 md:mt-8 mb-8 border-4 border-[#f24c21] p-6 md:p-8 lg:p-10 rounded-lg">
        
        <h1 class="text-[#686D76] text-lg md:text-xl lg:text-2xl font-bold mb-4 md:mb-6">
            <u>Programme du Bachelor 3 Responsable Logistique</u>
        </h1>
        
        <h2 class="text-[#686D76] text-base md:text-lg lg:text-xl">
            <u>Sous la Direction du Pr Gérard BAGLIN</u>
        </h2>
        
    </div>

</section>

@endsection