<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    //
    public function bbs_programme() {
        return view('front.bbs_programme');
    }
    public function gestion_des_affaires_internationales() {
        return view('front.gestion_des_affaires_internationales');
    }
    public function management_et_gestion_hoteliere() {
        return view('front.management_et_gestion_hoteliere');
    }
    public function creation_entreprise_et_entrepreneuriat() {
        return view('front.creation_entreprise_et_entrepreneuriat');
    }
    public function marketing_international() {
        return view('front.marketing_international');
    }
    public function tourism_culture() {
        return view('front.tourism_culture');
    }
    public function management_du_luxe() {
        return view('front.management_du_luxe');
    }
    public function mba_programme() {
        return view('front.mba_programme');
    }
    public function mba_gestion_des_affaires_internationales() {
        return view('front.mba_gestion_des_affaires_internationales');
    }
    public function mba_management_et_gestion_hoteliere() {
        return view('front.mba_management_et_gestion_hoteliere');
    }
    public function mba_creation_entreprise_et_entrepreneuriat() {
        return view('front.mba_creation_entreprise_et_entrepreneuriat');
    }

    public function mba_marketing_international() {
        return view('front.mba_marketing_international');
    }
    public function mba_tourisme_culture() {
        return view('front.mba_tourisme_culture');
    }

    public function mba_management_du_luxe() {
        return view('front.mba_management_du_luxe');
    }
    public function dba_programme() {
        return view('front.dba_programme');
    }
    public function dba_management_et_creation_entreprise() {
        return view('front.dba_management_et_creation_entreprise');
    }
    public function dba_management_et_gestion_hoteliere() {
        return view('front.dba_management_et_gestion_hoteliere');
    }
    public function dba_marketing_digital_et_nouvelles_technologies() {
        return view('front.dba_marketing_digital_et_nouvelles_technologies');
    }
    public function dba_tourisme_culture() {
        return view('front.dba_tourisme_culture');
    }
    public function dba_developpement_economique_durable_local_et_international() {
        return view('front.dba_developpement_economique_durable_local_et_international');
    }
    public function dba_management_du_luxe() {
        return view('front.dba_management_du_luxe');
    }
    public function fle_Français_langue_étrangère() {
        return view('front.fle_Français_langue_étrangère');
    }
   
}
