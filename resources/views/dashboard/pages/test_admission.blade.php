@extends('dashboard.layouts.dashboard')

@section('title', 'Test Admission')

@section('content')
<div x-data="testAdmissionApp()" class="bg-white shadow rounded-lg overflow-hidden">

    <!-- Header -->
    <div class="px-6 py-4 border-b flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Test d'Admission</h2>
    </div>

    <!-- Barre de recherche et export -->
    <div class="px-6 py-4 border-b flex flex-col md:flex-row gap-3 md:items-center md:justify-between">
        <input type="text" x-model="searchTerm" placeholder="Rechercher un auditeur..."
               class="w-full md:w-1/3 border border-gray-300 rounded-lg px-3 py-2 focus:ring" />
        <div class="flex space-x-2">
            <button @click="exportExcel()" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-excel"></i><span>Excel</span>
            </button>
            <button @click="exportPDF()" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center space-x-1">
                <i class="fas fa-file-pdf"></i><span>PDF</span>
            </button>
        </div>
    </div>
   <div x-show="open" x-transition class="mt-4">
        @php
            $classesEcole = $classes->filter(fn($classe) => $classe->filiere->ecole_id === $ecoleChoisie?->id);
            $classesGrouped = $classesEcole->groupBy(fn($classe) => substr($classe->nom, -1));
        @endphp

        @foreach ($classesGrouped as $promo => $promoClasses)
            <div class="mt-6 mb-2">
                <h4 class="text-gray-600 font-semibold text-sm px-2 border-l-4 border-blue-500">
                    Promotion {{ $promo }}
                </h4>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                @foreach ($promoClasses as $classe)
                    @php
                        $auditeursCount = $classe->auditeurs()->count();
                    @endphp
                    <button @click="selectClasse('{{ $classe->id }}', '{{ $classe->nom }}')"
                            class="flex items-center justify-between bg-white border border-gray-200 rounded-lg py-3 px-3
                                   hover:bg-blue-50 hover:shadow-sm transition-all duration-200 w-full"
                            :class="selectedFiliereId === '{{ $classe->id }}' ? 'border-blue-600 bg-blue-100 shadow-md' : ''">
                        <div class="flex items-center">
                            <i class="fas fa-folder-open text-yellow-500 mr-2 text-base"></i>
                            <span class="font-medium text-gray-700 text-sm">{{ $classe->nom }}</span>
                        </div>
                        <span class="bg-red-500 text-white text-xs font-semibold px-2 py-0.5 rounded">{{ $auditeursCount }}</span>
                    </button>
                @endforeach
            </div>
        @endforeach
    </div>
    <!-- Tableau Auditeurs -->
    <div class="overflow-x-auto w-full mt-6">
        <table class="min-w-full divide-y divide-gray-200 border">
            <thead class="bg-gray-50">
                <tr>
                    @foreach (['Matricule','Nom','Prénom','Email','Tel','Invitation','État'] as $title)
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">{{ $title }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <template x-for="recrutement in filteredRecrutements" :key="recrutement.id">
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm" x-text="recrutement.auditeur.Matricule"></td>
                        <td class="px-4 py-2 text-sm" x-text="recrutement.auditeur.nom"></td>
                        <td class="px-4 py-2 text-sm" x-text="recrutement.auditeur.prenoms"></td>
                        <td class="px-4 py-2 text-sm" x-text="recrutement.auditeur.mail ?? 'N/A'"></td>
                        <td class="px-4 py-2 text-sm" x-text="recrutement.auditeur.contact_tel ?? 'N/A'"></td>

                        <td class="px-4 py-2">
                            <button
                                class="px-3 py-1 text-xs rounded w-full transition-all"
                                :class="recrutement.etat_test == 1 ? 'bg-gray-400 text-gray-200 cursor-not-allowed' : 'bg-blue-600 text-white hover:bg-blue-700'"
                                :disabled="recrutement.etat_test == 1"
                                @click="openMailModal(recrutement.auditeur)"
                            >
                                Envoyer Message
                            </button>
                        </td>

                        <td class="px-4 py-2">
                            <span class="px-2 py-1 text-xs rounded-full text-white"
                                  :class="recrutement.etat_test == 1 ? 'bg-green-500' : 'bg-red-500'"
                                  x-text="recrutement.etat_test == 1 ? 'Test effectué' : 'Test non effectué'"></span>
                        </td>
                    </tr>
                </template>
            </tbody>
        </table>
    </div>

    <!-- Modal Envoyer Message -->
    <!-- Modal Envoyer Message avec barre d'outils complète -->
<div x-show="showMailModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50" x-cloak>
    <div class="bg-white rounded-lg w-11/12 md:w-1/2 p-6 relative shadow-lg overflow-y-auto max-h-[90vh]">

        <button class="absolute top-2 right-2 text-gray-500 text-lg font-bold" @click="closeModal()">✖</button>

        <h3 class="text-lg font-semibold mb-4">Envoyer un message à <span x-text="auditeur.nom + ' ' + auditeur.prenoms"></span></h3>

        <form @submit.prevent="sendMail" class="space-y-4">

            <!-- Correcteurs et Jury -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Correcteur 1</label>
                    <select x-model="correcteur1" class="w-full border border-gray-300 rounded px-2 py-1">
                        <option value="">Sélectionner Correcteur 1</option>
                        <template x-for="c in correcteurs" :key="c.id">
                            <option :value="c.email" x-text="c.nom"></option>
                        </template>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Correcteur 2</label>
                    <select x-model="correcteur2" class="w-full border border-gray-300 rounded px-2 py-1">
                        <option value="">Sélectionner Correcteur 2</option>
                        <template x-for="c in correcteurs" :key="c.id">
                            <option :value="c.email" x-text="c.nom"></option>
                        </template>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Jury</label>
                    <select x-model="jury" class="w-full border border-gray-300 rounded px-2 py-1">
                        <option value="">Sélectionner Jury</option>
                        <template x-for="c in jurys" :key="c.id">
                            <option :value="c.email" x-text="c.nom"></option>
                        </template>
                    </select>
                </div>
            </div>

            <!-- Champ A -->
            <div class="flex items-center gap-2">
                <label class="text-sm font-medium text-gray-700 w-10">A:</label>
                <input type="text" x-model="fieldA" class="border border-gray-300 rounded px-2 py-1 flex-1" placeholder="Nom ou autre info">
            </div>

            <!-- Message avec barre d'outils complète -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>

                <div class="flex flex-wrap gap-1 mb-2 items-center">
                    <!-- Texte -->
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('bold')">B</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('italic')">I</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('underline')">U</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('strikeThrough')">S</button>

                    <!-- Couleur -->
                    <input type="color" x-model="color" class="w-10 h-7 p-0 border rounded" @change="format('foreColor', color)">

                    <!-- Taille -->
                    <select x-model="fontSize" class="border px-2 py-1 rounded" @change="format('fontSize', fontSize)">
                        <option value="1">Très petit</option>
                        <option value="2">Petit</option>
                        <option value="3">Moyen</option>
                        <option value="4">Grand</option>
                        <option value="5">Très grand</option>
                        <option value="6">Énorme</option>
                        <option value="7">Maximum</option>
                    </select>

                    <!-- Alignement -->
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('justifyLeft')">⮜</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('justifyCenter')">⭯</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('justifyRight')">⮞</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('justifyFull')">⯀</button>

                    <!-- Listes -->
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('insertUnorderedList')">• Liste</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('insertOrderedList')">1. Liste</button>

                    <!-- Liens / Images -->
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="addLink()">🔗</button>
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="addImage()">🖼️</button>

                    <!-- Nettoyer -->
                    <button type="button" class="px-2 py-1 border rounded text-sm" @click="format('removeFormat')">🧹</button>
                </div>

                <div contenteditable="true" x-ref="editor" class="border border-gray-300 rounded px-2 py-1 min-h-[200px]" x-html="message"></div>
            </div>

            <div class="flex justify-end gap-2 mt-2">
                <button type="button" class="px-4 py-2 rounded border" @click="closeModal()">Annuler</button>
                <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white hover:bg-blue-700">Envoyer</button>
            </div>

        </form>
    </div>
</div>

<script>

</script>


</div>

<script>
function testAdmissionApp() {
    return {
        selectedFiliereId: null,
        searchTerm: '',
        recrutements: @json($recrutements),

        showMailModal: false,
        auditeur: {},
        correcteur1: '',
        correcteur2: '',
        jury: '',
        fieldA: '',
        message: 'Bonjour, veuillez trouver ci-joint les informations concernant le test.',
        color: '#000000',
        fontSize: '3',
        correcteurs: @json($correcteurs ?? []),
        jurys: @json($jurys ?? []),

        get filteredRecrutements() {
            let list = this.recrutements;
            if (this.selectedFiliereId) list = list.filter(r => r.auditeur.classes?.some(c => c.id == this.selectedFiliereId));
            if (this.searchTerm) {
                const term = this.searchTerm.toLowerCase();
                list = list.filter(r =>
                    (r.auditeur.nom && r.auditeur.nom.toLowerCase().includes(term)) ||
                    (r.auditeur.prenoms && r.auditeur.prenoms.toLowerCase().includes(term)) ||
                    (r.auditeur.Matricule && r.auditeur.Matricule.toLowerCase().includes(term))
                );
            }
            return list;
        },

        selectClasse(id) { this.selectedFiliereId = id; },

        openMailModal(aud) {
            this.auditeur = {...aud};
            this.correcteur1 = '';
            this.correcteur2 = '';
            this.jury = '';
            this.fieldA = '';
           this.message = `Bonjour,

Nous avons le plaisir de vous informer que le jury de présélection des candidats à l’Exécutive Master of Engineering EME Ingénierie Financière d'ISM PARIS a étudié votre dossier et vous autorise à passer le test d'admission. Vous disposez de 48 heures à partir de l’émission de cet email pour le passer.

Nous vous invitons à vous connecter dès que possible à votre espace candidat (https://ismparis.blearn.net) pour commencer votre test en ligne et ainsi terminer les étapes de sélection de votre candidature. Prévoyez environ une heure pour faire la totalité du test.

Pour rappel, voici le contenu du test :
Le test d'admission sur 40 mn comprend 4 catégories de questions sur les thèmes suivants :
- Généralités
- Notions en comptabilité et en gestion
- Corporate Finance
- Gestion Financière

Si vous rencontrez le moindre problème, merci de nous contacter par email sur ismparis@blearn.net ou par téléphone au +225 59975372

L'équipe de l’EME Ingénierie Financière délocalisé
ISM Paris
https://ismparis.blearn.net/`;

            this.showMailModal = true;
            this.$nextTick(() => this.$refs.editor.focus());
        },

        closeModal() { this.showMailModal = false; },

        format(command, value=null) { this.$refs.editor.focus(); document.execCommand(command,false,value); },

        addLink() {
            const url = prompt("Entrez l'URL du lien");
            if (url) this.format('createLink', url);
        },

        addImage() {
            const url = prompt("Entrez l'URL de l'image");
            if (url) this.format('insertImage', url);
        },

        sendMail() {
            const content = this.$refs.editor.innerHTML;
            fetch('/send-mail', {
                method:'POST',
                headers: {'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},
                body: JSON.stringify({
                    email: this.auditeur.mail,
                    message: content,
                    correcteur1: this.correcteur1,
                    correcteur2: this.correcteur2,
                    jury: this.jury,
                    fieldA: this.fieldA
                })
            })
            .then(res=>res.json())
            .then(data=>{ alert(data.message); this.closeModal(); })
            .catch(err=>{ console.error(err); alert('Erreur lors de l’envoi du mail.'); });
        },

       exportExcel() {
    const wb = XLSX.utils.book_new();
    // En-têtes
    const ws_data = [
        ["Matricule","Nom","Prénom","Email","Tel","Invitation","État"]
    ];
    // Parcours des auditeurs filtrés
    this.filteredRecrutements.forEach(r => {
        const a = r.auditeur;
        ws_data.push([
            a.Matricule ?? '',
            a.nom ?? '',
            a.prenoms ?? '',
            a.mail ?? '',
            a.contact_tel ?? '',
            r.etat_test == 1 ? 'Envoyé' : 'Non envoyé',
            r.etat_test == 1 ? 'Test effectué' : 'Test non effectué'
        ]);
    });
    const ws = XLSX.utils.aoa_to_sheet(ws_data);
    XLSX.utils.book_append_sheet(wb, ws, "Auditeurs");
    XLSX.writeFile(wb, "TestAdmission_Auditeurs.xlsx");
},

exportPDF() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Préparer les colonnes et lignes
    const columns = ["Matricule","Nom","Prénom","Email","Tel","Invitation","État"];
    const rows = this.filteredRecrutements.map(r => {
        const a = r.auditeur;
        return [
            a.Matricule ?? '',
            a.nom ?? '',
            a.prenoms ?? '',
            a.mail ?? '',
            a.contact_tel ?? '',
            r.etat_test == 1 ? 'Envoyé' : 'Non envoyé',
            r.etat_test == 1 ? 'Test effectué' : 'Test non effectué'
        ];
    });

    doc.autoTable({
        head: [columns],
        body: rows,
        startY: 20,
        theme: 'grid',
        headStyles: { fillColor: [22, 31, 44] },
        styles: { fontSize: 9 }
    });

    doc.save("TestAdmission_Auditeurs.pdf");
}

    }
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.28/jspdf.plugin.autotable.min.js"></script>

@endsection
