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
            <h1 style="font-size: 20px; font-weight: 700;">
                <strong>
                L'équipe pédagogique de l’EME Finance
                </strong>
            </h1>
            <br>
            <div>
                 <img src="{{ asset('assets/upload/img/Capture_FN_Eq.png') }}" alt="">
            </div>
        </div>
                  <br>
                  <br>
                     <span class="pl-5"><b>Annick ATSAIN, </b>Docteur en Sciences de Gestion de l'UFHB, Vice-présidente Section Afrique de l' Association Francophone de Comptabilité.
                     </span>
                       <br>
                       <br>
                          <span class="pl-5"><b>Eric BAYLE</b>
                           HEC Paris, DSCG, Directeur Financier, spécialiste en Ingénierie financière
                          </span>
                            <br>
                            <br>
                            <div class="pl-5">
                  <span ><b>Olivier LEVYNE, </b>Professeur Affilié à HEC Paris, Docteur en Sciences Economiques, HDR en Sciences de Gestion, 
                  Qualifié Professeur des Universités, diplômé de l’ESCP</span>
                           </div>
                               <br>
               <span class="pl-5"><b>Sophie REYNAL,  </b> Présidente d’ALLIA Finance, Msc Management, Msc Corporate Finance d’HEC Paris</span>
                               <br>
                               <br>
                 <span class="pl-5"><b>Alain RIVIERE,  </b> Professeur des Universités, Directeur d’ISAE-ISM Paris Executive Education</span>
       
       </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 1000px;

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
          color: white;
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
    color: #37353E;
    margin-top: 90px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection