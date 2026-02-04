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
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME COMPLEXITE</h3></b>
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
            <p><a href="programme_2">Programmme</a></p>
           </div>
         <div class="row_4">
        <p style=" font-weight: bolder;"><a href="eme_generaliste">Retour</a> </p>
        </div>
    </div>
       <div class="row_4">
          <p><a href="conditions_2">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_2">Modalités</a></p>
        </div>
     </div>
        
        <div class="box_3">
            <div class="row_3 text-center">
                <P><a href="inscription_eme_generaliste">EME COMPLEXITE spécialité
                        Ingénierie</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="sign_eme_generaliste">EME COMPLEXITE spécialité
                   Développement Durable</a></P>
            </div>
        </div>
     </div>

     <!-- espace d'information -->
    

     <!-- cadre d'information -->
       <div class="cadre">
        <strong>
          <span class="text-[13px] pl-5 decoration-[#292b28]"><u>Frais de dossier et de scolarité :</u> <span class="text-[17px]">le coût total de la scolarité est de 2775€</span></span>
        </strong>
         <br>
         <br>
         <br>
         <div class="pl-5">
          <span><u>Acompte pré-inscription :</u> <strong>305€ </strong>à verser dès l’acceptation de votre candidature. Ce versement est nécessaire pour la validation de votre admission. 
          Cette somme ne sera pas restituée si vous décidez de ne pas poursuivre. 
          </span>
          </div>
          <span class="pl-5"><u>Solde de la scolarité :</u>à verser au plus tard la veille du début des cours soit <strong>2470€</strong> </span>
          <br>
          <br>
          <br>
          <div class="pl-5">
           <span><u><strong>Facilités</u> : possibilité d’échéancier pour le paiement du solde de la scolarité :</strong>
                  : sur demande et engagement à respecter les échéances (attention si l'échéancier n'est pas respecté c'est la radiation sans remboursement des sommes déjà versées) :
                  <br>
                  <span><strong>1068€</strong> à verser au plus tard la veille du début des cours  et 1372€  à verser au plus tard 60 jours après le début des cours</span>
          </span>
          </div>
          <br>
          <br>
          <div class="pl-5">
            <span><u><b>Financements</b></u></span>
            <br>
            <span>Sur demande expresse et motivée des facilités de paiement peuvent être envisagées par CAF  (admission<a class="text-[#1581BF]"href="mailto:ismparis@blearn.net">@blearn.net</a>)</span>
          </div>

           <br>
           <div class="pl-5">
           <span><strong>Important : l’inscription ne sera considérée comme définitive qu’au paiement total des frais de scolarité. En tout état de cause, ne pourra être admis à la diplomation que l’auditeur ayant soldé ses frais de scolarité.</strong></span>
            </div>
     </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 200%;

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
        color: #f24c21;
        transition: ease-in 0.4s;
        
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
    height: 500px;
    width: 88%;
    margin-top: 15px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection