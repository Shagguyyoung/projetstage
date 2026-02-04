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
            <h1 style="font-size: 20px;"><strong><u>Programme de l’EME DATA </u></strong></h1>
        </div>
        <br>
        <br>
        <span class="pl-5 text-[20px]"><b>EME1 Data (6 mois) </b></span>
        <br>
        <span class="pl-5">Module 1 : Les outils de base  & l'utilisation de Python</span>
        <br>
        <span class="pl-5">Module 2 : Systèmique (I)</span>
        <br>
        <span class="pl-5">Module 3 : Systèmique (II)</span>
        <br>
        <span class="pl-5">Module 4 : Les bases de données</span>
        <br>
        <span class="pl-5">Module 5 : Mathématiques pour Data science
        </span>
        <br>
        <span class="pl-5">Module 6 : Pratique écrite de l’Anglais </span>
        <br>
        <br>
           <span class="pl-5 text-[20px] font-[700]"><b>EME2 Data (15 mois) </b></span>
           <br>
           <br>
       <div class="image pl-5">
        <img src="{{ asset('assets/upload/img/data-image.jpeg') }}" alt="">
       </div>
       <br>
       <br>

         <span class="pl-5"><b>EME2 DATA, 3 spécialités</b></span>
         <div class="pl-5">
            <span class="text-[15px] font-[oblique]">S'il y a bien un domaine où l’esprit « ingénieur » est et sera nécessaire c’est bien dans le domaine de la Data science. Désormais, 
                il n’y a plus une seule activité humaine où les Big Data  ou l’Intelligence Artificielle ne sont pas un enjeu, de la Santé au Marketing, de l’assurance à la distribution, de l’informatique à la banque. 
                Face à cette profusion par la nature, par la complexité et par la quantité des données et des situations, il faut acquérir des compétences nouvelles et efficientes, et être en mesure de répondre à ces 3 questions essentielles : 
                Comment préparer et stocker les données ? Comment traiter les données ? Comment utiliser les données ? Et par-delà les outils à maîtriser qu’ils soient statistiques ou informatiques, c’est bien de ce savoir-faire que nos « Maîtres Ingénieurs » disposeront avec notre Executive Master of Engineering DATA avec 3 spécialisations disponibles,
                 Ingénierie Data, Intelligence Artificielle (I.A.) ou Traitement Automatique des Langues (T.A.L.).</span>
         </div>
         <br>
         <br>
          <span class="pl-5"><b>Spécialité Ingénierie Data</b></span>
          <br>
          <div class="pl-5">
            <span class="text-[15px] font-[oblique]">Les Maîtres-ingénieurs en données construisent et entretiennent des pipelines de données, en stockant les données importantes de manière à les rendre accessibles ultérieurement. 
                Cette infrastructure est nécessaire pour tous les autres aspects de la Data science. 
                L’ingénieur en données développe, construit, entretient et teste l’architecture, y compris les bases de données et les systèmes de traitement à grande échelle. 
                Les processus d’ensemble que les Maîtres-ingénieurs construisent sont ensuite utilisés pour la modélisation, 
                l’extraction, l’acquisition et la vérification.</span>
                <br>
                <span>Le Computer Engineer est principalement chargé de concevoir,
                     construire, tester et maintenir des systèmes de gestion de données.
                      Cela permet de générer des données applicables à des projets spécifiques. 
                      Pour ce faire, les ingénieurs doivent avoir une solide maîtrise des langages de script courants. 
                      Ils doivent résoudre des problèmes complexes au niveau du codage.
Notez que les Maîtres-ingénieurs de données sont les constructeurs des systèmes de données, 
et non pas ceux qui les exploitent pour obtenir des informations. Le Maîtres-ingénieur de données travaille donc davantage « en coulisses » 
et doit être à l’aise avec les autres membres de l’équipe qui produisent des solutions commerciales à partir de ces données.</span>
              <br>
              <span>En outre, les ingénieurs de données doivent également être capables de travailler efficacement en collaboration avec d’autres experts en données et 
                de communiquer les résultats et les recommandations à des collègues sans formation technique</span>
         </div>
         <br>
         <span class="pl-5"><b>Spécialité Intelligence Artificielle ( I.A. )</b></span>
         <br>
         <div class="pl-5">
            <span class="text-[15px] font-[oblique]">Le Maîtres-ingénieur en intelligence artificielle est chargé de la conception et de la création de programmes,
                 d'applications ou systèmes capables de raisonner comme l'Homme mais dénués de toute émotion, pouvant conduire à l'erreur chez l'être humain. 
                 Travaillant sur des projets spécifiques, le Maîtres-ingénieur IA doit résoudre des problèmes complexes pour lesquels l'informatique classique atteint ses limites. 
                 Le Maîtres-ingénieur en intelligence artificielle doit alors fournir un travail de recherche long et fastidieux afin d'analyser et comprendre comment le cerveau humain fait une chose et
                  comment il peut le retranscrire via la conception d'un programme informatique. Les champs d'application sont multiples, allant de la domotique à la bio-informatique, de la robotique à l'automatisation, de l'analyse prédictive à la production industrielle...
                   Il pourra aussi bien développer des systèmes experts que des logiciels d'aide à la décision, ou encore des interfaces hommes-machines intuitives.
                    Grâce à son expertise, le Maîtres-ingénieur en intelligence artificielle va transformer la machine en un véritable collègue de travail en instaurant une relation de collaboration basée sur l'aide à la décision,
                     de façon rationnelle et logique.
            </span>
         </div>
          <br>
            <span class="pl-5"><b>Spécialité Traitement Automatique des Langues ( T.A.L. )</b></span>
            <br>
            <div class="pl-5">
            <span class="text-[15px] font-[oblique]">Un iMaîtres-ngénieur T.A.L. est un acteur important de la révolution technologique d'aujourd'hui. 
                C'est un spécialiste qui allie l'intelligence artificielle (IA) et la linguistique pour créer des solutions de communications novatrices. 
                Avec l'évolution de l'IA et les technologies numériques, la demande pour des professionnels aptes à comprendre et à façonner le langage humain n'a jamais été aussi importante. 
                Le profil d'un iMaîtres-ngénieur NLP (Natural Language Processing ou Traitement automatique du langage nature) correspond à cette demande avec sa capacité à effectuer le traitement et l'analyse des données en langage naturel. 
                Il se sert de plusieurs éléments pour développer des programmes avec la faculté d'interpréter les langues humaines. À titre d'exemple l'IA, les sciences de l'information, de l'informatique et des compétences linguistiques.
                 Grâce aux compétences d'un ingénieur NLP, il est possible de réaliser la majorité de nos tâches quotidiennes avec nos appareils mobiles.
            </span>
            <br>
            <span class="pl-5">Le métier de Maîtres-ingénieur NLP révolutionne le monde qui consiste notamment à développer des appareils et des systèmes pouvant comprendre le langage humain. 
                Cet expert se charge aussi de fragmenter le langage en une brève structure et basique. Ce Maîtres-ingénieur œuvre pour interpréter la relation entre les formes.
                 Il se charge aussi d'analyser le fonctionnement des éléments structurels pour générer du sens. Par ailleurs, 
                 il se sert de ces outils linguistiques pour créer des ordinateurs dont la tâche principale implique le langage humain, par exemple Siri d'Apple ou Alexa d'Amazon.
            </span>
            <br>
            <span class="pl-5">Les besoins sont réels également dans des secteurs aussi variés que les Métiers de l'alphabétisation et de la lutte contre l'illettrisme, 
                dans la Police scientifique en expertise en phonétique et en transcription de la parole, dans les Laboratoires de recherche (conception de moteurs de recherche,
                 de logiciel de traduction automatique) mais aussi toute structure publique ou privée, nationale ou internationale ayant pour cœur d'activité l'association de l'informatique et de la linguistique.
            </span>
         </div>
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