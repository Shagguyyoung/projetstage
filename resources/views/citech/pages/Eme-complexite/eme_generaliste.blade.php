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
                  <img class="w-[70%]" src="{{ asset('assets/upload/img/button-1.png') }}" alt="">
                </button>
            </div>
         </div>
        <div class="box_2">
            <img class="w-[205px]" src="{{ asset('assets/upload/img/complexe.jpeg') }}" alt="">
        </div>
        <div class="box_3">
            <div class="row_2 text-center">
                <p><a href="#">S'inscrire</a></p>
            </div>
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
    <div class="bg-row">
      <div class="row_4">
        <p><a href="programme_2">Programmme</a></p>
      </div>
      <div class="row_4">
        <p><a href="equipe_2">L'Equipe pédagogique</a> </p>
      </div>
       <div class="row_4">
          <p><a href="conditions_2">Conditions</a></p>
        </div>
        <div class="row_4">
           <p><a href="modalites_2">Modalités</a></p>
        </div>
     </div>
     <!-- cadre d'information -->
       <div class="cadre">
        <h1>Face au défi de la complexité nous transmettons l’esprit « Ingénieur »</h1>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">La question était de savoir si l’esprit « ingénieur » nécessitait absolument une excellence scientifique. 
            N’était-il pas possible d’ouvrir cet univers à d’autres profils ? Pourquoi se poser la question ?
        </span>
        <br>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">ISAE-ISM Paris-Supméca, les Grandes Ecoles françaises ou les grandes universités anglo-saxonnes forment des « ingénieurs », 
            une véritable élite mais en petit nombre. 
            Or notre monde évolue si vite que le niveau de complexité à traiter demande que la compétence « ingénieur » dans tous les domaines d’activités et plus seulement dans l’industrie.
        </span> 
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Avec cet EME ouvert à tous les profils, nous proposons de former à la démarche « ingénieur », d’acquérir des techniques et méthodes utilisées par les ingénieurs,
             et bien entendu d’être en mesure de résoudre des problématiques complexes.
        </span>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Avec cet EME, vous saurez identifier un problème, le structurer, modéliser, simuler et proposer plusieurs solutions,
             et pour finir gérer la solution choisie dans son environnement complexe.
        </span>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Avec cet EME Complexité, vous deviendrez la solution pour votre entreprise, votre institution, 
            face aux situations de plus en plus complexes auxquelles elle aura à faire.
        </span>
        <br>
        <br>
        <span style="font-weight: bolder; font-size: 20px; margin: 8;">L'EME Complexité
        </span>
        <br>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">
            <img style="float: left; margin: 5px;" src="{{ asset('assets/upload/img/comp.jpeg') }}" alt="" width="382px" height="354px">
            <br>
            <br>
            Cet EME est dirigé par le Professeur Moncef HAMMADI, 
            grand spécialiste international en résolution et gestion des systèmes complexes( voir « L’équipe pédagogique » )
        </span>
        <span style="font-size: 13px; font-family: arial, helvetica, sans-serif;">Grâce à nos accords avec un grand nombre d’établissements d’enseignement supérieur en Europe comme sur le Continent Africain, 
            nous mettons à disposition des salles de regroupement pour nos auditeurs dans un grand nombre de pays.
        </span>
       
     </div>
    <!-- ***********FOOTER********** -->
     <div class="conteneur">
           <div class="row_contain">
                <div class="row_1"><p>S'inscrire</p></div>
                <div class="row_7">
                    <p>Prochaine Rentrée
                    </p>
                </div>
                <div class="row_7">
                    <p>
                        Limite candidatures
                 </p>
                </div>
                <div class="row_5">
                    <P><a href="inscription_eme_generaliste">EME COMPLEXITE spécialité
                                       Ingénierie</a>
                    </P>
                </div>
                <div class="row_6">
                    <P>
                        21 Octobre 2026
                    </P>
                </div>
                <div class="row_6">
                    <p>
                        19 Octobre 2026
                    </p>
                </div>
                 <div class="row_5">
                    <p><a href="sign_eme_generaliste">EME COMPLEXITE spécialité
                            Développement Durable
                        </a>
                    </p>
                </div>
                 <div class="row_6"><p>21 Octobre 2026</p></div>
                 <div class="row_6"><p>21 Octobre 2026</p></div>
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

<style>

   
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 180%;

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
        width: 80%;
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
        height: 120px;
        padding-right: -120px;
    }

    .box_3
    {
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
        padding: 5px;
        margin-top: 9px;
        border: 3px solid #fff;
        border-radius: 8px;
        color: whitesmoke;
        background-color: #323246;
    }

    .row_3:hover
    {
        color: #f24c21;
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


/* ------espace information */
    .row_4
    {
        width: 20%;
        height: 40px;
        padding: 5px;
        margin-left: 6px;
        text-align: center;
        border: 4px solid #fff;
        border-radius: 8px;
        color: #fff;
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
    height: 720px;
    width: 88%;
    margin-top: 15px;
    margin-left: 60px;
    border: 3px solid #0c2b4e;
    padding: 9px;
    opacity: 1;
    background-color: #fff;
}

  .cadre h1
{

    text-align: start;
    font-family: arial, helvetica, sans-serif; 
    font-weight: bolder;
    font-size: 20px;
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
        height: 60px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: #0c2b4e;
}

.row_6
{
        width: 200px;
        height: 60px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        border-radius: 8px;
        font-size: 12px;
        color: #fff;
        background-color: transparent;
}

.row_1
{
        width: 200px;
        height: 40px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid black;
        border-radius: 8px;
        color: black;
        font-size: 12px;
        background-color: #fff;
}

.row_1 p:hover
{
     color: black;
    font-weight: bolder;
}

.row_7
{
        width: 200px;
        height: 40px;
        margin: 5px;
        padding-top: 5px;
        text-align: center;
        border: 2px solid #fff;
        font-size: 12px;
        border-radius: 8px;
        color: #fff;
        background-color: ;
}
.row_7 p:hover
{
    color: #fff;
    font-weight: bolder;
}
 .row_5 a:hover
    {
        color: #f24c21;
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