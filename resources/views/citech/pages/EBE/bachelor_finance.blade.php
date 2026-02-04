@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section>
   
<!-- main-head -->
     <div id="main">
        <div class="box_1">
          <div class="Espace">
            <div class="espace_2">
                <b>Espace Auditeurs</b>
            </div>
            <div class="col-3">
                <label for="name" id="name">Identifiant</label>
                <input type="text" name="identifiant_2" id="identifiant_2" required>
           </div>
            <div class="col-3">
                <label for="name" id="password">Mot de passe</label>
                <input type="password" name="mot de passe" id="password_2" required>
            </div>
            <div class="white">
                 <p class="text-center">Mot de passe oublié?<a href="#">Cliquez ici</a></p>
            </div>
            </div>
        </div>
        <div class="Bouton">
            <div class="bouton">
                <button type="submit">
                  <img class="w-[80%]" src="{{ asset('assets/upload/img/button-1.png') }}" alt="">
                </button>
            </div>
         </div>
        <div class="box_2">
                <iframe width="240" height="220" src="https://www.youtube.com/embed/JUtx6sfELTo" title="ismparis  base FB" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                
                </iframe>
            
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row_3 text-center">
                <P><a href="inscription_finance">BACHELOR 3 FINANCE
                     Analyste Financier</a></P>
            </div>
        </div>
     </div>

     <!-- info-cadre -->
      <div class="bg-row">
      <div class="row_4">
        <p><a href="programme">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_pedagogique">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="#">Modalités</a></p>
        </div>
     </div>

     <!-- **********grand cadre******* -->

     <div class="cadre">
           <h1 style=" color: #686D76;">Analyste financier, une compétence recherchée !
           </h1> <br>
           <span>Qu’entendons-nous par analyste financier ? 
            Le diagnostic financier d'une entreprise peut être rapproché du bilan de santé établi en médecine pour un être humain.
             Il permet d'identifier les symptômes et de mettre en œuvre une thérapeutique adaptée. 
             Le diagnostic financier s'appuyant sur les performances de l'entreprise propose les mesures à prendre pour assurer sa survie, 
             son redressement et son développement par une nouvelle stratégie</span>
             <br>
             <br>
           
           <span>En définitive cette compétence est utile autant à l'actionnaire qui se préoccupe de la rentabilité des fonds investis et de l'indépendance de l'entreprise, 
            qu'au banquier qui se préoccupe aussi de rentabilité (aptitude de l'entreprise à rémunérer les fonds empruntés) et de sécurité (aptitude de l'entreprise à rembourser ces mêmes fonds)</span>
            <br>
            <br>
           <span>L'analyste financier est un collaborateur indispensable dans les services comptables ou financiers, chez les opérateurs de services crédits chez les banquiers ou encore chez les équipes de contrôles de gestion.
             Il est en quelque sorte la vigie de l’entreprise ou du financeur.</span>
             <br>
             <br>
             <span>Comme pour toutes nos formations, le format pédagogique autorise de se former tout en poursuivant ses activités professionnelles ou autres, 
                et est orienté vers l’acquisition de véritables compétences pour l’excellence par le savoir-faire</span>
                <br>
                <span></span>
                <br>
                <span>Docteur Annick ATSAIN</span>
                <br>
                <span>Directrice Général</span>
                <br>
                <br>
        
                 <h1 style=" color: #686D76">Le Bachelor 3 FINANCE - Analyste financier</h1>
                 
                 <span>Ce Bachelor est dirigé par le Doyen honoraire Abdoulaye OUATTARA, 
                    Professeur à l’Université Félix Houphouët Boigny et grand spécialiste des sciences de gestion.
                </span>
                <br>
                <span>Il a deux objectifs principaux. Le premier est de mettre l’apprenant en capacité d’élaborer et de mettre en œuvre une démarche de diagnostic économique et financier.
                     Le second est de le rendre capable de rédiger un rapport de diagnostic complet et 
                     clair de la santé économique et financière d’une entreprise donnée.
                </span>
                <br>
                <span>Aborder rationnellement le diagnostic financier suppose de répondre à un certain nombre de questions préalables concernant sa définition, ses finalités, ses outils et ses méthodes. Comme la plupart des disciplines scientifiques le diagnostic financier passera par une phase d'observation,
                     puis de compréhension et enfin d'interprétation.
                </span>
                <br>
                <span>Grâce à nos accords avec un grand nombre d’établissements d’enseignement supérieur en Europe comme sur le Continent Africain, 
                    nous mettons à disposition des salles de regroupement pour nos auditeurs dans un grand nombre de pays.
                </span>
                <br>
                <span>Ce Bachelor de spécialisation ou de réorientation est directement accessible aux titulaires d’un Bac+2. La formation dure 9 mois au cours desquels vous alternerez les séances de travail individuel et les séminaires collectifs. En fonction de votre pays de résidence, CAF vous proposera plusieurs centres de séminaires
                     (sous réserve d'un nombre suffisant d’admis ayant choisi ces centres et des places disponibles).
                </span>
                <br>
                <br>
                <h1 style="color:#686D76;">Les modalités d'inscription</h1>
                <span></span>
                <br>
                <span>Pour vous inscrire, vous devez être titulaire au moins d’un Bac+2 (si ce n’est pas le cas,
                     vous pouvez nous soumettre une demande de validation des acquis professionnels dite VAP).
                </span>
                <br>
                <span>Si vous êtes intéressé(e) cliquez sous « S'inscrire »</span>

      </div>
    <!-- ********FOOTER******* -->

    <div class="conteneur">
           <div class="row_contain">
                <div class="row_6"><p>S'inscrire</p></div>
                <div class="row_6"><p>Prochaine Rentrée </p></div>
                <div class="row_6"><p>Limite candidatures</p></div>
                <div class="row_5"><P><a href="inscription_finance">BACHELOR 3 FINANCE
                                         Analyste Financier</a>
                                    </P>
                </div>
                <div class="row_7"><p>22 Avril 2026</p></div>
                 <div class="row_7"><p>20 Avril 2026</p></div>
          </div>
           <div class="social_contain">
               <div class="social">
                 <div class="wifi">
                    <span style="color: #fff;">Nous contacter</span>
                    <a href="#"><img class="w-[100px]" src="{{ asset('assets/upload/img/wifi.svg') }}" alt=""></a>
                 </div>
                 <div class="network">
                    <span><a href=""><img class="w-[40px]" src="{{ asset('assets/upload/img/facebook.png') }}" alt=""></a></span>
                    <br>
                    <span><a href="#"><img class="w-[40px]" src="{{ asset('assets/upload/img/twitter.png') }}" alt=""></a></span>
            </div>
         </div> 
         </div>
  </div>

</section>

<style>

    /* ----main----- */
    #main
    {
        display: flex;
        width: 85%;
        height: 220px;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }
    
    .box_1
    {
        display: flex;
        width: 500px;
        height: 300px;
        margin-left: 10px;
        
    }

    .box_2
    {
        width: 80%;
        height: 100%;
       
        padding-right: -180px;
        margin-left: 10px;
    }

    .box_3
    {
        width: 250px;
        height: 300px;
        margin-top: 30px;
        margin-right: 40px;
       
    }

    .row_2
    {
        
        justify-content: center;
        align-items: center;
        width: 230px;
        padding: 5px;
        margin: 15px;
        border: 1px solid white;
        color: white;
        font-weight: 700;
        background-color: transparent;
    }

    .row_2:hover
    {
        color: gray;
        transition: ease 1.5s;
    }

    .row_3
    {
        
        justify-content: center;
        align-items: center;
        width: 230px;
        padding: 5px;
        margin: 15px;
        border: 1px solid #fff;
        color: whitesmoke;
        background-color: #2f353e;
    }

    .row_3:hover
    {
        color: gray;
        transition: ease-in 0.5s;
        
    }

    input
   {
    padding: 2px;
    width: 150px;
    border-radius: 5px;
    }

    .col-3
    {
    padding-right: 3px;
    padding-left: 3px;
   }
.Bouton
{

    display: flex;
    padding-top: 10px;
    margin-top: 10px;
    margin-left: px;
    
}

button
{
    
    cursor: pointer;
    border: none;
    border-radius: 50%;
}

label
{
    display: block;
    font-size: 15px;
    padding: 5px;
    color: #fff;
}

.espace_2
{
    margin-top: 10px;
    color: black;
    font-size: 20px;
    font-family:'rubik' sans-serif ;
}

.white
{
    width: 160%;
    color: #fff;
    font-weight: 700;
    padding-right: 90px;
    font-size: 12px;
}

.white a:hover
{
    transition:ease-in 1s;
    color: gray;
}

/* info-cadre */

.row_4
    {
        width: 268px;
        height: 50px;
        padding-top: 15px;
        margin-left: 3px;
        margin-top: 10px;
        text-align: center;
        color: #fff;
        font-family: 'Rubik', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        margin-right: 20px;
        background-color: #2f353e;
    }

    .row_4 a
    {
        font-size: 0.9rem;
    }

    .row_4 a:hover
    {
        color: #f24c21;
        transition: ease-in 0.5s;
    }

    .bg-row 
    {
        width: 100%;
        margin-left: 10px;
        display: flex;
        justify-content: center;
    }

    /* -------grand cadre----- */

    .cadre 
{
    margin-left: 90px;
    height: 150%;
    width: 86%;
    margin-top: 15px;
    margin-bottom: 0;
    border: 4px solid #f24c21;
    padding: 9px;
}

.cadre h1
{

    text-align: start;
    font-size: 1.1rem;
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: x-large;
    padding-right: 20px;
}

span
{
    font-style: medium;
    font-size: 1rem;
    font-family: arial, helvetica, sans-serif;
    color: #686D76;
}
/* -------FOOTER------ */

.conteneur
{
    margin-left: 90px;
    display: flex;
}
.row_contain
{
     display: grid;
     grid-template-columns: 240px 240px 240px;
     margin-left: 5px;
     margin-top: 20px;  
}

.row_5
{
        width: 200px;
        height: 70px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 4px solid #fff;
        color: #fff;
        background-color: #0c2b4e;
}

.row_6
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 4px solid #f24c21;
        color: #686D76;
        background-color: transparent;
}

.row_7
{
        width: 200px;
        height: 70px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 4px solid #f24c21;
        color: #686D76;
        background-color: transparent;
}

 .row_5 a:hover
    {
        color: #686D76;
        transition: ease-in 0.5s;
    }

    .social_contain
    {
        padding-top: 10px;
    }

    .social
    {
        background-color: #f24c21;
        display: flex;
        padding: 10px;
    }

    .network
    {
        padding-top: 20px;
        margin-left: 15px;
    }


</style>