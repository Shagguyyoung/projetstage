@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<div class="w-full px-4 py-8 md:py-12">
    <div class="w-full max-w-6xl mx-auto border-4 border-[#fc2421] rounded-lg p-6 md:p-8 lg:p-12">
        
        <!-- Title -->
        <div class="mb-6 md:mb-8">
            <h3 class="text-[#fc2421] text-2xl md:text-3xl lg:text-4xl font-bold text-center md:text-left">
                S'INSCRIRE AU BACHELOR
            </h3>
        </div>

        <!-- Form -->
        <form action="" method="post" class="space-y-6">
            
            <!-- Nom -->
            <div class="w-full">
                <label for="nom" class="block text-gray-600 text-sm md:text-base mb-2">
                    Nom
                </label>
                <input type="text" 
                       name="nom" 
                       id="nom" 
                       required 
                       placeholder="Dubois"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Prénom -->
            <div class="w-full">
                <label for="prenom" class="block text-gray-600 text-sm md:text-base mb-2">
                    Prénom
                </label>
                <input type="text" 
                       name="prenom" 
                       id="prenom" 
                       required 
                       placeholder="Philip"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Pays de résidence -->
            <div class="w-full">
                <label for="pays" class="block text-gray-600 text-sm md:text-base mb-2">
                    Pays de résidence
                </label>
                <select name="pays" 
                        id="pays"
                        class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
                    <option value="">Sélectionner</option>
                    <option data-code="93" value="23911">Afghanistan</option>
                    <option data-code="27" value="24089">Afrique du Sud</option>
                    <option data-code="355" value="20417">Albanie</option>
                    <option data-code="213" value="">Algérie</option>
                    <option data-code="49" value="">Allemagne</option>
                    <option data-code="376" value="">Andorre</option>
                    <option data-code="244" value="">Angola</option>
                    <option data-code="1268" value="">Antigua-et-Barbuda</option>
                    <option data-code="966" value="">Arabie Saoudite</option>
                    <option data-code="54" value="">Argentine</option>
                    <option data-code="374" value="">Arménie</option>
                    <option data-code="61" value="">Australie</option>
                    <option data-code="43" value="">Autriche</option>
                    <option data-code="994" value="">Azerbaïdjan</option>
                    <option data-code="1242" value="">Bahamas</option>
                    <option data-code="973" value="">Bahreïn</option>
                    <option data-code="880" value="">Bangladesh</option>
                    <option data-code="1246" value="">Barbade</option>
                    <option data-code="32" value="">Belgique</option>
                    <option data-code="501" value="">Bélize</option>
                    <option data-code="229" value="">Bénin</option>
                    <option data-code="975" value="">Bhoutan</option>
                    <option data-code="375" value="">Biélorussie</option>
                    <option data-code="95" value="">Birmanie</option>
                    <option data-code="591" value="">Bolivie</option>
                    <option data-code="387" value="">Bosnie-Herzégovine</option>
                    <option data-code="267" value="">Botswana</option>
                    <option data-code="55" value="">Brésil</option>
                    <option data-code="673" value="">Brunei</option>
                    <option data-code="359" value="">Bulgarie</option>
                    <option data-code="226" value="">Burkina-Faso</option>
                    <option data-code="257" value="">Burundi</option>
                    <option data-code="855" value="">Cambodge</option>
                    <option data-code="237" value="">Cameroun</option>
                    <option data-code="1" value="">Canada</option>
                    <option data-code="238" value="">Cap-Vert</option>
                    <option data-code="236" value="">Centrafrique</option>
                    <option data-code="56" value="">Chili</option>
                    <option data-code="86" value="">Chine</option>
                    <option data-code="357" value="">Chypre</option>
                    <option data-code="57" value="">Colombie</option>
                    <option data-code="269" value="">Comores</option>
                    <option data-code="242" value="">Congo</option>
                    <option data-code="850" value="">Corée du Nord</option>
                    <option data-code="82" value="">Corée du Sud</option>
                    <option data-code="506" value="">Costa Rica</option>
                    <option data-code="225" value="">Côte d'Ivoire</option>
                    <option data-code="385" value="">Croatie</option>
                    <option data-code="53" value="">Cuba</option>
                    <option data-code="45" value="">Danemark</option>
                    <option data-code="253" value="">Djibouti</option>
                    <option data-code="1767" value="">Dominique</option>
                    <option data-code="20" value="">Égypte</option>
                    <option data-code="971" value="">Émirats Arabes Unis</option>
                    <option data-code="593" value="">Équateur</option>
                    <option data-code="291" value="">Érythrée</option>
                    <option data-code="34" value="">Espagne</option>
                    <option data-code="372" value="">Estonie</option>
                    <option data-code="1" value="">États-Unis</option>
                    <option data-code="251" value="">Éthiopie</option>
                    <option data-code="679" value="">Fidji</option>
                    <option data-code="358" value="">Finlande</option>
                    <option data-code="33" value="">France</option>
                    <option data-code="241" value="">Gabon</option>
                    <option data-code="220" value="">Gambie</option>
                    <option data-code="995" value="">Géorgie</option>
                    <option data-code="233" value="">Ghana</option>
                    <option data-code="30" value="">Grèce</option>
                    <option data-code="1473" value="">Grenade</option>
                    <option data-code="502" value="">Guatemala</option>
                    <option data-code="224" value="">Guinée Conakry</option>
                    <option data-code="240" value="">Guinée Équatoriale</option>
                    <option data-code="245" value="">Guinée-Bissau</option>
                    <option data-code="592" value="">Guyana</option>
                    <option data-code="509" value="">Haïti</option>
                    <option data-code="504" value="">Honduras</option>
                    <option data-code="852" value="">Hong Kong</option>
                    <option data-code="36" value="">Hongrie</option>
                    <option data-code="682" value="">Îles Cook</option>
                    <option data-code="692" value="">Îles Marshall</option>
                    <option data-code="91" value="">Inde</option>
                    <option data-code="62" value="">Indonésie</option>
                    <option data-code="964" value="">Irak</option>
                    <option data-code="98" value="">Iran</option>
                    <option data-code="353" value="">Irlande</option>
                    <option data-code="354" value="">Islande</option>
                    <option data-code="972" value="">Israël</option>
                    <option data-code="39" value="">Italie</option>
                    <option data-code="1876" value="">Jamaïque</option>
                    <option data-code="81" value="">Japon</option>
                    <option data-code="962" value="">Jordanie</option>
                    <option data-code="7" value="">Kazakhstan</option>
                    <option data-code="254" value="">Kenya</option>
                    <option data-code="996" value="">Kirghizistan</option>
                    <option data-code="686" value="">Kiribati</option>
                    <option data-code="383" value="">Kosovo</option>
                    <option data-code="965" value="">Koweït</option>
                    <option data-code="856" value="">Laos</option>
                    <option data-code="266" value="">Lesotho</option>
                    <option data-code="371" value="">Lettonie</option>
                    <option data-code="961" value="">Liban</option>
                    <option data-code="231" value="">Libéria</option>
                    <option data-code="218" value="">Libye</option>
                    <option data-code="423" value="">Liechtenstein</option>
                    <option data-code="370" value="">Lituanie</option>
                    <option data-code="352" value="">Luxembourg</option>
                    <option data-code="389" value="">Macédoine du Nord</option>
                    <option data-code="261" value="">Madagascar</option>
                    <option data-code="60" value="">Malaisie</option>
                    <option data-code="265" value="">Malawi</option>
                    <option data-code="960" value="">Maldives</option>
                    <option data-code="223" value="">Mali</option>
                    <option data-code="356" value="">Malte</option>
                    <option data-code="212" value="">Maroc</option>
                    <option data-code="230" value="">Maurice</option>
                    <option data-code="222" value="">Mauritanie</option>
                    <option data-code="52" value="">Mexique</option>
                    <option data-code="691" value="">Micronésie</option>
                    <option data-code="373" value="">Moldavie</option>
                    <option data-code="377" value="">Monaco</option>
                    <option data-code="976" value="">Mongolie</option>
                    <option data-code="382" value="">Monténégro</option>
                    <option data-code="258" value="">Mozambique</option>
                    <option data-code="264" value="">Namibie</option>
                    <option data-code="674" value="">Nauru</option>
                    <option data-code="977" value="">Népal</option>
                    <option data-code="505" value="">Nicaragua</option>
                    <option data-code="227" value="">Niger</option>
                    <option data-code="234" value="">Nigeria</option>
                    <option data-code="683" value="">Niue</option>
                    <option data-code="47" value="">Norvège</option>
                    <option data-code="64" value="">Nouvelle-Zélande</option>
                    <option data-code="968" value="">Oman</option>
                    <option data-code="256" value="">Ouganda</option>
                    <option data-code="998" value="">Ouzbékistan</option>
                    <option data-code="92" value="">Pakistan</option>
                    <option data-code="680" value="">Palaos</option>
                    <option data-code="507" value="">Panama</option>
                    <option data-code="675" value="">Papouasie-Nouvelle-Guinée</option>
                    <option data-code="595" value="">Paraguay</option>
                    <option data-code="31" value="">Pays-Bas</option>
                    <option data-code="51" value="">Pérou</option>
                    <option data-code="63" value="">Philippines</option>
                    <option data-code="48" value="">Pologne</option>
                    <option data-code="1787" value="">Porto Rico</option>
                    <option data-code="351" value="">Portugal</option>
                    <option data-code="974" value="">Qatar</option>
                    <option data-code="243" value="">République Démocratique du Congo</option>
                    <option data-code="1809" value="">République Dominicaine</option>
                    <option data-code="420" value="">République Tchèque</option>
                    <option data-code="40" value="">Roumanie</option>
                    <option data-code="44" value="">Royaume-Uni</option>
                    <option data-code="7" value="">Russie</option>
                    <option data-code="250" value="">Rwanda</option>
                    <option data-code="1869" value="">Saint-Christophe-et-Niévès</option>
                    <option data-code="378" value="">Saint-Marin</option>
                    <option data-code="1784" value="">Saint-Vincent-et-les-Grenadines</option>
                    <option data-code="1758" value="">Sainte-Lucie</option>
                    <option data-code="677" value="">Salomon</option>
                    <option data-code="503" value="">Salvador</option>
                    <option data-code="685" value="">Samoa</option>
                    <option data-code="239" value="">Sao Tomé-et-Principe</option>
                    <option data-code="221" value="">Sénégal</option>
                    <option data-code="381" value="">Serbie</option>
                    <option data-code="248" value="">Seychelles</option>
                    <option data-code="232" value="">Sierra Leone</option>
                    <option data-code="65" value="">Singapour</option>
                    <option data-code="421" value="">Slovaquie</option>
                    <option data-code="386" value="">Slovénie</option>
                    <option data-code="252" value="">Somalie</option>
                    <option data-code="249" value="">Soudan du Nord</option>
                    <option data-code="211" value="">Soudan du Sud</option>
                    <option data-code="94" value="">Sri Lanka</option>
                    <option data-code="46" value="">Suède</option>
                    <option data-code="41" value="">Suisse</option>
                    <option data-code="597" value="">Suriname</option>
                    <option data-code="268" value="">Swaziland</option>
                    <option data-code="963" value="">Syrie</option>
                    <option data-code="992" value="">Tadjikistan</option>
                    <option data-code="886" value="">Taïwan</option>
                    <option data-code="255" value="">Tanzanie</option>
                    <option data-code="235" value="">Tchad</option>
                    <option data-code="66" value="">Thaïlande</option>
                    <option data-code="670" value="">Timor Oriental</option>
                    <option data-code="228" value="">Togo</option>
                    <option data-code="676" value="">Tonga</option>
                    <option data-code="1868" value="">Trinité-et-Tobago</option>
                    <option data-code="216" value="">Tunisie</option>
                    <option data-code="993" value="">Turkménistan</option>
                    <option data-code="90" value="">Turquie</option>
                    <option data-code="688" value="">Tuvalu</option>
                    <option data-code="380" value="">Ukraine</option>
                    <option data-code="598" value="">Uruguay</option>
                    <option data-code="678" value="">Vanuatu</option>
                    <option data-code="379" value="">Vatican</option>
                    <option data-code="58" value="">Venezuela</option>
                    <option data-code="84" value="">Viêt Nam</option>
                    <option data-code="967" value="">Yémen</option>
                    <option data-code="260" value="">Zambie</option>
                    <option data-code="263" value="">Zimbabwe</option>
                </select>
            </div>

            <!-- Email -->
            <div class="w-full">
                <label for="email" class="block text-gray-600 text-sm md:text-base mb-2">
                    Adresse mail
                </label>
                <input type="email" 
                       name="mail" 
                       id="email" 
                       required 
                       placeholder="dubois@gmail.com"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Confirmer Email -->
            <div class="w-full">
                <label for="confirm_email" class="block text-gray-600 text-sm md:text-base mb-2">
                    Confirmer l'adresse mail
                </label>
                <input type="email" 
                       name="confirm_mail" 
                       id="confirm_email" 
                       required 
                       placeholder="dubois@gmail.com"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Indicatif du pays -->
            <div class="w-full">
                <label for="indicatif" class="block text-gray-600 text-sm md:text-base mb-2">
                    Indicatif du pays
                </label>
                <input type="text" 
                       id="indicatif" 
                       readonly 
                       placeholder="+33"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded bg-gray-100 cursor-not-allowed">
            </div>

            <!-- Contact téléphonique -->
            <div class="w-full">
                <label for="contact" class="block text-gray-600 text-sm md:text-base mb-2">
                    Contact téléphonique ou whatsapp
                </label>
                <input type="text" 
                       name="contact1" 
                       id="contact" 
                       required 
                       inputmode="numeric"
                       placeholder="0707237887"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Confirmer contact -->
            <div class="w-full">
                <label for="confirm_contact" class="block text-gray-600 text-sm md:text-base mb-2">
                    Confirmer le contact téléphonique ou whatsapp
                </label>
                <input type="text" 
                       name="contact2" 
                       id="confirm_contact" 
                       required 
                       inputmode="numeric"
                       placeholder="0707237887"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Mot de passe -->
            <div class="w-full">
                <label for="password1" class="block text-gray-600 text-sm md:text-base mb-2">
                    Mot de passe
                </label>
                <input type="password" 
                       name="password1" 
                       id="password1" 
                       required 
                       placeholder="*******"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Confirmer mot de passe -->
            <div class="w-full">
                <label for="password2" class="block text-gray-600 text-sm md:text-base mb-2">
                    Confirmer le mot de passe
                </label>
                <input type="password" 
                       name="password2" 
                       id="password2" 
                       required 
                       placeholder="*******"
                       class="w-full md:w-4/5 h-10 md:h-12 px-4 border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-[#fc2421] focus:border-transparent">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center md:justify-end pt-6">
                <button type="submit" 
                        class="bg-[#0c2b4e] hover:bg-blue-700 text-white font-bold py-3 px-8 md:px-12 rounded transition-colors duration-300 transform hover:scale-105">
                    S'INSCRIRE
                </button>
            </div>

        </form>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Country code auto-fill
    document.getElementById("pays").addEventListener("change", function () {
        let code = this.options[this.selectedIndex].getAttribute("data-code");

        if (code) {
            document.getElementById("indicatif").value = "+" + code.replace("+", "");
        } else {
            document.getElementById("indicatif").value = "";
        }
    });
</script>

@endsection