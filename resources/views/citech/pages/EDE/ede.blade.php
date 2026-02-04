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
            <h3 style="color: #fff; font-size: 2.5rem">Executive Doctoratium of Engineering</h3>
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
                  <img class="w-[55%]" src="{{ asset('assets/upload/img/button-1.png') }}" alt="">
                </button>
            </div>
         </div>
        <div class="box_2">
            <img class="w-[180px]" src="{{ asset('assets/upload/img/complexe.jpeg') }}" alt="">
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
            <div class="row_3 text-center">
                <P><a href="#">EDE</a></P>
            </div>
        </div>
     </div>
     <!-- espace d'information -->
    <div class="bg-row">
      <div class="row_4">
        <p><a href="programme_10">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_10">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions_10">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_10">Modalités</a></p>
        </div>
     </div>
     <!-- cadre d'information -->
      <div class="cadre">
           <h1 style=" color: #0c2b4e;">Un Doctorat professionnel exigeant pour délivrer un véritable chef d’œuvre
           </h1> <br>
           <p style="font-size: medium; color: #0c2b4e;">L’environnement de plus en plus complexe ou évoluent les entreprises, les administrations et les institutions, contraint leurs dirigeants à prendre des décisions complexes. De véritables outils d’aide à la décision seraient d’un apport majeur pour ces derniers.  Ainsi, l’Executive Doctorate of Engineering ( EDE ) qui est un cursus prioritairement ouvert aux diplômés issus des différents partenariats de la Compagnie Académique de Formation (CAF),P ambitionne de former des diplômés capables de développer et d’apporter des réponses pertinentes à ce besoin fondamental.</p><br>
           
           <p style=" font-size: medium; color: #0c2b4e;">Cet EDE en 27 mois, conçu avec la méthode CAF, est un projet pluridisciplinaire en Blended Learning avec plusieurs étapes à respecter dans des délais impartis. Les doctorants travailleront en groupe sur une problématique réelle. A terme, ils devront produire un chef-d’œuvre numérique, le prototype d’un produit applicable à une problématique du futur. De nombreuses créations d’entreprises sont bien sûr attendues à l’issue de ces EDE</p>
           <br>
                 <h1 style=" color: #0c2b4e">Les modalités d'inscription</h1>
                 
                 <p>Pour vous inscrire, vous devez être titulaire au moins d'un diplôme (BAC+5) obtenu sous le format de CAF.
                    Exceptionnellement, d’autres candidatures pourront être étudiées et évaluées par la direction pédagogique de l’EDE.
                    Si vous êtes intéressé(e) cliquez sous <h2 style="color: #323246; font-weight: bolder;">"S'inscrire"</h2></p>
      </div>
    
     <div class="conteneur">
           <div class="row_contain">
                <div class="row_6"><p>S'inscrire</p></div>
                <div class="row_6"><p>Prochaine Rentrée </p></div>
                <div class="row_6"><p>Limite candidatures</p></div>
                <div class="row_5"><P><a href="#">EDE</a></P></div>
                <div class="row_6"><p>14 sept 2025</p></div>
                 <div class="row_6"><p>13 sept 2025</p></div>
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
                    <span><a href="#"><img class="w-[40px]" src="{{ asset('assets/upload/img/linkedin.png') }}" alt=""></a></span>
            </div>
         </div> 
         </div>
  </div>
</section>
<style>

   
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 170%;

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
        width: 80%;
        height: 200px;
        margin-left: 100px;
    }
    
    .box_1
    {
        display: flex;
        width: 400px;
        height: 300px;
        margin-left: 10px;
        
    }

    .box_2
    {
        width: 400px;
        height: 400px;
        margin-left: 10px;
    }

    .box_3
    {
        width: 400px;
        height: 300px;
        margin-left: 20px;
        margin-top: 30px;
       
    }

    .row_2
    {
        
        justify-content: center;
        align-items: center;
        padding: 5px;
        margin: 15px;
        border: 3px solid black;
        border-radius: 8px;
        color: black;
        background-color: #fff;
    }

    .row_2:hover
    {
        color: black#;
        font-weight: bolder;
    }

    .row_3
    {
        
        justify-content: center;
        align-items: center;
        padding: 5px;
        margin: 15px;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
        background-color: #0c2b4e;
    }

    .row_3:hover
    {
        color: #fff;
        font-weight: bolder;
    }


/* ------espace information */
    .row_4
    {
        width: 15%;
        height: 40px;
        padding: 5px;
        margin-left: 50px;
        text-align: center;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
        margin-right: 20px;
        background-color: #0c2b4e;
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
        justify-content: center;
        
        
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
    height: 30%;
    width: 85%;
    margin-top: 15px;
    margin-bottom: 0;
    border: 3px solid #0c2b4e;
    padding: 9px;
    background-color: #fff;
}

.cadre h1
{
    font-family: Arial, Helvetica, sans-serif;
    text-align: start;
    font-size: 1.4rem;
    font-weight: bolder;
    padding-right: 20px;
    
}

/* -----footer area------- */
.conteneur
{
    margin-left: 90px;
    display: flex;
}
.row_contain
{
     display: grid;
     grid-template-columns: 240px 240px 240px;
     margin-left: 5px;
     margin-top: 20px;  
}

.row_5
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
        background-color: #0c2b4e;
}

.row_6
{
        width: 200px;
        height: 50px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
        background-color: transparent;
}

 .row_5 a:hover
    {
        color: #fff;
        font-weight: bolder;
    }

 .row_6 p:hover
    {
        color: #fff;
        font-weight: bolder;
    }

    .social_contain
    {
        padding-top: 10px;
    }

    .social
    {
        display: flex;
        padding: 10px;
    }

    .network
    {
        padding-top: 20px;
        margin-left: 15px;
    }

    a img
    {
       background-image: white; 
    }

</style>

@endsection