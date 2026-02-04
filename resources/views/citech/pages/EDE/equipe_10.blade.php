@extends('citech.layouts.app')

@section('title', 'ede')

@section('content')

<section>
    <!-- entête-->
 <div id="container">
        <div id="contain">
            <div class="colo-md-2 col-sm-8 " style="width: 150px" id="ims">
                <a href="">
                    <img src="{{ asset('assets/upload/img/logo_1.jpeg') }}" alt="">
                </a>
            </div>
            <div class="col-md-8 col-sm-8text-center" id="descript">
            <h1 style="color:#fff; font-weight: 700;"><b>EDE</b></h1>
            <span style="color: #fff;">Executive Doctoratium of Engineering</span>
        </div>
         <div class="col-md-2 col-sm-8" id="logo">
            <a href="">
                <img style="width: 150px" src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" alt="">
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
            <p><a href="programme_10">Programmme</a></p>
           </div>
         <div class="row_4">
        <p style=" font-weight: bolder;"><a href="ede">Retour</a> </p>
        </div>
    </div>
       <div class="row_4">
          <p><a href="conditions_10">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_10">Modalités</a></p>
        </div>
     </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row-3 text-center">
                <P><a href="#">EDE</a>
                </P>
            </div> 
        </div>
     </div>
     <!-- espace d'information -->
   
     <!-- cadre d'information -->
      <div class="cadre">
           <h1 class="pl-5 text-[25px]"><b>Une équipe pédagogique exceptionnelle dirigée le Professeur Alain RIVIERE</b>
           </h1> <br>
           <div>
            <img src="{{ asset('assets/upload/img/equipe_ede.png') }}" alt="">
           </div>
           <br>
           <div class="pl-5">
            <span><b>Alain RIVIERE</b> Directeur de l’EDE, Directeur d’ISAE-ISM Paris Executive Education, Professeur des Universités, 
                   Diplômé de l’Ecole normale supérieure, Paris-Saclay, Docteur en physique, CentraleSupélec Paris
           </span>
           </div>
           <span class="pl-5"><b>Annick ATSAIN,</b>Docteur en Sciences de Gestion de l'UFHB, 
           Vice-présidente Section Afrique de l' Association Francophone de Comptabilité.
          </span>
          <br>
          <span class="pl-5"><b>Gérard BAGLIN,</b>Professeur Émérite à HEC Paris, Auteur de 10 ouvrages sur la logistique, créateur de la plateforme e-Prélude
          </span>
          <br>
          <span class="pl-5"><b>Anne BRISSAUD,</b> Docteur en Psychologie sociale, Université Paul Valéry, Montpellier 3</span>
          <br>
          <span class="pl-5"><b>Minglei JIANG,</b>Diplômé de l’Ecole Centrale Paris, Consultant dans l'industrie des logiciels informatiques.</span>
          <br>
          <span class="pl-5"><b>Abdoulaye OUATTARA,</b>Doyen Honoraire de l’UFR SEG de l’Université Félix Houphouët Boigny</span>
          <br>
          <div class="pl-5"><b>Régis PLATEAUX,</b>
             Maître de Conférence, diplômé de l’Ecole Normale Supérieure de Cachan, Docteur de l’Ecole Centrale Paris, Agrégé de Génie mécanique.
              Responsable du parcours Mécatronique et Systems Complexes. Membre du laboratoire QUARTZ 
        </div>
        <span class="pl-5"><b>Xiayang ZHOU,</b>Diplômé de l’Ecole Polytechnique (France), 
        Master Data Sciences, Université Paris-Saclay, France
        </span>
      </div>
    
     
</section>
<style>

   
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 860px;

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
         font-size: 2.5rem;
         margin-top: 20px;
         font-style: italic;
         font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        

    }

    #contain
    {
        display: flex;
        justify-content: space-around;
        margin-left: 50px;
        margin-right: 50px;
        border-bottom: 1px solid #fff;

        
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
        padding-top: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        font-weight: bold;
        font-size: 15px;
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
    height: auto;
    width: 88%;
    color: #151515;
    margin-top: -90px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}




</style>

@endsection