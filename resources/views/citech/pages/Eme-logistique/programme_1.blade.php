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
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME LOGISTIQUE</h3></b>
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
            <p><a href="programme_1">Programmme</a></p>
           </div>
         <div class="row_4">
        <p style=" font-weight: bolder;"><a href="eme_logistique">Retour</a> </p>
        </div>
    </div>
       <div class="row_4">
          <p><a href="conditions_1">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_1">Modalités</a></p>
        </div>
     </div>
        
        <div class="box_3">
            <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row-3 text-center">
                <P><a href="register_eme_logistique">EME1 Logistique</a>
                </P>
            </div>
            <div class="row_3 text-center">
                <P><a href="register_eme_logistique_achat">EME2 LOGISTIQUE spécialité
                              Achats</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="register_eme_logistique_production">EME2 LOGISTIQUE spécialité
                             Logistique industrielle</a></P>
            </div>
             <div class="row_3 text-center">
                <P><a href="register_eme_logistique_distribution">EME2 LOGISTIQUE spécialité
                           Management de la Supply Chain</a></P>
            </div> 
        </div>
        </div>
     </div>

     <!-- espace d'information -->
    

     <!-- cadre d'information -->
       <div class="cadre">
        <div class="pl-5">
            <h1 style="font-size: 25px; font-weight: 700;"><strong>Programme de l’EME Logistique</strong></h1>
        </div>
        <br>
        <br>
        <span class="pl-5 text-[20px] font-[700]"><b>EME1 LOGISTIQUE (6 mois)</b></span>
        <br>
        <span class="pl-5">Module 1 : Gestion des opérations dans les entreprises</span>
        <br>
        <span class="pl-5">Module 2 : Systèmique I</span>
        <br>
        <span class="pl-5">Module 3 : Systèmique II</span>
        <br>
        <span class="pl-5">Module 4 : Ingénierie de la qualité</span>
        <br>
        <span class="pl-5">Module 5 : Optimisation des systèmes de production de biens ou de service
        </span>
        <br>
        <br>
        <span class="pl-5">Module 6 : Pratique écrite de l’Anglais </span>
        <br>
        <br>
           <span class="pl-5 text-[20px] font-[700]"><b>EME2 LOGISTIQUE (15 mois)</b></span>
           <br>
           <br>
            <div class="pl-5">
              <span>voici les programmes des 3 options : Achats ,  Logistique industrilelle (Production)  ou Management de la Supply Chain (Distribution) auquel se rajoutent un module PROJET et un module Pratique écrite de l'anglais spécialisé en Logistique.

              </span>
           </div>
        <br>
        <br>
       <div class="image pl-5">
        <img src="{{ asset('assets/upload/img/programme.jpeg') }}" alt="">
        <br>
        <img src="{{ asset('assets/upload/img/programme-1.jpeg') }}" alt="">
       </div>
     </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: auto;

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
    }

.cadre 
{
    margin-left: 90px;
    height: auto;
    width: 88%;
    margin-top: 195px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

</style>


@endsection