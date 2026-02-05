@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section class="container mx-auto px-4 mt-16 md:mt-20 lg:mt-24">
    <div class="w-full max-w-7xl mx-auto">
        <div class="flex flex-col gap-4 md:gap-6 lg:gap-8 p-4 md:p-6 lg:p-10">
            
            <!-- Bachelor Finance -->
            <div class="w-full lg:w-[88%] mx-auto">
                <a href="bachelor_finance" 
                   class="block bg-[#323246] text-white text-center p-4 md:p-6 rounded-lg hover:bg-[#686D76] transition-all duration-500 ease-in-out transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                    <div class="text-base md:text-lg lg:text-xl font-semibold">
                        BACHELOR 3 FINANCE
                    </div>
                    <div class="text-sm md:text-base mt-2">
                        Analyste Financier
                    </div>
                </a>
            </div>

            <!-- Bachelor Logistique -->
            <div class="w-full lg:w-[88%] mx-auto">
                <a href="logistique" 
                   class="block bg-[#323246] text-white text-center p-4 md:p-6 rounded-lg hover:bg-[#686D76] transition-all duration-500 ease-in-out transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                    <div class="text-base md:text-lg lg:text-xl font-semibold">
                        BACHELOR 3 LOGISTIQUE
                    </div>
                    <div class="text-sm md:text-base mt-2">
                        Responsable Logistique
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection