@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section>
    <!-- entête-->
 <div id="container">
        <div id="contain">
            <div class="colo-md-2 col-sm-8 " style="width: 120px" id="ims">
                <a href="#">
                    <img src="{{ asset('assets/upload/img/logo_1.jpeg') }}" alt="">
                </a>
            </div>
            <div class="col-md-8 col-sm-8text-center" id="descript">
            <h1 style="color:#323246; font-style: italic; font-size: 35px;">Executive Masterium of Engineering</h1>
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME LOGISTIQUE</h3></b>
        </div>
         <div class="col-md-2 col-sm-8" id="logo">
            <a href="">
                <img style="width: 120px" src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" alt="">
            </a>
        </div>
        </div>
        
       
        <div class="col-md-12 border-b-4px solid #fff"></div>
    </div>
    <!-- main -->
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
                 <p class="text-center">Mot de passe oublié? <a href="#">Cliquez ici</a></p>
            </div>
            </div>
        </div>
        <div class="Bouton">
            <div class="bouton">
                <button type="submit">
                  <img class="w-[70%]" src="{{ asset('assets/upload/img/button-1.png') }}" alt="">
                </button>
            </div>
         </div>
        <div class="box_2">
            <img class="w-[100%]" src="{{ asset('assets/upload/img/logistique.jpeg') }}" alt="">
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row-3 text-center">
                <P><a href="register_eme_logistique">EME1 Logistique</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="register_eme_logistique_achat">EME2 LOGISTIQUE spécialité
                              Achats</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="register_eme_logistique_production">EME2 LOGISTIQUE spécialité
                             Logistique industrielle</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="register_eme_logistique_distribution">EME2 LOGISTIQUE spécialité
                           Management de la Supply Chain</a></P>
            </div> 
        </div>
     </div>
      <!-- espace d'information -->
    <div class="bg-row">
      <div class="row_4">
        <p><a href="programme_1">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_1">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions_1">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_1">Modalités</a></p>
        </div>
     </div>

     <!-- cadre d'information -->
       <div class="cadre">
        <h1>La logistique au cœur de la réussite</h1>
        <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">Dans le monde d’aujourd’hui comme dans celui de demain, l’organisation, l’optimisation, la gestion des flux physiques et informationnels, c’est-à-dire le Management Logistique ou Supply Chain Management,
             devient une fonction vitale pour toutes les entreprises et même pour les institutions publiques. A l’heure des réseaux, des Big Datas, des objets connectés, du développement durable, la compétence logistique devient stratégique et se positionne désormais au cœur de la réussite de toute organisation qu’elle soit petite ou multinationale.
        </span>
        <br>
        <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">désormais au cœur de la réussite de toute organisation qu’elle soit petite ou multinationale.
L’objet est de former de hauts responsables capables de transversalité, de rigueur scientifique et d’un savoir faire de haut niveau. Ces qualités seront le gage à la fois de leurs capacités d’adaptation mais aussi d’innovation tout en restant opérationnel.
        </span> 
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">L’ISAE-ISM Paris a décidé de proposer son EME Logistique (Bac+5) pour répondre à ce défi en innovant sur le format et sur la pédagogie. Grâce au format Blended Learning mis en place, vous pouvez accéder à la formation et <b>obtenir ce diplôme sans quitter ni votre pays ni votre emploi.</b>
        </span>
        <br>
        <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;"> Vous étudierez à la fois de chez vous et en face à face lors de regroupements mensuels mais toujours en contact permanent avec l’équipe pédagogique. 
            Sur le plan pédagogique, l’accent sera mis sur l’acquisition d’un savoir-faire opérationnel par la maitrise d’outils méthodologiques et la maîtrise de l’ERP (e-prelude) grâce à des séminaires mensuels.
        </span>
        <br>
        <br>
        <span style="font-weight: bolder; font-size: 20px;">L'EME Logistique 
       </span>
       <br>
       <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">
             <img style="float: left; margin: 15px;"  src="{{ asset('assets/upload/img/log2025.jpeg') }}" alt="" width="280px" height="320px">
             <br>
             Cet EME Logistique est dirigé par une personnalité d’exception, le <b>Professeur Emérite Gérard Baglin
             </b>. Grâce à nos accords avec un grand nombre d’établissements d’enseignement supérieur en Europe comme sur le Continent Africain, 
                nous mettons à disposition des salles de regroupement pour nos auditeurs dans un grand nombre de pays
       </span>
        <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">Désormais cette formation est accessible aux diplômés d’une Licence 3. La formation EME1 se déroule sur <b>6 mois</b> et l'EME2 sur <b>15 mois</b> (accès direct possible pour les titulaires d’un M1) au cours desquels vous alternerez les séances de travail individuel et les séminaires collectifs.
        </span>
        <br>
        <br>
        <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">ISAE-ISM Paris propose 3 spécialisations de haut niveau couvrant ainsi l'ensemble de la chaine logistique, les EME2 LOGISTIQUE avec comme spécialisation soit Achats , soit Logistique industrielle , soit Management de la Supply Chain. 
        </span>
        <br>
        <br>
        <h1>Les modalités d'inscription</h1>
        <span  style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Pour vous inscrire, vous devez être titulaire au moins d'un diplôme L3 (BAC+3) 
               Titulaire d'un M1(Bac+4) vous pourrez intégrer la formation directement en deuxième partie de l’EME Logistique. Si vous n'avez pas le diplôme requis vous pouvez soumettre une demande de validation des acquis professionnels (VAP).</span>
               <br>
               <br>
               <span style="font-size: 12px; font-family: arial, helvetica, sans-serif;">Si vous êtes intéressé(e) <b>cliquez</b> sur <b>"S'inscrire" </b> 

               </span>
     </div>
<!-- ***********FOOTER********** -->
     <div class="conteneur">
           <div class="row_contain">
                <div class="row_1"><p>S'inscrire</p></div>
                <div class="row_7">
                    <p>Prochaine Rentrée
                    </p>
                </div>
                <div class="row_7">
                    <p>
                        Limite candidatures
                 </p>
                </div>
                <div class="row-5">
                    <P><a href="register_eme_logistique">EME1 Logistique</a>
                    </P>
                </div>
                <div class="row_6">
                    <P>
                        15 Avril 2026
                    </P>
                </div>
                <div class="row_6">
                    <p>
                       15 Avril 2026
                    </p>
                </div>
                 <div class="row_5">
                    <p><a href="register_eme_logistique_achat">EME2 LOGISTIQUE spécialité
                                   Achats
                        </a>
                    </p>
                </div>
                 <div class="row_6"><p>22 Octobre 2026</p></div>
                 <div class="row_6"><p>20 Octobre 2026</p></div>
                 <div class="row_5">
                    <p><a href="register_eme_logistique_production">EME2 LOGISTIQUE spécialité
                              Logistique industrielle
                        </a>
                    </p>
                </div>
                <div class="row_6"><p>21 Octobre 2026</p></div>
                 <div class="row_6"><p>21 Octobre 2026</p></div>
                 <div class="row_5">
                    <p><a href="register_eme_logistique_distribution">EME2 LOGISTIQUE spécialité
                                   Management de la Supply Chain
                        </a>
                    </p>
                </div>
                <div class="row_6"><p>22 Avril 2026</p></div>
                 <div class="row_6"><p>20 Avril 2026</p></div>
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
                    <span><a href="#"><img class="w-[40px]" src="{{ asset('assets/upload/img/linkedin.png') }}" alt=""></a></span>
            </div>
         </div> 
         </div>
  </div>

</section>
<!--************* STYLE CSS********** -->
<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 240%;
    }
/*----entete---  */
    #ism
    {
        
        margin-left: 120px;

    }

    #descript
    {
         display: inline-block;
         text-align: center;
         font-size: 1.5rem;
         margin-top: 20px;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        

    }

    

    #contain
    {
        display: flex;
        justify-content: space-around;
        margin-left: 50px;
        margin-right: 50px;
        border-bottom: 2px solid #fff;

        
    }
/* ----main----- */
    #main
    {
        display: flex;
        width: 80%;
        height: 350px;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }
    
    .box_1
    {
        display: flex;
        width: 500px;
        height: 300px;
        padding-left: -10px;
        
    }

    .box_2
    {
        width: 600px;
        height: 400px;
        padding-right: 20px;
    }

    .box_3
    {
        width: 290px;
        
    }

    .row_2
    {
        
        justify-content: center;
        align-items: center;
        width: 270px;
        padding: 5px;
        border: 2px solid black;
        border-radius: 8px;
        color: black;
        background-color: #fff;
    }

    .row_2:hover
    {
        font-weight: bolder;
    }

    .row_3
    {
        
        justify-content: center;
        align-items: center;
        width: 270px;
        height: 60px;
        padding: 5px;
        margin-top: 9px;
        font-size: 14px;
        border: 3px solid #fff;
        border-radius: 8px;
        color: whitesmoke;
        background-color: #323246;
    }

    .row-3
    {
        
        justify-content: center;
        align-items: center;
        width: 270px;
        height: 50px;
        margin-top: 5px;
        font-size: 13px;
        border: 2px solid #fff;
        border-radius: 8px;
        color: #fff;
        background-color: #323246;
    }

    .row-3:hover
    {
          color: #f24c21;
          font-weight: bolder;
    }

    .row_3:hover
    {
        color: #fff;
        font-weight: bolder;
        
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
    padding-bottom: 70px;
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
    font-size: 10px;
    font-family:'rubik' sans-serif ;
}

.white
{
    width: 160%;
    color: #fff;
    font-weight: 700;
    padding-right: 90px;
    margin: 5px;
    font-size: 12px;
}

.white a:hover
{
    font-size: 13px;
    color: #fff;
}


/* ------espace information */
    .row_4
    {
        width: 20%;
        height: 50px;
        padding: 5px;
        margin-left: 6px;
        text-align: center;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
        margin-right: 10px;
        background-color: #323246;
    }

    .row_4 a
    {
        font-size: 0.9rem;
    }

    .row_4 a:hover
    {
        color: #f24c21;
        font-size: 0.8rem;
        font-weight: bolder;
    }

    .bg-row 
    {
        display: flex;
        justify-content: center;
        padding-top: -70px;
        
    }


    input
   {
    padding: 2px;
    border-radius: 5px;
    }

    .col-3
    {
    padding-right: 3px;
    padding-left: 3px;
   }

.espace_2
{
    margin-top: 10px;
    color: #0c2b4e;
    font-size: 20px;
    font-weight: bolder;
}

.white
{
    color: #fff;
    padding-right: 90px;
    font-size: 10px;
}

.white a:hover
{
    column-rule: black;
    font-weight: bolder;
}
/* ----cadre information */

 .cadre 
{
    margin-left: 90px;
    height: 650px;
    width: 88%;
    margin-top: 15px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

  .cadre h1
{

    text-align: start;
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: 20px;
    padding-right: 20px;
}
/* -----footer area------- */
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
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: #0c2b4e;
}

.row-5
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
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
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: transparent;
}

.row_1
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid black;
        border-radius: 8px;
        color: black;
        font-size: 12px;
        background-color: #fff;
}

.row_1 p:hover
{
     color: black;
    font-weight: bolder;
}

.row_7
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        font-size: 12px;
        border-radius: 8px;
        color: #fff;
        background-color: ;
}
.row_7 p:hover
{
    color: #fff;
    font-weight: bolder;
}
 .row_5 a:hover
    {
        color: #f24c21;
        font-weight: bolder;
    }

    .row-5 a:hover
    {
        color: #f24c21;
        font-weight: bolder;
    }

 .row_6 p:hover
    {
        color: #fff;
        font-weight: bolder;
    }

    .social_contain
    {
        padding-top: 10px;
    }

    .social
    {
        display: flex;
        padding: 10px;
    }

    .network
    {
        padding-top: 20px;
        margin-left: 15px;
    }

    a img
    {
       background-image: white; 
    }
    

    /* --- MEDIA QUERIES --- */

/* TABLETTES */
@media (max-width: 992px) {
    #descript h1 {
        font-size: 1.3rem;
    }

    #descript h3 {
        font-size: 1.4rem;
    }
}

/* SMARTPHONES */
@media (max-width: 768px) {
    #contain {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }

    #main {
        flex-direction: column;
        align-items: center;
    }

    .box_1, .box_3 {
        width: 100%;
        max-width: 350px;
    }

    .bg-row .row_4 {
        width: 45%;
    }

    .cadre img {
        width: 100%;
    }
}

/* PETITS SMARTPHONES */
@media (max-width: 480px) {
    .bg-row .row_4 {
        width: 100%;
    }

    #descript h1 {
        font-size: 1.1rem;
    }

    #descript h3 {
        font-size: 1.2rem;
    }

    .row_1, .row_5, .row_6 {
        font-size: 11px;
    }
}
</style>