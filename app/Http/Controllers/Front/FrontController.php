<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Contact;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PageResource;




class FrontController extends Controller
{
    public function index($slug = null){

        // $lang = App::getlocale();
        // $projects_page_slug = Seo::where('id', 1)->first();
        // if ($lang == "az") {
        //     $projects_page_slug = $projects_page_slug->slug_az;
        //     $page = Seo::where("slug_az", $slug)->first();
        // }
        // if ($lang == "en") {
        //     $projects_page_slug = $projects_page_slug->slug_en;
        //     $page = Seo::where("slug_en", $slug)->first();
        // }
        // if ($lang == "ru") {
        //     $projects_page_slug = $projects_page_slug->slug_ru;
        //     $page = Seo::where("slug_ru", $slug)->first();
        // }

        // $view = Seo::where('viewname','index')->first() ;
        // $view = Seo::where('route','index') ;
        // $current_route = Route::currentRouteName();
        // if (empty($current_route)) {
        //     $current_route = $route;
        // }
        // if ($page['parent_id'] > 0) {
        //     $page_id = $page['parent_id'];
        //     $current_route = "#";
        // } else {
        //     $page_id = $page['page_id'];
        // }
        // $fallback = config('app.locale');
        

        // $seos = Seo::orderby('id')->get();
        // $pagescollection = PageResource::collection($seos);
        // $pagess = $pagescollection->toArray($seos);
        // // $feeds = Profile::where('username', 'tuttobellobaku')->first()->refreshFeed(4);
        // $feeds = [];
    
        // return view('front.pages.index',compact(  'pagess', 'page', 
        // 'route' , 'current_slug','current_route' ,'page_id' , "fallback", 'project_slug', 'projects_page_slug','feeds', 'seos'));
    }

    public function getPage( $slug = "/" , $project_slug = null)
    {
        $contact=Contact::first();
        $lang = App::getlocale();
        // $projects_page_slug = Seo::where('id', 1)->first();
        if ($lang == "az") {
            // $projects_page_slug = $projects_page_slug->slug_az;
            $page = Seo::where("slug_az", $slug)->first();
        }
        if ($lang == "en") {
            // $projects_page_slug = $projects_page_slug->slug_en;
            $page = Seo::where("slug_en", $slug)->first();
        }
        if ($lang == "ru") {
            // $projects_page_slug = $projects_page_slug->slug_ru;
            $page = Seo::where("slug_ru", $slug)->first();
        }

        $view = $page['viewname'];
        $route = $page['route'];
        $current_route = Route::currentRouteName();
        if (empty($current_route)) {
            $current_route = $route;
        }
        if ($page['parent_id'] > 0) {
            $page_id = $page['parent_id'];
            $current_route = "#";
        } else {
            $page_id = $page['page_id'];
        }
        $fallback = config('app.locale');
        

        $seos = Seo::orderby('id')->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);
        // $feeds = Profile::where('username', 'tuttobellobaku')->first()->refreshFeed(4);
        $feeds = [];


        return view('front.pages.' . $view,)->
        with([
        'pagess' => $pagess, 'page' => $page, 
        'route' => $route, 'current_slug' => $slug, 
        'current_route' => $current_route, 
        'page_id' => $page_id,
        "fallback"=>$fallback, 'project_slug'=>$project_slug,
        'feeds'=>$feeds, 'seos'=>$seos,
       'contact'=>$contact  ]);

    }

    public static function getChildPage($parent_id): array
    {
        $seos = Seo::where('parent_id', $parent_id)->get();
        $pagescollection = PageResource::collection($seos);
        $childPages = $pagescollection->toArray($seos);

        return $childPages;
    }

    public static function getParentPage($page_id): array
    {
        $seos = Seo::where('page_id', $page_id)->get();
        $pagescollection = PageResource::collection($seos);
        $parentPages = $pagescollection->toArray($seos);

        return $parentPages;
    }






}
