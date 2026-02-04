@extends('citech.layouts.app')

@section('title', 'info')

@section('content')

<section>
    <!-- entête-->
 <div id="container">
        <div id="contain">
            <div class="col-md-2 col-sm-8 " style="width: 120px" id="ims">
                <a href="#">
                    <img src="{{ asset('assets/upload/img/logo_1.jpeg') }}" alt="">
                </a>
            </div>
            <div class="col-md-8 col-sm-8text-center" id="descript">
            <h1 style="color:#323246; font-style: italic; font-size: 35px">Executive Masterium of Engineering</h1>
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME FINANCE</h3></b>
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
        
        <div class="bg-row">
    <div class="box_1">
          <div class="row_4">
            <p><a href="programme_4">Programmme</a></p>
           </div>
         <div class="row_4">
        <p style=" font-weight: bolder;"><a href="eme_finance">Retour</a> </p>
        </div>
    </div>
       <div class="row_4">
          <p><a href="conditions_4">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_4">Modalités</a></p>
        </div>
     </div>
        
        <div class="box_3">
            <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row-3 text-center">
                <P><a href="sign_eme_finance_ingenerie">EME1 finance</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="sign_eme_finance">EME2 FINANCE option Finance d’entreprise</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="register_eme_finance">EME2 FINANCE option Ingénierie financière</a></P>
            </div> 
        </div>
        </div>
     </div>

     <!-- espace d'information -->
    

     <!-- cadre d'information -->
        <div class="cadre">
        <div class="pl-5">
            <h1 style="font-size: 25px;">
                <strong>
                CONDITIONS D'ADMISSIBILITE 
                </strong>
            </h1>
        </div>
                  <br>
                  <br>
                  <div class="pl-5">
                     <span><b><u>Soit une admission en EME1</u></b>(durée 9 mois, choisir "S'inscrire en EME1" sur la page d'accueil).
                     </span>
                  </div>
                     <br>
                     <br>
                     <div class="pl-5">
                        <span>
                            Pour pouvoir candidater vous devez être au moins titulaire d'un Licence (L3). Vous devez renseigner complétement votre dossier en ligne et vous assurez que les pièces jointes nécessaires sont bien téléchargées et lisibles. Vous ne pourrez pas passer le test d'admissibilité si ce n'est pas le cas.
                             A la fin de l’EME1 un jury décidera de votre admission en EME2.
                            <br>
                            <span>Possibilité de candidature par Validation des Acquis Professionnels (VAP) (*)</span>
                        </span>
                     </div>
                       <br>
                       <br>
                       <div class="pl-5">
                          <span><b><u>Soit une admission en EME2</u></b>
                            (durée de la formation 15 mois, choisir "S'inscrire en EME2 " sur la page d'accueil).
                            <br>
                            <br>
                            Pour pouvoir candidater vous devez être au moins titulaire d'un M1 (anciennement une Maîtrise) en sciences de gestion. Vous devez renseigner complétement votre dossier en ligne et vous assurez que les pièces jointes nécessaires sont bien téléchargées et lisibles. 
                            Vous ne pourrez pas passer le test d'admissibilité si ce n'est pas le cas. 
                          </span>
                          <br>
                          <span>Possibilité de candidature par Validation des Acquis Professionnels (VAP) (*)</span>
                          </div>
                            <br>
                            <br>
                  <span class="pl-5"><u>(*) Admissibilité par V.A.P. </u></span>
                               <br>
                               <div class="pl-5">
                                <span class="pl-5">Validation des Acquis de l'Expérience (nombre de places limitées) : Si vous êtes titulaire d'un diplôme inférieur à l’exigence d’accès ou non reconnu mais que vous avez une expérience professionnelle suffisante, vous pouvez toutefois candidater. 
                                    Votre dossier sera alors examiné par un Jury spécial qui décidera de vous permettre d'accéder.
                                </span>
                               </div>
       </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 1120px;

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
        justify-content: space-around;
        width: 80%;
        height: 220px;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }
    
    .box_1
    {
        display: block;
        padding-bottom: 5px;
        
    
        
    }

    .box_3
    {
        display: block;
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
        padding: 15px;
        margin-bottom: 15px;
        border: 2px solid #fff;
        border-radius: 8px;
        color: whitesmoke;
        background-color: #323246;
    }

    .row_3:hover
    {
        color: #fff;
        font-weight: bold;
        
    }

    .row-3
    {
        
        justify-content: center;
        align-items: center;
        width: 270px;
        height: 50px;
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 13px;
        border: 2px solid #fff;
        border-radius: 8px;
        color: #fff;
        background-color: #323246;
    }

    .row-3:hover
    {
          color: #fff;
          font-weight: bolder;
    }

    
/* ------espace information */
    .row_4
    {
        width: 250px;
        height: 50px;
        padding: 5px;
        margin-left: 36px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        color: #fff;
        margin-bottom: 10px;
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
        justify-content: space-between;
        margin
        
    }

.cadre 
{
    margin-left: 90px;
    height: auto;
    width: 88%;
    color: black;
    margin-top: 90px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection