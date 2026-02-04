<!-- Alpine.js déjà chargé dans le head -->
<!-- Alpine.js déjà chargé dans le head -->
<div x-data="sidebar()" x-init="init()" class="flex h-screen overflow-hidden">

    <!-- Sidebar principale -->
    <aside
        :class="mainCollapsed ? 'w-12' : 'w-20'"
        class="h-screen bg-[rgb(179,28,121)] text-white flex flex-col items-center transition-all duration-300 pt-3 fixed">

        <!-- Rond bleu avec NK -->
        <div class="mb-6 flex items-center justify-center w-12 h-12 rounded-full bg-blue-500 text-white font-bold text-lg">
            NK
        </div>

        <!-- Toggle bouton -->
        <button @click="mainCollapsed = !mainCollapsed"
            class="mb-4 bg-black p-1 rounded hover:bg-[rgb(179,28,121)] transition-colors">
            <i class="fas fa-angle-left"></i>
        </button>

        <!-- Menu principal -->
        <nav class="flex-1 w-full overflow-y-auto">
            <ul class="flex flex-col space-y-4 items-center">

                <!-- Fonction pour générer bouton avec tooltip -->
                <template x-for="item in [
                    {name:'Tableau de bord', icon:'fas fa-home', key:'dashboard'},
                    {name:'Recrutement', icon:'fas fa-user-check', key:'recrutement'},
                    {name:'Test d\'admission', icon:'fas fa-file-signature', key:'test'},
                    {name:'Admission', icon:'fas fa-user-check', key:'admission'},
                    {name:' Versement', icon:'fas fa-money-check-alt', key:'Versement'},
                    {name:'Prospere', icon:'fas fa-user-plus', key:'prospere'},
                    {name:'Mouvement ', icon:'fa-solid fa-recycle', key:'mouvement'},
                    {name:'Fichier', icon:'fas fa-folder', key:'fichier'},
                    {name:'Site', icon:'fas fa-globe', key:'site'},
                    {name:'Promo', icon:'fas fa-gift', key:'promo'},
                    {name:'tests', icon:'fa-solid fa-book', key:'tests'},
                    {name:'Evenement', icon:'fa-solid fa-calendar-days', key:'Evenements'},
                    {name:'Données', icon:'fas fa-database', key:'donnees'}

                ]" :key="item.key">
                    <li class="relative w-full">
                        <button @click="setActive(item.key)"
                            :class="active === item.key ? 'border-b-4 border-white' : ''"
                            class="flex items-center justify-center w-full h-12 rounded hover:bg-[rgba(126,49,96,1)] relative">
                            <i :class="item.icon + ' text-xl'"></i>

                            <!-- Tooltip -->
                            <div x-data="{ show: false }"
                                @mouseenter="show = true"
                                @mouseleave="show = false"
                                class="absolute left-full ml-2 top-1/2 -translate-y-1/2 pointer-events-none">
                                <div x-show="show" x-transition
                                     class="bg-gray-800 text-white text-sm px-2 py-1 rounded whitespace-nowrap shadow-lg z-50">
                                    <span x-text="item.name"></span>
                                </div>
                            </div>
                        </button>
                    </li>
                </template>

            </ul>
        </nav>

    </aside>

    <!-- Sidebar secondaire -->
    <aside
        :class="secondaryCollapsed ? 'w-16' : 'w-60'"
        class="h-screen bg-white text-gray-800 flex flex-col py-4 pl-2 shadow-lg transition-all duration-300 fixed z-10"
        :style="`margin-left: ${mainCollapsed ? '3rem' : '5rem'}`">

        <!-- Toggle bouton -->
        <button @click="secondaryCollapsed = !secondaryCollapsed"
            class="mb-4 bg-gray-200 p-1 rounded hover:bg-gray-300 transition-colors self-end mr-2">
            <i class="fas fa-angle-left" :class="secondaryCollapsed ? 'rotate-180' : ''"></i>
        </button>

        <!-- SECTION DES MENUS -->
        <div class="flex-1 flex flex-col space-y-4">

            <!-- Tableau de bord -->
            <template x-if="active === 'dashboard' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Tableau de bord</h4>
                    <a href="{{ route('Accueil') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Accueil</a>
                    <a href="{{ route('Utilisateur') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Utilisateur</a>
                </div>
            </template>

            @php
    // Récupère uniquement id + abréviation pour éviter d'alourdir
    $ecoles = \App\Models\Ecole::select('id', 'abreviation')->get();
@endphp
            <template x-if="active === 'prospere' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Gestion des prosperes</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('prospere', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)] flex items-center gap-2"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>





            @php
    // Récupère uniquement id + abréviation pour éviter d'alourdir
    $ecoles = \App\Models\Ecole::select('id', 'abreviation')->get();
@endphp

<!-- Recrutement -->
<template x-if="active === 'recrutement' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Recrutement</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('recrutement', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)] flex items-center gap-2"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>

<!-- Test d'admission -->
<template x-if="active === 'test' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Test d'admission</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('Test_admission', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)]"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>

<!-- Admission -->
<template x-if="active === 'admission' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Admission</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('Admission', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)]"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>

<!-- Versement -->
<template x-if="active === 'Versement' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Versement</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('Versement', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)]"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>

<!-- Versement -->
<template x-if="active === 'mouvement' && !secondaryCollapsed">
    <div class="flex flex-col space-y-2 px-2">
        <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Mouvement</h4>

        @foreach ($ecoles as $ecole)
            <a
                href="{{ route('Mouvement', ['ecole' => $ecole->id]) }}"
                class="p-2 rounded hover:bg-[rgba(228,180,209,1)]"
            >
                {{ $ecole->abreviation }}
            </a>
        @endforeach
    </div>
</template>


            <!-- Mouvement Versement -->


            <!-- Fichier -->
            <template x-if="active === 'fichier' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Fichiers</h4>
                    <a href="{{ route('Add_files') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Ajouter un fichier</a>
                    <a href="{{ route('see_file') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Liste des fichiers</a>
                </div>
            </template>

            <!-- Site -->
            <template x-if="active === 'site' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Site Web</h4>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Pages</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Actualités</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Maintenance</a>
                </div>
            </template>

            <!-- Promo -->
            <template x-if="active === 'promo' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Promotion</h4>
                    <a href="{{ route('add_school') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Gestion ecoles</a>
                    <a href="{{ route('add_promo') }}" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Promotions</a>
                </div>
            </template>



            <!-- Données -->
            <template x-if="active === 'tests' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Tests</h4>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Statistiques</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Export</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Sauvegardes</a>
                </div>
            </template>


            <!-- Données -->
            <template x-if="active === 'Evenements' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Evenements</h4>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Statistiques</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Export</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Sauvegardes</a>
                </div>
            </template>


            <!-- Données -->
            <template x-if="active === 'donnees' && !secondaryCollapsed">
                <div class="flex flex-col space-y-2 px-2">
                    <h4 class="text-[rgb(179,28,121)] font-semibold mb-1">Données</h4>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Statistiques</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Export</a>
                    <a href="#" class="p-2 rounded hover:bg-[rgba(228,180,209,1)]">Sauvegardes</a>
                </div>
            </template>

        </div>
    </aside>

    <!-- Navbar + Contenu -->
    <div
        class="flex-1 flex flex-col overflow-hidden transition-all duration-300"
        :style="`margin-left: ${(mainCollapsed ? 3 : 5) + (secondaryCollapsed ? 4 : 15)}rem`">

        <!-- Navbar -->
        <nav class="h-16 bg-white flex items-center justify-between px-6 shadow-md flex-shrink-0 z-20">
    <div class="flex items-center space-x-3"></div>

    <div class="flex items-center space-x-4" x-data="{ openParam: false }">

        <!-- Bouton Notification avec vibration sur hover -->
        <button
            class="px-3 py-2 rounded transition-transform duration-150 hover:animate-bounce"
            title="Notifications">
            <i class="fas fa-bell text-gray-700 text-lg"></i>
        </button>

        <!-- Bouton Paramètres -->
        <div class="relative">
            <button @click="openParam = !openParam"
                    class="p-2 rounded-full transition-transform duration-300 hover:rotate-45 focus:outline-none"
                    title="Paramètres">
                <i class="fas fa-cog text-gray-700 text-lg"></i>
            </button>

            <!-- Menu déroulant -->
            <div x-show="openParam" @click.away="openParam = false"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 scale-90"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-90"
                 class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg z-50">

                <div class="px-4 py-3 text-gray-700 font-medium border-b border-gray-200">
                    Bonjour, Josué
                </div>
                <a href="#"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition">
                    Déconnexion
                </a>
            </div>
        </div>

    </div>
</nav>


        <!-- Contenu principal avec scroll indépendant -->
        <main class="flex-1 overflow-auto p-6" style="height: calc(100vh - 4rem);">
            @yield('content')
        </main>

    </div>

</div>

<script>
function sidebar() {
    return {
        active: 'accueil',
        mainCollapsed: false,
        secondaryCollapsed: false,

        init() {
            const savedActive = localStorage.getItem('activeMenu');
            if (savedActive) this.active = savedActive;
        },

        setActive(menu) {
            this.active = menu;
            localStorage.setItem('activeMenu', menu);
        }
    }
}
</script>

