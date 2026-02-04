@extends('citech.layouts.app')

@section('title', 'info')

@section('content')



<section class="row block-text" style="margin-top:100px">
   <div class="col-md-12 pl-10 m-10 ">
     <div class="w-[88%] h-[70px]  bg-[#323246] text-center p-2" id="ebe">
         <a href="bachelor_finance" class="color">
            BACHELOR 3 FINANCE 
            <br>
            Analyste Financier
         </a> <br>      
     </div> <br>
     <div class="w-[88%] h-[70px] bg-[#323246] text-center p-2" id="ebe">
        <a href="logistique" class="color">
         BACHELOR 3 LOGISTIQUE
         <br>
         Responsable Logistique
      </a> 
     </div>
    </div>
</section>

<style>
   #ebe
   {
      color: white;
      font-size: 1.1rem;

      a:hover
      {
         color: #686D76;
         transition: ease-in 0.5s;
      }
   }
</style>
   
@endsection
