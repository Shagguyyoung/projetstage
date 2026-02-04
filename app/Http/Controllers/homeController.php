<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
      public function index()
    {
        return view('citech/pages/index'); // home.blade.php
    }
      public function ebe()
    {
        return view('citech/pages/EBE/ebe'); // home.blade.php
    }
    

    //**EME */
     public function eme()
    {
        return view('citech/pages/EME/eme'); // home.blade.php
    }

    public function eme_ismparis()
    {
        return view('citech/pages/EME/eme_ismparis'); // home.blade.php
    }



    //**EDE */
    public function ede()
    {
        return view('citech/pages/EDE/ede'); // home.blade.php
    }

    //***COMPORTEMENTAL**** */
    public function inscription_eme()
    {
        return view('citech/pages/Eme-comportemental/inscription_eme'); // home.blade.php
    }

    public function inscription_psa()
    {
        return view('citech/pages/Eme-comportemental/inscription_psa'); // home.blade.php
    }


    //**EBE****** */
    public function inscription_finance()
    {
        return view('citech/pages/EBE/inscription_finance'); // home.blade.php
    }

    public function inscription_logistique()
    {
        return view('citech/pages/EBE/inscription_logistique'); // home.blade.php
    }

    //****COMPLEXITE**** */
    public function inscription_eme_generaliste()
    {
        return view('citech/pages/Eme-complexite/inscription_eme_generaliste'); // home.blade.php
    }

    public function sign_eme_generaliste()
    {
        return view('citech/pages/Eme-complexite/sign_eme_generaliste'); // home.blade.php
    }

    //****EME LOGISTIQUE****/
    public function register_eme_logistique()
    {
        return view('citech/pages/Eme-logistique/register_eme_logistique'); // home.blade.php
    }

    public function register_eme_logistique_achat()
    {
        return view('citech/pages/Eme-logistique/register_eme_logistique_achat'); // home.blade.php
    }

    public function register_eme_logistique_production()
    {
        return view('citech/pages/Eme-logistique/register_eme_logistique_production'); // home.blade.php
    }

    public function register_eme_logistique_distribution()
    {
        return view('citech/pages/Eme-logistique/register_eme_logistique_distribution'); // home.blade.php
    }

    //******EME FINANCE******/
    public function sign_eme_finance_ingenerie()
    {
        return view('citech/pages/Eme-finance/sign_eme_finance_ingenerie'); // home.blade.php
    }

    public function register_eme_finance()
    {
        return view('citech/pages/Eme-finance/register_eme_finance'); // home.blade.php
    }

    public function sign_eme_finance()
    {
        return view('citech/pages/Eme-finance/sign_eme_finance'); // home.blade.php
    }

    ///*****EME DATA*****/
    public function sign_eme_data()
    {
        return view('citech/pages/Eme-data/sign_eme_data'); // home.blade.php
    }

    public function register_eme_data()
    {
        return view('citech/pages/Eme-data/register_eme_data'); // home.blade.php
    }

    public function ia_eme_data()
    {
        return view('citech/pages/Eme-data/ia_eme_data'); // home.blade.php
    }

    public function tal_eme_data()
    {
        return view('citech/pages/Eme-data/tal_eme_data'); // home.blade.php
    }


    /////*****EBE** *//////
    public function bachelor_finance()
    {
        return view('citech/pages/EBE/bachelor_finance'); // home.blade.php
    }

    public function logistique()
    {
        return view('citech/pages/EBE/logistique'); // home.blade.php
    }


    ///////******EME COMPORTEMENTAL*****/////
        public function Emepsa()
    {
        return view('citech/pages/Eme-comportemental/Emepsa'); // home.blade.php
    }
/////*****EME COMPLEXITE******/
      public function eme_generaliste()
    {
        return view('citech/pages/Eme-complexite/eme_generaliste'); // home.blade.php
    }

    ////******EME LOGISTIQUE*******/
    public function eme_logistique()
    {
        return view('citech/pages/Eme-logistique/eme_logistique'); // home.blade.php
    }


    /////****EME FINANCE****/
    public function eme_finance()
    {
        return view('citech/pages/Eme-finance/eme_finance'); // home.blade.php
    }


    ////******EME DATA*******/
    public function eme_data()
    {
        return view('citech/pages/Eme-data/eme_data'); // home.blade.php
    }

    ///*******EBE*** */
    public function programme()
    {
        return view('citech/pages/EBE/programme'); // home.blade.php
    }

    public function equipe_pedagogique()
    {
        return view('citech/pages/EBE/equipe_pedagogique'); // home.blade.php
    }

    public function conditions()
    {
        return view('citech/pages/EBE/conditions'); // home.blade.php
    }

     public function modalites()
    {
        return view('citech/pages/EBE/modalites'); // home.blade.php
    }

    public function programme_logistique()
    {
        return view('citech/pages/EBE/programme_logistique'); // home.blade.php
    }

    public function equipe_logistique()
    {
        return view('citech/pages/EBE/equipe_logistique'); // home.blade.php
    }

    public function conditions_logistique()
    {
        return view('citech/pages/EBE/conditions_logistique'); // home.blade.php
    }

    public function modalites_logistique()
    {
        return view('citech/pages/EBE/modalites_logistique'); // home.blade.php
    }

    //******EME-COMPORTEMENTAL*** */
    public function programme_psa()
    {
        return view('citech/pages/Eme-comportemental/programme_psa'); // home.blade.php
    }
    
    public function equipe_psa()
    {
        return view('citech/pages/Eme-comportemental/equipe_psa'); // home.blade.php
    }

    public function conditions_psa()
    {
        return view('citech/pages/Eme-comportemental/conditions_psa'); // home.blade.php
    }

    public function modalites_psa()
    {
        return view('citech/pages/Eme-comportemental/modalites_psa'); // home.blade.php
    }

    ////******EME-COMPEXITE**** */
    public function programme_2()
    {
        return view('citech/pages/Eme-complexite/programme_2'); // home.blade.php
    }

    public function equipe_2()
    {
        return view('citech/pages/Eme-complexite/equipe_2'); // home.blade.php
    }

    public function conditions_2()
    {
        return view('citech/pages/Eme-complexite/conditions_2'); // home.blade.php
    }

    public function modalites_2()
    {
        return view('citech/pages/Eme-complexite/modalites_2'); // home.blade.php
    }


    // ******EME-LOGISTIQUE******//
    public function programme_1()
    {
        return view('citech/pages/Eme-logistique/programme_1'); // home.blade.php
    }

    public function conditions_1()
    {
        return view('citech/pages/Eme-logistique/conditions_1'); // home.blade.php
    }

    public function equipe_1()
    {
        return view('citech/pages/Eme-logistique/equipe_1'); // home.blade.php
    }

    public function modalites_1()
    {
        return view('citech/pages/Eme-logistique/modalites_1'); // home.blade.php
    }

    /////********EME-FINANCE*** */
    public function programme_4()
    {
        return view('citech/pages/Eme-finance/programme_4'); // home.blade.php
    }

    public function equipe_4()
    {
        return view('citech/pages/Eme-finance/equipe_4'); // home.blade.php
    }

    public function conditions_4()
    {
        return view('citech/pages/Eme-finance/conditions_4'); // home.blade.php
    }

    public function modalites_4()
    {
        return view('citech/pages/Eme-finance/modalites_4'); // home.blade.php
    }

    ////******EME-DATA**** */
    public function programme_5()
    {
        return view('citech/pages/Eme-data/programme_5'); // home.blade.php
    }

    public function equipe_5()
    {
        return view('citech/pages/Eme-data/equipe_5'); // home.blade.php
    }
    
    public function conditions_5()
    {
        return view('citech/pages/Eme-data/conditions_5'); // home.blade.php
    }

    public function modalites_5()
    {
        return view('citech/pages/Eme-data/modalites_5'); // home.blade.php
    }

    //************EDE */
    public function programme_10()
    {
        return view('citech/pages/EDE/programme_10'); // home.blade.php
    }

    public function equipe_10()
    {
        return view('citech/pages/EDE/equipe_10'); // home.blade.php
    }

    public function conditions_10()
    {
        return view('citech/pages/EDE/conditions_10'); // home.blade.php
    }

    public function modalites_10()
    {
        return view('citech/pages/EDE/modalites_10'); // home.blade.php
    }
}
