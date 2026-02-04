@extends('citech.layouts.app')

@section('title', 'info')

@section('content')


<div class="container">
    <div><h3 class="text_1" style="color: #fc2421">S'INSCRIRE AU BACHELOR</h3></div>
    <div class="contain">
        <form action="" method="post">
            <div class="form">
                <label for="nom" id="nom">Nom</label>
                <input type="text" name="nom" id="nom" required placeholder="Dubois">
            </div>
            <div class="form">
                <label for="prenom" id="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" required placeholder="Philip">
            </div>
                <div class="form">
                    <label for="pays">Pays de résidence</label>
                    <select class="col-3" name="pays" id="pays">
                        <option value="">Sélectionner</option>
                        <option data-code="93" value="23911">Afghanistan</option>
                        <option data-code="27" value="24089">Afrique du Sud</option>
                        <option data-code="355" value="20417">Albanie</option>
                        <option data-code="213" value="">Algerie</option>
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
                        <option data-code="1242" value="">Babhamas</option>
                        <option data-code="973" value="">baherïn</option>
                        <option data-code="880" value="">Bangladesh</option>
                        <option data-code="1246" value="">Barbade</option>
                        <option data-code="32" value="">Belgique</option>
                        <option data-code="501" value="">Bélize</option>
                        <option data-code="229" value="">Bénin</option>
                        <option data-code="975" value="">Bhoutan</option>
                        <option data-code="375" value="">Biélorussie</option>
                        <option data-code="95" value="">Birmannie</option>
                        <option data-code="591" value="">Bolivie</option>
                        <option data-code="387" value="">Bosnie-Herzégovie</option>
                        <option data-code="267" value="">Bostwana</option>
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
                        <option data-code="56" value="">Chilie</option>
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
                        <option data-code="20" value="">Egypte</option>
                        <option data-code="971" value="">Emirates Arabie Unis</option>
                        <option data-code="593" value="">Equateur</option>
                        <option data-code="291" value="">Erythrée</option>
                        <option data-code="34" value="">Espagne</option>
                        <option data-code="372" value="">Esthonie</option>
                        <option data-code="1" value="">Etats-Unis</option>
                        <option data-code="251" value="">Ethiopie</option>
                        <option data-code="679" value="">Fidji</option>
                        <option data-code="358" value="">Finlande</option>
                        <option data-code="33" value="">France</option>
                        <option data-code="241" value="">Gabon</option>
                        <option data-code="220" value="">Gambie</option>
                        <option data-code="995" value="">Géorgie</option>
                        <option data-code="233" value="">Ghana</option>
                        <option data-code="30" value="">Grèce</option>
                        <option data-code="1473" value="">Grenade</option>
                        <option data-code="502" value="">Guatémela</option>
                        <option data-code="224" value="">Guinée Conakry</option>
                        <option data-code="240" value="">Guinée Equatorile</option>
                        <option data-code="245" value="">Guinée Bissau</option>
                        <option data-code="592" value="">Guyana</option>
                        <option data-code="509" value="">Haïti</option>
                        <option data-code="504" value="">Honduras</option>
                        <option data-code="852" value="">Hong Kong</option>
                        <option data-code="36" value="">Hongrie</option>
                        <option data-code="682" value="">Îles Cook</option>
                        <option data-code="692" value="">Îles Marshall</option>
                        <option data-code="91" value="">Inde</option>
                        <option data-code="62" value="">Indonesie</option>
                        <option data-code="964" value="">Irak</option>
                        <option data-code="98" value="">Iran</option>
                        <option data-code="353" value="">Irlande</option>
                        <option data-code="354" value="">Islande</option>
                        <option data-code="972" value="">Israël</option>
                        <option data-code="39" value="">Italie</option>
                        <option data-code="1876" value="">Jamaïque</option>
                        <option data-code="81" value="">Japon</option>
                        <option data-code="962" value="">Jordanie</option>
                        <option data-code="7" value="">Kazkhstan</option>
                        <option data-code="254" value="">Kenya</option>
                        <option data-code="996" value="">Kirghiszistan</option>
                        <option data-code="686" value="">Kiribati</option>
                        <option data-code="383" value="">Kossovo</option>
                        <option data-code="965" value="">Koweït</option>
                        <option data-code="856" value="">Laos</option>
                        <option data-code="692" value="">Les Marshall</option>
                        <option data-code="266" value="">Lesotho</option>
                        <option data-code="371" value="">Lettonie</option>
                        <option data-code="961" value="">Liban</option>
                        <option data-code="231" value="">Libéria</option>
                        <option data-code="218" value="">Lybie</option>
                        <option data-code="423" value="">Liechtenstein</option>
                        <option data-code="370" value="">Lituanie</option>
                        <option data-code="252" value="">Luxembourg</option>
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
                        <option data-code="691" value="">Micronesie</option>
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
                        <option data-code="63" value="">Philppines</option>
                        <option data-code="48" value="">Pologne</option>
                        <option data-code="1787" value="">Porto Rico</option>
                        <option data-code="351" value="">Portugal</option>
                        <option data-code="974" value="">Quatar</option>
                        <option data-code="243" value="">République Democratique de Congo</option>
                        <option data-code="1809" value="">République Dominicaine</option>
                        <option data-code="420" value="">République Tchèque</option>
                        <option data-code="40" value="">Roumanie</option>
                        <option data-code="44" value="">Royaume-Uni</option>
                        <option data-code="7" value="">Russie</option>
                        <option data-code="250" value="">Rwanda</option>
                        <option data-code="1869" value="">Saint-christophe-et-Niévès</option>
                        <option data-code="378" value="">Saint-Marin</option>
                        <option data-code="1784" value="">Sainte-Vincent-et-les Grénadines</option>
                        <option data-code="1758" value="">Saitne-Lucie</option>
                        <option data-code="677" value="">Salomon</option>
                        <option data-code="503" value="">Salvador</option>
                        <option data-code="685" value="">Samoa</option>
                        <option data-code="239" value="">Sao Tomé-et-Principe</option>
                        <option data-code="232" value="">Sénégal</option>
                        <option data-code="381" value="">Serbie</option>
                        <option data-code="248" value="">Seychelles</option>
                        <option data-code="221" value="">Sierra Léonne</option>
                        <option data-code="65" value="">Singapour</option>
                        <option data-code="421" value="">Slovaquie</option>
                        <option data-code="386" value="">Slovenie</option>
                        <option data-code="252" value="">Somalie</option>
                        <option data-code="249" value="">Soudan du Nord</option>
                        <option data-code="211" value="">Soudan du Sud</option>
                        <option data-code="94" value="">Sri Lanka</option>
                        <option data-code="46" value="">SUède</option>
                        <option data-code="41" value="">Suisse</option>
                        <option data-code="597" value="">Suriname</option>
                        <option data-code="268" value="">Swaziland</option>
                        <option data-code="963" value="">Syrie</option>
                        <option data-code="992" value="">Tadjikistan</option>
                        <option data-code="886" value="">Taïwan</option>
                        <option data-code="255" value="">Tanzanie</option>
                        <option data-code="235" value="">Tchad</option>
                        <option data-code="420" value="">Tchéquive</option>
                        <option data-code="66" value="">Thaïlande</option>
                        <option data-code="670" value="">Timor Oriental</option>
                        <option data-code="228" value="">Togo</option>
                        <option data-code="676" value="">Tonga</option>
                        <option data-code="1868" value="">Trinité-et-Tobago</option>
                        <option data-code="216" value="">Tunisie</option>
                        <option data-code="993" value="">Turkmenistan</option>
                        <option data-code="90" value="">Turquie</option>
                        <option data-code="688" value="">Tuvalu</option>
                        <option data-code="380" value="">Ukraine</option>
                        <option data-code="598" value="">Uruguay</option>
                        <option data-code="678" value="">Vanuatu</option>
                        <option data-code="379" value="">Vatican</option>
                        <option data-code="58" value="">Vénézuéla</option>
                        <option data-code="84" value="">Viêt Nam</option>
                        <option data-code="967" value="">Yémen</option>
                        <option data-code="260" value="">Zambie</option>
                        <option data-code="263" value="">Zimbabwe</option>
                    </select>
                </div>
            <div class="form">
                <label for="email" id="email">Addresse mail</label>
                <input type="email" name="mail" id="email" required placeholder="dubois@gmail.com">
            </div>
            <div class="form">
                <label for="comfirm_email" id="comfirm_email">Confirmer L'addresse mail</label>
                <input type="email" name="mail" id="email" required placeholder="dubois@gmail.com">
            </div>
            <div class="form">
                <label for="indicatif">Indicatif du pays</label>
                <input readonly id="indicatif" type="text" placeholder="+33">
            </div>
            <div class="form">
                <label for="contact" id="contact">contact téléphonique ou whatsapp</label>
                <input type="text" name="contact1" id="contact" required inputmode="text" placeholder="0707237887">
            </div>
            <div class="form">
                <label for="comfirm_contact2"> Confirmer le contact téléphonique ou whatsapp</label>
                <input type="text" name="contact" id="contact" required placeholder="0707237887" inputmode="text">
            </div>
            <div class="form">
                <label for="password" id="password">Mot de passe</label>
                <input type="password" name="password1" id="password1" required placeholder="*******">
            </div>
            <div class="form">
                <label for="comfirm_password">Confirmer le mot de passe</label>
                <input type="password" name="password2" id="password2" required placeholder="*******">
            </div>
            <div class="bouton">
                <button  class="bg-[#0c2b4e] hover:bg-blue-700 text-white font-bold py-2 px-7 rounded" type="submit" id="">S'INSCRIRE</button>
            </div>
        </form>
    </div>
</div>
<!-- example -->


   

<!-- STYLE CSS -->
<style>
    .container
    {
        width: 80%;
        height: 800px;
        margin-left: 100px;
        border: 4px solid #fc2421;
        
    }

    label
    {
        color: gray;
        display: block;
        font-size: 15px;
        padding: 5px;

    }

    .form
    {
        display: block;
        padding-left: 100px;
        
    }

    input
    {
        border: 1px solid gray;
        width: 80%;
        height: 35px;
        
    }

    input::placeholder
    {
        font-size: 1rem;
        padding: 10px;
    }
    
    .col-3
    {
        width: 80%;
        border: 1px solid gray;

    }

    h3
    {
        font-size: 1.5rem;
        padding-left: 90px;
        font-weight: 400;
    }

    .bouton
    {
        display: flex;
        justify-content: flex-end;
        padding-right: 200px;
        margin-top: 30px;
    }

    .text_1
    {
        font-weight: 700;
        font-size: 2rem;
    }


</style>

<!-- -------*******JAVASCRIPT*************--- -->

<script>
    // conutry code
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