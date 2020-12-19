<?php

namespace App\Http\Controllers;





use App\Mail\SendMail;
use App\News;

use Illuminate\Http\Request;
use App\Models\Management;
use App\Models\ZavodsGallery;
use App\Models\ManufGallery;
use App\Models\Structure_gallery;
use Illuminate\Support\Facades\Mail;


class FrontendController extends Controller
{


//MS
//

  public function home(){
        return view('frontend.home.home');
    }
    public function about_company(){
        return view('frontend.about.about');
    }
    public function state_symbols(){
        return view('frontend.state_symbols.state_symbols');
    }
    public function news(){
        $newsAll = News::get();
        return view('frontend.news.news')->with(compact('newsAll'));
    }
    public function factory(){
        return view('frontend.factories.factory');
    }
    public function modern(){
        return view('frontend.modern.modern');
    }
    public function modern_gallery(){
        return view('frontend.modern.gallery');
    }
    public function tem_gallery(){
        return view('frontend.modern.tem_gallery');
    }
    public function manufgallery(){
        return view('frontend.manufactures.gallery');
    }
    public function tender(){
        return view('frontend.tenders.tender');
    }
    public function commity(){
        return view('frontend.commities.commity');
    }
    public function union_teens(){
        return view('frontend.commities.union_teens');
    }
    public function prices(){
        return view('frontend.price.price');
    }
    public function structure(){
        return view('frontend.structures.structure');
    }
    public function page_pres(){
        return view('frontend.interactive.page-pres');
    }
    public function yubiley(){
        return view('frontend.yubiley.yubiley');
    }
    public function sertifikat(){
        return view('frontend.sertifikat.sertifikat');
    }

    public function burchimullo(){
        return view('frontend.commities.burchimullo');
    }

    public function amz(){
      return view('frontend.about.amz');
    }

    public function lmz(){
      return view('frontend.about.lmz');
    }
    public function prof_commity(){
        return view('frontend.commities.prof_commity');
    }

    //manufactures

    public function factory1(){
        return view('frontend.factories.factories.factory1');
    }
    public function factory2(){
        return view('frontend.factories.factories.factory2');
    }
    public function factory3(){
        return view('frontend.factories.factories.factory3');
    }
    public function factory4(){
        return view('frontend.factories.factories.factory4');
    }
    public function factory5(){
        return view('frontend.factories.factories.factory5');
    }
    public function factory6(){
        return view('frontend.factories.factories.factory6');
    }
    public function factory7(){
        return view('frontend.factories.factories.factory7');
    }
    public function factory8(){
        return view('frontend.factories.factories.factory8');
    }
    public function factory9(){
        return view('frontend.factories.factories.factory9');
    }

    public function his_gallery(){
        return view('frontend.about.his_gallery');
    }
    public function open_source(){
        return view('frontend.open_source.open_source');
    }
    public function str(){
        return view('frontend.str.str');
    }


    //years
    public function year1(){
      return view('frontend.about.year.year1');
    }
    public function year2(){
      return view('frontend.about.year.year2');
    }
    public function year3(){
      return view('frontend.about.year.year3');
    }
    public function year4(){
      return view('frontend.about.year.year4');
    }
    public function year5(){
      return view('frontend.about.year.year5');
    }
    public function year6(){
      return view('frontend.about.year.year6');
    }
    public function year7(){
      return view('frontend.about.year.year7');
    }
    public function year8(){
      return view('frontend.about.year.year8');
    }
    public function year9(){
      return view('frontend.about.year.year9');
    }
    public function year10(){
      return view('frontend.about.year.year10');
    }
    public function year11(){
      return view('frontend.about.year.year11');
    }
    public function year12(){
      return view('frontend.about.year.year12');
    }
    public function year13(){
      return view('frontend.about.year.year13');
    }

//Structures
    public function structure1(){
      return view('frontend.structures.structures.structure1');
    }
    public function structure2(){
      return view('frontend.structures.structures.structure2');
    }
    public function structure3(){
      return view('frontend.structures.structures.structure3');
    }
    public function structure4(){
      return view('frontend.structures.structures.structure4');
    }
    public function structure5(){
      return view('frontend.structures.structures.structure5');
    }
    public function structure6(){
      return view('frontend.structures.structures.structure6');
    }
    public function structure7(){
      return view('frontend.structures.structures.structure7');
    }
    public function structure8(){
      return view('frontend.structures.structures.structure8');
    }
    public function structure9(){
      return view('frontend.structures.structures.structure9');
    }
    public function structure10(){
      return view('frontend.structures.structures.structure10');
    }
    public function structure11(){
      return view('frontend.structures.structures.structure11');
    }




    public function fit(){
        return view('frontend.commities.prof_commities.fit');
    }
    public function kitchen(){
        return view('frontend.commities.prof_commities.kitchen');
    }
    public function market(){
        return view('frontend.commities.prof_commities.market');
    }
    public function museum(){
        return view('frontend.commities.prof_commities.museum');
    }
    public function medicine(){
        return view('frontend.commities.prof_commities.medicine');
    }


}
