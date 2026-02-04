@extends('citech.layouts.app')

@section('title', 'logistique')

@section('content')

<section>
    <!-- *******HEADER******* -->
    <div class="header">
        <div class="logo1">
            <a href="#">
                <img class="w-[150px]" src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" alt="">
            </a>
        </div>
        <div class="texte1">
            <span style="color: #f24c21; font-size:30px; font-weight:bolder;">BACHELOR 3 LOGISTIQUE</span>
            <br>
            <span style="font-size:30px; font-weight:bolder; padding-left:20px; color: #0c2b4e;">Responsable Logistique</span>
        </div>
        <div class="logo1">
            <a href="#">
                <img class="w-[150px]" src="{{ asset('assets/upload/img/logo_abl_ok.png') }}" alt="">
            </a>
        </div>
        </div>
    <!-- ********MAIN****** -->
<div id="main">
        <div class="box_1">
          <div class="Espace">
            <div class="espace_2">
                <b>Espace Auditeurs</b>
            </div>
            <div class="col-3">
                <label for="name" id="name">Identifiant</label>
                <input type="text" name="identifiant_2" id="identifiant_2" required>
           </div>
            <div class="col-3">
                <label for="name" id="password">Mot de passe</label>
                <input type="password" name="mot de passe" id="password_2" required>
            </div>
            <div class="white">
                 <p class="text-center">Mot de passe oublié?<a href="#">Cliquez ici</a></p>
            </div>
            </div>
        </div>
        <div class="Bouton">
            <div class="bouton">
                <button type="submit">
                  <img class="w-[80%]" src="{{ asset('assets/upload/img/button-1.png') }}" alt="">
                </button>
            </div>
         </div>
        <div class="box_2">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/JUtx6sfELTo?rel=0&autoplay=1&loop=1&fs=1J" frameborder="0" controls>
                
            </iframe>
            </iframe>
            </video>
            
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row_3 text-center">
                <P><a href="inscription_logistique">BACHELOR 3 LOGISTIQUE
                     Responsable Logistique</a></P>
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

     <!-- ********CADRE****** -->

     <div class="cadre">
        <h1>Pourquoi un Executive Master of Engineering en Psychologie Sociale Appliquée ?</h1>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">C’est une raison simple et évidente : il n’y a pas un seul secteur de l’activité économique qui n’ait besoin de comprendre et d’utiliser la dimension humaine pour atteindre l’excellence. Actuellement, d’un côté le monde universitaire produit d’excellentes formations théoriques et la recherche en science du comportement a fait elle des progrès remarquables ces dernières décennies. Mais le constat est sans appel, la transmission rigoureuse de l’applicabilité aux activités économiques ne s’est pas faite. 
            C’est l’ambition de ce Master en Ingénierie Comportementale l’Executive Master of Engineering en Psychologie Sociale Appliquée.
        </span>
        <br>
        <br>
        <span style="font-weight: bolder; font-size: 12px;">Pr Alain RIVIERE</span>
        <br>
        <span style="font-size: 12px;">Recteur de CITech</span>
     </div>

      <!-- ********FOOTER******* -->

    <div class="conteneur">
           <div class="row_contain">
                <div class="row_6"><p>S'inscrire</p></div>
                <div class="row_6"><p>Prochaine Rentrée </p></div>
                <div class="row_6"><p>Limite candidatures</p></div>
                <div class="row_5"><P><a href="inscription_logistique">BACHELOR 3 LOGISTIQUE
                                              Responsable Logistique
                                        </a>
                                    </P>
                </div>
                <div class="row_7"><p>15 avril 2026</p></div>
                 <div class="row_7"><p>13 avril 2026</p></div>
          </div>
           <div class="social_contain">
               <div class="social">
                 <div class="wifi">
                    <span style="color: #fff;">Nous contacter</span>
                    <a href="#"><img class="w-[100px]" src="{{ asset('assets/upload/img/wifi.svg') }}" alt=""></a>
                 </div>
                 <div class="network">
                    <span><a href=""><img class="w-[40px]" src="{{ asset('assets/upload/img/facebook.png') }}" alt=""></a></span>
                    <br>
                    <span><a href="#"><img class="w-[40px]" src="{{ asset('assets/upload/img/twitter.png') }}" alt=""></a></span>
            </div>
         </div> 
         </div>
  </div>

</section>
<!-- *****STYLE****** -->

<style>
    /* -------HEADER------- */
    .header
    {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 82%;
        margin-left: 80px;
       
        
    }
/* --------MAIN------ */

#main
    {
        display: flex;
        width: 85%;
        height: 220px;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }
    
    .box_1
    {
        display: flex;
        width: 500px;
        height: 300px;
        margin-left: 10px;
        
    }

    .box_2
    {
        width: 80%;
        height: 100%;
       
        padding-right: -180px;
        margin-left: 10px;
    }

    .box_3
    {
        width: 250px;
        height: 300px;
        margin-top: 30px;
        margin-right: 40px;
       
    }

    .row_2
    {
        
        justify-content: center;
        align-items: center;
        width: 230px;
        padding: 5px;
        margin: 15px;
        border: 1px solid white;
        color: white;
        font-weight: 700;
        background-color: transparent;
    }

    .row_2:hover
    {
        color: gray;
        transition: ease 1.5s;
    }

    .row_3
    {
        
        justify-content: center;
        align-items: center;
        width: 230px;
        padding: 5px;
        margin: 15px;
        border: 1px solid #fff;
        color: whitesmoke;
        background-color: #2f353e;
    }

    .row_3:hover
    {
        color: gray;
        transition: ease-in 0.4s;
        
    }

    input
   {
    padding: 2px;
    width: 150px;
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
    padding-top: 10px;
    margin-top: 10px;
    margin-left: px;
    
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
    color: black;
    font-size: 20px;
    font-family:'rubik' sans-serif ;
}

.white
{
    width: 160%;
    color: #fff;
    font-weight: 700;
    padding-right: 90px;
    font-size: 12px;
}

.white a:hover
{
    transition:ease-in 1s;
    color: gray;
}
     
/* info-cadre */

.row_4
    {
        width: 268px;
        height: 50px;
        padding-top: 15px;
        padding-left: -15px;
        margin-left: -7px;
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
        transition: ease-in 0.4s;
    }

    .bg-row 
    {
        width: 100%;
        display: flex;
        margin-left: 10px;
        justify-content: center;
    }
/* ----------GRAND CADRE--------- */

  .cadre 
{
    margin-left: 90px;
    height: 40%;
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
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: small;
    padding-right: 20px;
}

/* -------FOOTER------ */
.conteneur
{
    margin-left: 50px;
    display: flex;
}
.row_contain
{
     display: grid;
     grid-template-columns: 230px 230px 230px;
     margin-left: 33px;
     margin-top: 10px;  
}

.row_5
{
        width: 220px;
        height: 70px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        color: #fff;
        background-color: #0c2b4e;
}

.row_6
{
        width: 220px;
        height: 50px;
        padding-top: 2px;
        text-align: center;
        border: 3px solid #f24c21;
        color: #686D76;
        background-color: transparent;
}

.row_7
{
        width: 220px;
        height: 70px;
        padding-top: 3px;
        text-align: center;
        border: 3px solid #f24c21;
        color: #686D76;
        background-color: transparent;
}

 .row_5 a:hover
    {
        color: #686D76;
        transition: ease-in 0.5s;
    }

    .social_contain
    {
        padding-top: 10px;
        padding-left: 15px;
    }

    .social
    {
        background-color: #f24c21;
        display: flex;
        padding: 10px;
    }

    .network
    {
        padding-top: 20px;
        margin-left: 15px;
    }
</style>