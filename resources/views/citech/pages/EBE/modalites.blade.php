@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section>
<div class="contain">
        <div class="log">
            <div class="text1 text-center">
                <span class="text-center;" style="color: #fff;">S'inscrire</span>
            </div>
             <div class="text2 text-center">
         <a href="inscription_finance" class="color">
            BACHELOR 3 FINANCE 
            <br>
            ANALYSTE FINANCIER
         </a> <br>      
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
           <p><a href="modalites">Modalités</a></p>
        </div>
     </div>

      <!-- **********grand cadre******* -->

     <div class="cadre">
           <h1 style=" color: #686D76; font-size: 20px;"><strong><u>Frais de dossier</u></strong>
           </h1>
           <br>
           <span style="color: #686D76; font-size: 13px;">Pour pouvoir candidater vous devez vous acquitter des frais de dossier d’un montant de <strong>10 000 Fcfa</strong>
          </span>
             <br>
             <br>
           <p class="list" style="text-align: justify;">
           <span style="font-size: 13px; font-family: Arial;">
            <u>Frais de scolarité du Bachelor 3 :</u>
                   <strong> 600 000 Fcfa</strong>
           </span>
           <br>
           <br>
           <span style="font-size: 13px; font-family: Arial;">
                <strong>CAF est agréée par le FDFP.</strong>
           </span>
           <span style="font-size: 13px; font-family: Arial;">
            <u>Acompte pré-inscription : </u>
              <strong>200 000 Fcfa </strong>à verser dès l’acceptation de votre candidature. Ce versement est nécessaire pour la validation de votre admission.
               Cette somme ne sera pas restituée si vous décidez de ne pas poursuivre
           </span>
           <br>
           <br>
           <span style="font-size: 13px; font-family: Arial;">
                     <u>Solde de la scolarité </u>(à verser au plus tard la veille du début des cours) : <strong> 400 000 Fcfa</strong>
           </span>
           <br>
           <br>
           <span style="font-size: 13px; font-family: Arial;">
            <u><strong>Financement</strong></u>
                      : sur demande, expresse et motivée,  des facilités de paiement peuvent être proposées par CAF
                            ( admissions@blearn.net )
           </span>
           <br>
           <br>
           <span>
           <u><strong>Important :</strong></u>
           </span>
           <br>
           <br>
            <span style="font-size: 13px; font-family: Arial;">
                     l’inscription au Bachelor 3 ne sera considérée comme définitive qu’au paiement de la totalité des frais de scolarité. En tout état de cause, 
                     ne pourra être admis à la diplomation que l’étudiant ayant soldé ses frais de scolarité de l’année en cours.
           </span>
           </p>
      </div>

</section>

<!-- ********CSS STYLE********** -->
 <style>
    /* header */
    .contain
    {

        display: flex;
        justify-content: center;
        align-items: center;
        width: 88%;
        padding-top: 3px;
        height: 150px;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }

    .text1 
    {
        justify-content: center;
        align-items: center;
        width: 400px;
        padding: 5px;
        margin: 15px;
        border: 1px solid white;
        font-weight: 500;
        background-color: transparent;
    }

    .text2
    {
        justify-content: center;
        align-items: center;
        font-weight: 500;
        width: 400px;
        padding: 5px;
        margin: 15px;
        border: 1px solid #fff;
        color: whitesmoke;
        background-color: #2f353e;
    }
    
.text1 span:hover
{
    color: gray;
    transition: ease-in 0.5s;
}   

.text2:hover
{
    color: gray;
    transition: ease-in 0.5s;
}

/* info-cadre */

.row_4
    {
        width: 19%;
        height: 50px;
        padding-top: 10px;
        margin-left: 25px;
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
        display: flex;
        margin: 7px;
        justify-content: center;
    }

     /* -------grand cadre----- */

    .cadre 
{
    margin-left: 90px;
    height: 75%;
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
    opacity: 1;
    font-size: 1.1rem;
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: x-large;
    padding-right: 20px;
}

span
{
    font-style: medium;
    font-size: 0.8rem;
    font-family: arial, helvetica, sans-serif;
    color: #686D76;
}

 </style>