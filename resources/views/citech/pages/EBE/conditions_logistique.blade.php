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
         <a href="inscription_logistique" class="color">
            BACHELOR 3 LOGISTIQUE 
            <br>
            RESPONSABLE LOGISTIQUE
         </a> <br>      
     </div>
        </div>
       
</div>


     <!-- info-cadre -->
      <div class="bg-row">
      <div class="row_4">
        <p><a href="programme_logistique">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_logistique">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions_logistique">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_logistique">Modalités</a></p>
        </div>
     </div>
    
      <!-- **********grand cadre******* -->

     <div class="cadre">
           <h1 style=" color: #686D76; font-size: 20px;">CONDITIONS D'ADMISSIBILITE  
           </h1>
           <br>
           <h1 style=" color: #686D76; font-size: 14px;"><u>Admission en BACHELOR 3 Responsable Logistique</u>  
           </h1>
           <br>
           <sapn style="color: #686D76; font-size: 14px;">Pour pouvoir candidater vous devez être au moins titulaire d'un Bac+2 donc soit d'une licence 2, d'un BTS ou d'un DUT.
          </span>
             <br>
             <br>
            <sapn style="color: #686D76; font-size: 14px;">Ce Bachelor3 étant de spécialisation ou de réorientation, il est ouvert à tous les profils.
          </span>
          <sapn style="color: #686D76; font-size: 14px;">Vous devez renseigner complétement votre dossier en ligne et vous assurez que les pièces jointes nécessaires sont bien téléchargées et lisibles. 
             ne pourrez pas passer le test d'admissibilité si ce n'est pas le cas. 
          <sapn style="color: #686D76; font-size: 14px;">Si vous vous êtes titulaire d’un Bac mais que vous n’êtes pas titulaire d’un Bac+2 et que vous avez au moins 3 ans d’expérience professionnelle, vous pouvez quand même candidater grâce à la procédure VAP ( Validation des acquis professionnels ) .
             Attention le nombre de places par cette procédure est limitée.
          </span>
      </div>
      </div>

</section>

<!-- ********CSS STYLE********** -->
 <style>
    /* header */
    .contain
    {

        display: flex;
        justify-content: center;
        width: 85%;
        padding-top: 3px;
        height: 140px;
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
        width: 20%;
        height: 50px;
        padding-top: 10px;
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
        margin-left: 7px;
        justify-content: center;
    }

     /* -------grand cadre----- */

    .cadre 
{
    margin-left: 90px;
    height: 50%;
    width: 85%;
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