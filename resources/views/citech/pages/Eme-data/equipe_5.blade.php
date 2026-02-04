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
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME DATA</h3></b>
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
            <p><a href="programme_5">Programmme</a></p>
           </div>
         <div class="row_4">
        <p style=" font-weight: bolder;"><a href="eme_data">Retour</a> </p>
        </div>
    </div>
       <div class="row_4">
          <p><a href="conditions_5">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_5">Modalités</a></p>
        </div>
     </div>
        
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row-3 text-center">
                <P><a href="register_eme_data">EME1 Data</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="sign_eme_data">EME2 DATA spécialité Ingénierie Data</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="ia_eme_data">EME2 DATA spécialité Intelligence Artificielle</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="tal_eme_data">EME2 DATA spécialité Traitement Automatique du Langage</a></P>
            </div> 
        </div>
     </div>

     <!-- espace d'information -->
    

     <!-- cadre d'information -->
       <div class="cadre">
        <div class="pl-5">
            <h1 style="font-size: 20px;">
                <strong>
                Equipe pédagogique de l’EME DATA
                </strong>
            </h1>
            <br>
            <div>
                 <img src="{{ asset('assets/upload/img/prof1.png') }}" alt="">
            </div>
        </div>
                  <br>
                  <br>
                     <span class="pl-5"><b>Alain RIVIERE  </b></span>
                     <br>
                     <br>
                     <span class="pl-5">Professeur des Universités,</span>
                     <br>
                     <br>
                     <span class="pl-5">Diplômé de l’Ecole normale supérieure, Paris-Saclay</span>
                     <br>
                     <br>
                     <span class="pl-5">Docteur en physique, CentraleSupélec Paris</span>
                       <br>
                       <br>
                          <span class="pl-5"><b>Eric BAYLE</b>
                           HEC Paris, DSCG, Directeur Financier, spécialiste en Ingénierie financière
                          </span>
                            <br>
                            <br>
                            <div class="pl-5">
                                 <span ><b>Xiayang ZHOU</b></span>
                                 <br>
                                 <br>
                                 <span>Diplômé de l’Ecole Polytechnique (France)</span>
                                 <br>
                                 <br>
                                 <span>Master Data Sciences, Université Paris-Saclay, France</span>
                           </div>
                               <br>
                               <br>
                                 <span class="pl-5"><b>Minglei JIANG</b></span>
                               <br>
                               <br>
                               <div class="pl-5">
                                 <span>Diplômé de l’Ecole Centrale Paris</span>
                                 <br>
                                 <br>
                                 <span>Consultant dans l'industrie des logiciels informatiques.</span>
                           </div>
                           <br>
                           <br> 
                             <span class="pl-5"><b>Sofia ZIDANE</b></span>
                             <br>
                             <br>
                             <div class="pl-5">
                                <span>Sofia Zidane est une experte en traitement automatique du langage (T.A.L.) et en intelligence artificielle (IA) basée à Paris, France. 
                                    Elle a travaillé en tant que consultante indépendante, offrant des conseils aux entreprises sur l'implémentation de projets data, NLP et IA. 
                                    Avant cela, elle a occupé divers postes, notamment en tant que Product Owner chez Herdia et NLP Analyst chez Semantiweb. 
                                    Sofia est diplômée d'un Master en Ingénierie Linguistique (NLP) de l'INALCO, Paris, et elle détient plusieurs certifications, 
                                    dont celle en Intelligence Artificielle et en Gestion de projets informatiques du Conservatoire National des Arts et Métiers.
                                </span>
                             </div>
       
       </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 1600px;

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
    color: #151515;
    margin-top: 195px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection