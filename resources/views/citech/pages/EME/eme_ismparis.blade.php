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
            <b><h3 style="color: #fff; font-size: 2.5rem; font-weight: bolder; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">EME COMPLEXITE Généraliste</h3></b>
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
        
        <div class="box_3">
            <div class="row_3 text-center">
                <P><a href="#">Retour à l'acceuil</a>
                </P>
            </div>
        </div>
     </div>

     <!-- espace d'information -->
    

     <!-- cadre d'information -->
       <div class="cadre">
        <div class="container">
    
</div>
      
     </div>
    
</section>



<style>
    section
    {
        background-color: #f24c21;
        width: 100%;
        height: 200%;

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
        justify-content: end;
        width: 80%;
        margin-top: 20px;
        margin-left: 100px;
        background-color: #f24c21;
    }
    

    .box_3
    {
        display: flex;
        
    }

    .row_3
    {
        
        
        width: 150px;
        height: 40px;
        padding: 5px;
        margin-bottom: 15px;
        margin-right: -80px;
        border: 2px;
        border-radius: 5px;
        color: whitesmoke;
        background-color: #323246;
    }

    .row_3:hover
    {
        font-weight: bolder;
        font-size: 16px;
        
        
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
    margin-left: 190px;
    height: auto;
    width: 88%;
    opacity: 1;
}
/****************--------------FORM CSS---------*************** */
   

</style>

<!-- -------*******JAVASCRIPT*************--- -->



</style>


@endsection