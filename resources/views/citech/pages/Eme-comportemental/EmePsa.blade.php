@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section>
    
<!-- *******HEADER******* -->
    <div class="header">
        <div class="logo1">
            <a href="#">
                <img src="{{ asset('assets/upload/img/psa-1.png') }}" alt="">
            </a>
        </div>
     </div>
     <!-- ********LOGIN SPACE******* -->
    <div class="ligne">
          <div class="contain">
            <div class="espace">
                <b>Espace Auditeurs</b>
            </div>
            <div class="col-3">
                <label for="name" id="name">Identifiant</label>
                <input type="text" name="identifiant" id="" required>
            </div>
            <div class="col-3">
                <label for="name" id="password">Mot de passe</label>
                <input type="password" name="mot de passe" id="" required>
            </div>
            <div class="bouton">
                <button type="submit">
                  <img class="w-[39px]" src="{{ asset('assets/upload/img/btn.png') }}" alt="">
                </button>
            </div>
          </div>
        </div>
        <!-- ***********ROW SECTION******** -->
         <div class="row-contain">
            <div class="col-text1">
                <a href="inscription_eme">
                    EME1
                    <br>
                    PSA
                </a>
            </div>
            <div class="col-text"><b>S'INSCRIRE</b></div>
            <div class="col-text1">
                <a href="inscription_psa">
                    EME2
                    <br>
                    PSA
            </a></div>
         </div>
<!-- ********INFORMATION****** -->
 <div class="container">
        <div class="rectangle">
            <a href="programme_psa">Programme</a>
        </div>
        <div class="rectangle">
            <a href="equipe_psa">L'équipe pédagogiquee</a>
        </div>
        <div class="rectangle">
            <a href="conditions_psa">Conditions</a>
        </div>
        <div class="rectangle">
            <a href="modalites_psa">Modalités</a>
        </div>
    </div>

    <!-- *********CADRE******* -->
     <div class="cadre">
        <h1>Pourquoi un Executive Master of Engineering en Psychologie Sociale Appliquée ?</h1>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">C’est une raison simple et évidente : il n’y a pas un seul secteur de l’activité économique qui n’ait besoin de comprendre et d’utiliser la dimension humaine pour atteindre l’excellence. Actuellement, d’un côté le monde universitaire produit d’excellentes formations théoriques et la recherche en science du comportement a fait elle des progrès remarquables ces dernières décennies. Mais le constat est sans appel, la transmission rigoureuse de l’applicabilité aux activités économiques ne s’est pas faite.
             C’est l’ambition de ce Master en Ingénierie Comportementale l’Executive Master of Engineering en Psychologie Sociale Appliquée.
        </span>
        <br>
        <br>
        <span style="font-weight: bolder; font-size: 12px;">Pr Alain RIVIERE</span>
        <br>
        <span style="font-size: 12px;">Recteur de CITech</span>
     </div>
<!-- ****SECOND ROW SECTION -->
 <div class="row-contain1">
            <div class="col-text2">
                <div>EME1</div>  
                    <br>
                <span>15 avril 2026</span>
            </div>
            <div style="font-size: 10px;" class="col-text"><b>Prochaines rentrées</b></div>
            <div class="col-text2">
                <div>EME2</div>  
                    <br>
                <span>22 Avril 2026</span>
            </div>
         </div>
         <!-- ******FOOTER***** -->
           <p class="text-1">
        <i>Nous contacter</i>
       </p>

      <div class="social-media">
        <div class="social-logo"><img src="{{ asset('assets/upload/img/facebook.png') }}" alt=""></div>
        <div class="social-logo"><img src="{{ asset('assets/upload/img/whatsapp.png') }}" alt=""></div>
        <div class="social-logo"><img src="{{ asset('assets/upload/img/linkedin.png') }}" alt=""></div>
      </div>


</section>

<!-- *********STYLE CSS******* -->
 <style>

 /* .-------LOGIN SPACE------- */
 .ligne
{
    display: inline-block;
    border-bottom: #f24c21 1.5px solid;
    padding-bottom: 5px;
    border-top: 1.5px solid #f24c21;
    width: 88%;
    margin-left: 90px;
}
.espace
{
    
    color: black;
    font-size: 10px;
    padding-left: 2px;
}
.contain
{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

label
{
    display: block;
    font-size: 10px;
    padding: 5px;
    font-style: italic;
    color: #f24c21;
}

input
{
    border: 2px solid #f24c21;
}

.col-3
{
    margin-right: -220px;
    padding-left: px;
}
.bouton
{
    padding-right: 3px;
    padding-left: 3px;
    margin-top: 25px;
    position: relative;
}

button
{
    cursor: pointer;
    border: none;
    background-color: black;
    border-radius: 50%;
}
/* ******-------ROW SECTION-----***** */
.row-contain
{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 88%;
    margin-left: 90px;
    height: 90px;
}

.col-text1
{
    width: 290px;
    height: 60px;
    border: 3px solid #f24c21;
    border-radius: 10px;
    text-align: center;
    font-weight: bolder;
}
/* *******-------INFORMATION-----******* */
 .container
    {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-left: 50px;
    }

    .rectangle
    {
        
        width: 95%;
        height: 50px;
        margin-top: 8px;
        background-color: #f24c21;
        border: solid black 2px;
        border-radius: 10px;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-weight: bolder;
        color: #fff;
    }

    a:hover
    {
        color: gray;
        transition: ease-in 0.5s;
    }
/* ----------GRAND CADRE--------- */

  .cadre 
{
    margin-left: 90px;
    height: 40%;
    width: 88%;
    margin-top: 15px;
    margin-bottom: 0;
    border: 4px solid #f24c21;
    padding: 9px;
    opacity: 1;
}

  .cadre h1
{

    text-align: start;
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: small;
    padding-right: 20px;
}
/* ******---SECOND ROW--******* */
.row-contain1
{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 88%;
    margin-left: 90px;
    margin-top: 10px;
    height: 50px;
    background-color: #f24c21;
}

.col-text2
{
    font-size: 10px;
    text-align: center;
    font-weight: bolder;
    color: #fff;
}
/* ---******FOOTER*****---- */
/* -----social----- */
.text-1
{
    display: flex;
    justify-content: center;
    text-align: center;
    font-size: 1rem;
    font-family:   Arial, Helvetica, sans-serif;
    color: #f24c21;
    margin-top: 10px;
    margin-bottom: 5px;
}

.social-media
{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 5px;
}

.social-logo
{
    width: 60px;
    height: 60px;
    border-radius: 60%;
    padding: 5px
   
}

@media only screen and (max-width: 600) {
    .logo{
        width: 100px;
    }
    .slogan{
        font-size: 16px;
    }
}

 </style>