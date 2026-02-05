@extends('citech.layouts.app')

@section('title', 'eme')

@section('content')

<section class="w-full min-h-screen flex items-center justify-center py-12 md:py-16 lg:py-20 px-4">
    <div class="w-full max-w-4xl mx-auto space-y-4 md:space-y-6">
        
        <!-- EME Comportemental -->
        <div class="w-full">
            <a href="Emepsa" 
               class="block w-full h-16 md:h-20 bg-[#f24c21] border-2 border-black rounded-2xl flex items-center justify-center text-white text-lg md:text-xl lg:text-2xl font-extrabold hover:text-gray-400 transition-colors duration-500 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                EME Comportemental
            </a>
        </div>

        <!-- EME Complexité -->
        <div class="w-full">
            <a href="eme_generaliste" 
               class="block w-full h-16 md:h-20 bg-[#f24c21] border-2 border-black rounded-2xl flex items-center justify-center text-white text-lg md:text-xl lg:text-2xl font-extrabold hover:text-gray-400 transition-colors duration-500 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                EME Complexité
            </a>
        </div>

        <!-- EME Logistique -->
        <div class="w-full">
            <a href="eme_logistique" 
               class="block w-full h-16 md:h-20 bg-[#f24c21] border-2 border-black rounded-2xl flex items-center justify-center text-white text-lg md:text-xl lg:text-2xl font-extrabold hover:text-gray-400 transition-colors duration-500 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                EME Logistique
            </a>
        </div>

        <!-- EME Finance -->
        <div class="w-full">
            <a href="eme_finance" 
               class="block w-full h-16 md:h-20 bg-[#f24c21] border-2 border-black rounded-2xl flex items-center justify-center text-white text-lg md:text-xl lg:text-2xl font-extrabold hover:text-gray-400 transition-colors duration-500 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                EME Finance
            </a>
        </div>

        <!-- EME Data -->
        <div class="w-full">
            <a href="eme_data" 
               class="block w-full h-16 md:h-20 bg-[#f24c21] border-2 border-black rounded-2xl flex items-center justify-center text-white text-lg md:text-xl lg:text-2xl font-extrabold hover:text-gray-400 transition-colors duration-500 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                EME Data
            </a>
        </div>

    </div>
</section>

@endsection