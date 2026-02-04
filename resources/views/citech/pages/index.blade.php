@extends('citech.layouts.app')

@section('title', 'Accueil')

@section('content')
 <div class="wsmenucontainer" style="min-width: 430px;">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <img class="logo" src="{{ asset('assets/upload/img/logo-1-remove.png') }}" alt="">
            </div>
            <span class="slogan">
                <i>Atteindre l'Excellence par le savoir-faire</i>
            </span>
        </div>
        <div class="marque">
            <marquee>
            "Rentrées avril 2025 : EME Finance, EME Logistique, EME Data et EME Psychologie Sociale Appliquée"
        </marquee>
        </div>
        
        <!-- ligne -->
        <div class="ligne">
          <div class="contain">
            <div class="espace">
                <b>Espace Auditeurs</b>
            </div>
            <div class="col-3">
                <label for="name" id="name">Identifiant</label>
                <input type="text" name="identifiant" id="" required>
            </div>
            <div class="col-3">
                <label for="name" id="password">Mot de passe</label>
                <input type="password" name="mot de passe" id="" required>
            </div>
            <div class="bouton">
                <button type="submit">
                  <img class="w-[39px]" src="{{ asset('assets/upload/img/btn.png') }}" alt="">
                </button>
            </div>
          </div>
        </div>
    </div> <br>
     

    <!-- logo-connexion -->
     <div class="col-5">
        <div class="rond">
            <div class="image">
                <a href="ebe">
                   <img src="{{ asset('assets/upload/img/ebe-1.jpeg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="rond">
            <div class="image">
                <a href="eme">
                <img src="{{ asset('assets/upload/img/eme-1.jpeg') }}" alt="">
                </a>
            </div>
        </div>
        <div class="rond">
            <div class="image">
                <a href="ede">
                   <img src="{{ asset('assets/upload/img/ede-1.jpeg') }}" alt="">
                </a>
            </div>
        </div>
     </div>

     <!-- cadre-texte -->
      <div class="cadre" id="textBox">
        <span>Le <strong>CAF Institute of Technology (CITech)</strong> a été créé pour être l’Université de Technologie propre à la Compagnie Académique de Formation (CAF), son pôle d’excellence.
             Il a l’ambition d’être pour le continent africain l’équivalent du MIT américain.</span>
             <br>
             <br>
             <span>Bâties sur un modèle pédagogique spécifique qui a prouvé depuis plus d’une décennie son efficacité et sa performance auprès des très grandes institutions universitaires françaises comme africaines, 
                les formations et diplômes proposés par CITech ont pour objectifs principaux :</span>
                <br>
                <span>Faire atteindre à tous les apprenants,
                     et non seulement à une partie d’entre eux, l’excellence dans les compétences visées.</span>
                   <br>
                   <span>Permettre à toutes et à tous, y compris ceux qui travaillent, 
                    d’accéder à ce qui se fait de mieux dans la spécialité choisie et cela à toute période de leur vie.</span>
                    <br>
                    <span>Sortir de nos formations avec des savoir-faire opérationnels et de niveau international.</span>
                    <br>
                    <span>Avoir la capacité de matérialiser le savoir-faire acquis à travers la création de produits, de services et d’entreprises.</span>
                    <br>
                    <span>Pour réussir ce défi, nous sommes accompagnés par des équipes d’enseignants d’exception, 
                        passionnés et reconnus internationalement parmi les meilleurs dans leurs spécialités.</span>
                        <br>
                        <br>
                        <span>CITech vous propose trois niveaux de formation :</span>
                        <ul>
                            <li>Executive Bachelor of Engineering – EBE (*)</li>
                            <li>Executive Master of Engineering - EME (**)</li>
                            <li>Executive Doctorate of Engineering - EDE (**)</li>
                            <br>
                            <br>
                            <li>(*) les titulaires d’un EBE ont accès aux EME </li>
                            <li>(**) en double diplomation avec la Grande Ecole d’ingénieurs française ISAE-ISM Paris pour les filières Finance, Logistique et Data.</li>
                        </ul>
                        <br>
                        <br>
                        <span>Si vous recherchez l’Excellence, 
                            tout en maintenant votre activité sans avoir à quitter votre lieu de résidence, vous êtes au bon endroit !</span>
                            <br>
                            <br>
                            <span>Professeur Alain RIVIERE, Recteur de CITe</span>
            
      </div>
      <button id="toggleBtn">Suite</button>
      
   
      <!-- social -->
       <p class="text-1">
        <i>Nous contacter</i>
       </p>

      <div class="social-media">
        <div class="social-logo"><img src="{{ asset('assets/upload/img/facebook.png') }}" alt=""></div>
        <div class="social-logo"><img src="{{ asset('assets/upload/img/whatsapp.png') }}" alt=""></div>
        <div class="social-logo"><img src="{{ asset('assets/upload/img/linkedin.png') }}" alt=""></div>
      </div> 
    </div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


*
{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.row
{
    display: flex;
    background: #f24c21;
    width: 88%;
    height: 230px;
    padding-bottom: 25px;
    margin-left: 95px;
    flex-direction: column;
    
}
.hidden
{
    display: none;
}

.container
{
   justify-content: center;
   align-items: center;
    

}
.col-md-12
{
    display: flex;
    justify-content: center;
    align-items: center;
    ;
}

.logo
{
    width: 190px;
    height:190px;
    border-radius: 50%
}
.slogan
{
    font-size: 25px;
    color: #fff;
    
    font-family: Arial, Helvetica, sans-serif;
    justify-content: center;
    align-items: center;
}

.marque
{
    width: 88%;
    margin-left: 100px;
    color: rgb(71, 71, 68);
    font-size: 15px;
}

.ligne
{
    display: inline-block;
    border-bottom: #f24c21 1.5px solid;
    padding-bottom: 2px;
    border-top: 1.5px solid #f24c21;
    width: 88%;
    margin-left: 90px;
}
.espace
{
    
    color: black;
    font-size: 10px;
    padding-left: 2px;
}
.contain
{
    display: flex;
    align-items: center;
    justify-content: space-around;
}

label
{
    display: block;
    font-size: 10px;
    padding: 5px;
    font-style: italic;
    color: #f24c21;
}

input
{
    border: 2px solid #f24c21;
}

.col-3
{
    margin-right: -190px;
    padding-left: px;
}
.bouton
{
    padding-right: 3px;
    padding-left: 3px;
    margin-top: 25px;
    position: relative;
}

button
{
    cursor: pointer;
    border: none;
    background-color: black;
    border-radius: 50%;
}

/* -------logo-connexion----- */
.col-5
{
   
    display: flex;
    padding: 5px;
    justify-content: space-around;
    align-items: center;
    flex-direction: wrap;

}
.rond
{
    
    width: 150px;
    height: 150px;
    cursor: pointer;
    border-radius: 50%;
}
/* ----cadre-texte------ */

/* .cadre */
/* { */
    /* margin-left: 95px; */
    /* margin-right: 0px;
    height: 60%;
    width: 83%;
    margin-top: 15px;
    margin-bottom: 0;
    border: 3px solid #f24c21;
    padding: 90px; */
/* } */
.cadre
{
  width: 85%;
  max-height: 60px;
  margin-left: 95px;
  color: #686D76;
  font-size: 13px;
  font-family: Arial, Helvetica, sans-serif;
  overflow: hidden;
  transition: max-height 0.4s ease;
  border: 3px solid #f24c21;
  padding: 10px;
}

#toggleBtn {
  
  margin-left: 950px;
  margin-top: 8px;
  padding: 6px 12px;
  background-color: transparent;
  color: #686D76;
  border: none;
  cursor: pointer;
}

#toggleBtn:hover {
  background: #2980b9;
}

/* -----social----- */
.text-1
{
    display: flex;
    justify-content: center;
    text-align: center;
    font-size: 1rem;
    font-family:   Arial, Helvetica, sans-serif;
    color: #f24c21;
    margin-top: 10px;
    margin-bottom: 5px;
}

.social-media
{
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 5px;
}

.social-logo
{
    width: 60px;
    height: 60px;
    border-radius: 60%;
    padding: 5px
   
}

@media only screen and (max-width: 600) {
    .logo{
        width: 100px;
    }
    .slogan{
        font-size: 16px;
    }
}
</style> 


<!-- ******JAVASCRIPT****** -->
<script>
    const textBox = document.getElementById("textBox");
    const button = document.getElementById("toggleBtn");

button.addEventListener("click", () => {
  if (textBox.classList.contains("open")) {
    textBox.style.maxHeight = "60px";      // refermer
    button.textContent = "Suite";          // changer texte du bouton
  } else {
    textBox.style.maxHeight = textBox.scrollHeight + "px"; // agrandir
    button.textContent = "Lire moins";     // changer texte du bouton
  }
  
  textBox.classList.toggle("open");
});

</script>
@endsection
