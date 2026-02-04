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
            <h1 style="font-size: 15px;">
                <strong>
                Frais de dossier et de scolarité : 
                </strong>
            </h1>
            <span><b>EME1 : 1430€</b></span>
            <br>
            <br>
            <span><b>EME2 : 2775€</b></span>
        </div>
                  <br>
                  <br>
                  <div class="pl-5">
                     <span><b>Modalités</b></span>
                     <br>
                     <span><u>Acompte pré-inscription :</u>
                    <b>305€</b> à verser dès l’acceptation de votre candidature. Ce versement est nécessaire pour la validation de votre admission. 
                    Cette somme ne sera pas restituée si vous décidez de ne pas poursuivre
                    </span>
                    <br>
                    <br>
                     </div>
                       <div class="pl-5">
                          <span><u>Solde des frais de scolarité  </u>
                             à verser au plus tard la veille du début des cours  l'EME1   
                          </span>
                          <br>
                          <span>EME1 : <b>1125€ </b></span>
                          <br>
                           <span>EME2 : <b>2470€ </b></span>
                           <br>
                           <br>
                           
                          <span><b>Facilités pour paiement du solde de la scolarité :</b></span>
                          <span>sur demande et engagement à respecter les échéances (attention si l'échéancier n'est pas respecté c'est la radiation sans remboursement des sommes déjà versées)</span>
                          </div>
                  <span class="pl-5">-  50% à verser au plus tard la veille du début des cours </span>
                               <br>
                               <span class="pl-5">-  50% à verser au plus tard 60 jours après le début des cours</span>
                               <br>
                               <b class="pl-5">Financement</b>
                               <br>
                               <br>
                               <span class="pl-5">Sur demande, expresse et motivée et avec présentation de garanties, des facilités de paiement peuvent être envisagées par <b>CAF</b> <a href="mailto:safi@blearn.net">safi@blearn.net</a></span>
                               <br>
                               <br>
                               <div class="pl-5">
                                <span><b>Important : l’inscription au EME1 ou EME2 ne sera considérée comme définitive qu’au paiement total des frais de scolarité. 
                                En tout état de cause, ne pourra être admis en EME2 pour les EME1 et à la diplomation pour les EME2 que l’auditeur ayant soldé ses frais de scolarité de l’année en cours.
                                </b>
                                </span>
                               </div>
                    </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 1140px;

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
    margin-top: 90px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection