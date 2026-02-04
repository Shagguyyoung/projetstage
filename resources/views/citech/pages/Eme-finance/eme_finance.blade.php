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
            <h1 style="color:#323246; font-style: italic;">Executive Masterium of Engineering</h1>
            <b><h3 style="color: #fff; font-size: 2rem; font-weight: bolder;">EME FINANCE</h3></b>
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
                 <p class="text-center">Mot de passe oublié?<a href="#">Cliquez ici</a></p>
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
            <img class="w-[230px]" src="{{ asset('assets/upload/img/finance.jpeg') }}" alt="">
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row_3 text-center">
                <P><a href="sign_eme_finance_ingenerie">EME1 Finance</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="sign_eme_finance">EME2 FINANCE option Finance d’entreprise</a></P>
            </div>
            <div class="row_3 text-center">
                <P><a href="register_eme_finance">EME2 FINANCE option Ingénierie financièree</a></P>
            </div>
        </div>
        </div>
     </div>
     <!-- espace d'information -->
    <div class="bg-row">
      <div class="row_4">
        <p><a href="programme_4">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_4">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions_4">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_4">Modalités</a></p>
        </div>
     </div>
     <!-- cadre d'information -->
       <div class="cadre">
        <h1>L'esprit ingénieur au service de la Finance moderne</h1>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">La Finance au fil des années a atteint un niveau de complexité jamais atteint dans ses concepts comme dans l’utilisation d’outils de plus en plus sophistiqués et de temps de réactions de plus en plus courts.
             La globalisation de l’économie mondiale n’a fait qu’accélérer le phénomène avec rendant souvent vulnérables les entreprises face aux prédateurs ou aux dumpings financiers
        </span>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">La finance d'entreprise et l'Ingénierie Financière sont apparues récemment par nécessité pour mieux anticiper et 
            pouvoir mieux faire les choix stratégiques de vie ou de survie des entreprises quels que soit leurs secteurs d’activité et même leurs tailles.

        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Cet EME Finance avec ses deux spécialisations soit en Finance d'entreprise soit
             en Ingénierie financière a pour ambition de qualifier des cadres de hauts voire de très hauts niveaux par l’acquisition d’un savoir être « ingénieur » face à cette complexification permanente
        </span>
        <br>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Notre diplômé(e) devra bien sur maîtriser les outils de la finance mais sa force sera de pouvoir identifier les risques, 
            de diagnostiquer l’entreprise dans son contexte mais surtout d’être en mesure de proposer non pas une solution mais plusieurs et toutes applicables.
        </span>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Avec cet EME, vous serez celui ou celle qui pourra accompagner voire anticiper la stratégie financière de votre entreprise ou de votre institution, vous serez le chef d’orchestre du maintien ou des prises de contrôles.
             Nul doute que vous deviendrez alors une pièce maitresse de votre entreprise ou de votre institution.
        </span>
        <br>
        <br>
        <span style="font-weight: bolder; font-size: 20px;">L'Executive Master of Engineering Finance (EME Finance)
        </span>
        <br>
        <br>
            <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">
                 <img style="float: left; margin: 5;" src="{{ asset('assets/upload/img/fin.jpeg') }}" alt="" width="386px" height="259px">
                 <br>
                   Cet EME est dirigé par une grande professionnelle de la Finance, <strong>le Docteur <span>Annick ATSAIN</span></strong>. Grâce à nos accords avec des établissements d’enseignement supérieur, nous mettons à disposition des salles de regroupement pour nos auditeurs dans un grand nombre de pays. En fonction de votre pays de résidence, ISAE-ISM Paris Executive Education vous proposera plusieurs centres de séminaires. 
                    Pendant toute votre formation vous alternerez les séances de travail individuel et les séminaires collectifs.    
                </span>
                <br>
                <br>
                <br>
                <span style="font-weight: bolder; font-size: 20px;">Les modalités d'inscription</span>
                <br>
                <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;"><u>Accès en EME1 (6 mois) </u>: Pour vous inscrire, vous devez être titulaire d’au moins un diplôme L3 (BAC+3) toute spécialité certifié CAMES ou si ce n’est pas le cas,
             nous soumettre une demande de validation des acquis professionnels (VAP)
        </span><br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;"><u>Accès en EME2 (15 mois)</u> : Si vous êtes titulaire au minimum d'un M1(Bac+4) en sciences de gestion certifié CAMES (et sous certaines conditions accès possible par la VAP).
        </span>
        <br>
        <span>Si vous êtes intéressé(e) pour candidater, <b>cliquez sur le bouton sous "S'inscrire"</b></span>
       
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
                    <P><a href="sign_eme_finance_ingenerie">EME1 Finance</a>
                    </P>
                </div>
                <div class="row-6">
                    <P>
                        15 Avril 2026
                    </P>
                </div>
                <div class="row-6">
                    <p>
                        13 Avril 2026
                    </p>
                </div>
                 <div class="row_5">
                    <p><a href="sign_eme_finance">EME2 FINANCE spécialité
                         Finance d’entreprise
                        </a>
                    </p>
                </div>
                 <div class="row_6"><p>22 Avril 2026</p></div>
                 <div class="row_6"><p>20 Avril 2026</p></div>
                 <div class="row_5">
                    <p><a href="register_eme_finance">
                        EME2 FINANCE spécialité
                        Ingénierie financière
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
<style>

   
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 180%;

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
        height: 120px;
        padding-right: -120px;
    }

    .box_3
    {
        width: 300px;
        
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
        font-size: 12px;
        padding: 5px;
        margin-top: 9px;
        border: 3px solid #fff;
        border-radius: 8px;
        color: whitesmoke;
        background-color: #323246;
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
    font-size: 13px;
    color: #fff;
}


/* ------espace information */
    .row_4
    {
        width: 20%;
        height: 40px;
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
        font-size: 0.9rem;
        font-weight: bolder;
    }

    .bg-row 
    {
        display: flex;
        justify-content: center;
        
        
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
.Bouton
{

    display: flex;
    padding-top: 60px;
    margin-top: 10px;
    
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
    height: 820px;
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
    font-weight: 800;
    color: #211832;
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
        height: 60px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: #323246;
}

.row-5
{
        width: 200px;
        height: 40px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: #323246;
}
.row_6
{
        width: 200px;
        height: 60px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: transparent;
}

.row-6
{
        width: 200px;
        height: 40px;
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
        height: 40px;
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
        height: 40px;
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
     color: #fff;
     font-weight: bolder;
}

.row-5 a:hover
{
     color: #fff;
     font-weight: bolder;
}


 .row_6 p:hover
    {
        color: #fff;
        font-weight: bolder;
    }

.row-6 p:hover
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

</style>

@endsection