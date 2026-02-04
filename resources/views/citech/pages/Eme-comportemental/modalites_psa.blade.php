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
        <!-- ***********ROW SECTION******** -->
         <div class="row-contain">
            <div class="col-text1">
                <a href="inscription_eme">
                    EME1
                    <br>
                    PSA
                </a>
            </div>
            <div class="col-text " style="color: #f24c21;" ><b>S'INSCRIRE</b></div>
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
            <a href="#">Modalités</a>
        </div>
        
    </div>

    <!-- *********CADRE******* -->
     <div class="cadre">
        <span style="font-size: 14px;"><strong><u>Frais de dossier et de scolarité</u></strong></span>

        <br>
        <br>
        <span class="text-[20px]">EME1 :<strong>1430€</strong></span>
        <br>
        <span class="text-[20px]">EME2 :<strong> 2775€</strong></span>
        <br><br>
         <span class="text-[18px]"><u><strong>Modalités</strong></u>.
        </span>
        <br><br>
        <span class="text-[15px]"><strong>Acompte pré-inscription :</strong>
        305€ à verser dès l’acceptation de votre candidature. Ce versement est nécessaire pour la validation de votre admission.
         Cette somme ne sera pas restituée si vous décidez de ne pas poursuivre.
        </span>
        <br><br>
         <span class="text-[18px]"><strong>Solde de la scolarité : </strong>à verser au plus tard la veille du début des cours</span>
         <br>
         <span class="text-[20px]">EME1 :<strong>1125€ </strong></span>
        <br>
        <span class="text-[20px]">EME2 :<strong>  2470€</strong></span>
        <br>
        <br>
         <span class="text-[15px]"><strong>Facilités pour paiement du solde de la scolarité ::</strong>
        Facilités pour paiement du solde de la scolarité :
        </span><br>
        <span>-  50% à verser au plus tard la veille du début des cours</span><br>
        <span>-  50% à verser au plus tard 60 jours après le début des cours</span>
       <br> 
       <br>
       <span><u><strong>Financement </strong></u>
       <br>
       Sur demande, expresse et motivée et avec présentation de garanties, des facilités de paiement peuvent être envisagées par CAF (safi@blearn.net)
    </span>
    <br>
    <br>
        <span class="text-[18px]" style="font-style:italic; font-family: "><strong>Important : </strong>
         l’inscription au EME1 ou EME2 ne sera considérée comme définitive qu’au paiement total des frais de scolarité. En tout état de cause, ne pourra être admis en EME2 pour les EME1 et à la diplomation pour les EME2 que l’auditeur ayant soldé ses frais de scolarité de l’année en cours
        </span>
        <br>
     </div>
 <div class="bouton">
     <img class="w-[39px]" src="{{ asset('assets/upload/img/btn.png') }}" alt="">
                <a href="Emepsa">
                  Retour menu
                </a>
        
</div>
</section>

<!-- *********STYLE CSS******* -->
 <style>

 /* .-------LOGIN SPACE------- */
 /* .ligne
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
} */

.col-3
{
    margin-right: -220px;
    padding-left: px;
}
.bouton
{
    display: flex;
    justify-content: end;
    padding-right: 3px;
    padding-left: 3px;
    margin-top: 25px;
    
}

button
{
    cursor: pointer;
    border: none;
    background-color: transparent;
    border-radius: 50%;
}

.bouton a
{
    color: #f24c21;
    font-size: 20px;
    font-weight: bolder;
}

/* ******-------ROW SECTION-----***** */
.row-contain
{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 88%;
    padding-left: 60px;
    margin: 5px;

}

.col-text1
{
    width: 270px;
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
        margin-left: 20px;
        padding-right: 40px;
    }

    .rectangle
    {
        
        width: 88%;
        height: 40px;
        margin-top: 2px;
        margin-right: 20px;
        background-color: #f24c21;
        border: solid black 1px;
        border-radius: 10px;
        text-align: center;
        text-decoration: none;
        font-size: 20px;
        font-weight: bolder;
        color: #fff;
    }

    .rectangle:hover
    {
        color: gray;
        transition: ease-in 0.5s;
    }

/* ----------GRAND CADRE--------- */

  .cadre 
{
    margin-left: 90px;
    height: 670px;
    width: 80%;
    margin-top: 15px;
    margin-bottom: 0;
    border: 2px solid #f24c21;
    padding: 9px;
    opacity: 1;
}

.cadre img
{
    width: 100%;
    height: auto;
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
/* .text-1
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
   
} */

@media only screen and (max-width: 600) {
    .logo{
        width: 100px;
    }
    .slogan{
        font-size: 16px;
    }
}

 </style>