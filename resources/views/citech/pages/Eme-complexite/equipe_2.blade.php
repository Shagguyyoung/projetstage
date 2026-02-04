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
        <span style="font-size: 25px; font-family: arial, helvetica, sans-serif; font-weight: bolder;">Une équipe pédagogique exceptionnelle dirigée le Pr Moncef HAMMADI et codirigée par Haïdar</span>
        <br>
        <span style="font-size: 25px; font-family: arial, helvetica, sans-serif; font-weight: bolder;">El Ali pour la spécialité environnement</span>
       <div class="image">
        <img class="w-[100%]" src="{{ asset('assets/upload/img/Eq_en.png') }}" alt="">
       </div>
                 <br>
                  <br>
                 <br>
       <span><strong>Moncef HAMADI, Directeur de l'EME Complexité, Maître de Conférence</strong></span>
                <br>
       <span>Moncef Hamadi est Ingénieur en Génie Mécanique de l’ENIM, Monastir, Tunisie.</span>
                     <br>
       <span>Docteur de l’Ecole Centrale de Paris (ECP)</span>
                  <br>
       <span>Membre du laboratoire QUARTZ. Domaines de recherche et d’enseignement : Ingénierie système, 
        conception et optimisation multidisciplinaire, simulation multi-physique.</span>
                    <br>
                  <br>
        <span><strong>Haïdar El ALI,</strong>Président de l’Océanium, Ancien Ministre de l’Environnement, Ancien Ministre de la Pêche et des affaires maritimes du Sénégal. ( <a style="color: #1581BF;" href="https://www.brut.media/fr/nature/une-vie-haidar-el-ali-b4f382ba-3417-47c8-b629-1c02ac2ba0c0">https://www.brut.media/fr/nature/une-vie-haidar-el-ali-b4f382ba-3417-47c8-b629-1c02ac2ba0c0</a> ).
       </span>
                   <br>
               <br>
            <span><strong>Alain RIVIERE,</strong> Professeur des Universités, Recteur de CITech
           </span>
              <br>
              <br>
            <span><strong>Faida MHENNI, ,</strong> Maître de Conférence
            <br>
            Faida Mhenni est Ingénieur en Génie Electromécanique de l’ENIS de Sfax, Tunisie, Docteur de l’ENIS et Docteur de l’Ecole Centrale de Paris (ECP). Membre du laboratoire QUARTZ. Domaines de recherche et d’enseignement : Ingénierie systèmes, SysML, CATIA V6, Dymola (Modelica),
             Intégration de la sûreté de fonctionnement dans le processus d'ingénierie systèmes avec SysML.
           </span>
           <br>
           <br>
           <span><strong>Olivia PENAS, </strong> Maître de Conférence Olivia Penas est ingénieur et Docteur en Génie physique des Matériaux de l’INSA Lyon, France. Directrice</span>
           <br>
           <span>adjointe de la Recherche. Domaines de recherché et d’enseignement : Conception et intégration mécatronique, Ingénierie des Systèmes basée sur les</span>
           <br>
           <span>modèles, évaluation d’architectures 3D sous contraintes multiphysiques, Métriques de conceptions, Agilité, CPS/CPPS.  </span>
           <br>
           <br>
           <span><strong>Régis PLATEAUX,</strong>Maître de Conférence Régis Plateaux est diplômé de l’Ecole Normale Supérieure de Cachan, Docteur de l’Ecole Centrale Paris,</span>
           <br>
           <span>Agrégé de Génie mécanique. Responsable du parcours Mécatronique et Systems Complexes. Membre du laboratoire QUARTZ Domaines de recherche et d’enseignement : mécatronique, ingénierie système, conception agile, topologie et topologie algébrique.</span>
     </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 230%;

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
    height: auto;
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