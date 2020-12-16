<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booth;
use App\Brand;
use App\Category;
use App\ExpoCategory;
use App\Comment;
use App\Counter;
use App\Expo;
use App\ExpoComment;
use App\ExpoImage;
use App\ExpoVisit;
use App\Package;
use App\Page;
use App\Post;
use App\Setting;
use App\SiteVisit;
use App\Slider;
use App\Theme;
use App\User;
use App\UserCategory;
use Carbon\Carbon;
use DateTime;
use View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $categories = Category::all();
        $expo_categories = ExpoCategory::all();

        $pages = Page::where('status', 1)->get();

        $tel_record = Setting::where('key', 'tel')->first();
        $tel = $tel_record ? $tel_record->description : '';

        $address_record = Setting::where('key', 'address')->first();
        $address = $address_record ? $address_record->description : '';

        $logo_record = Setting::where('key', 'logo')->first();
        $logo = $logo_record ? $logo_record->description : '';

        $footer_record = Setting::where('key', 'footer')->first();
        $footer = $footer_record ? $footer_record->info : '';

        $visitor_benefit_record = Setting::where('key', 'visitor_benefit')->first();
        $visitor_benefit = $visitor_benefit_record ? $visitor_benefit_record->description : '';

        $facebook_record = Setting::where('key', 'facebook')->first();
        $facebook = $facebook_record ? $facebook_record->description : '';

        $twitter_record = Setting::where('key', 'twitter')->first();
        $twitter = $twitter_record ? $twitter_record->description : '';

        $instagram_record = Setting::where('key', 'instagram')->first();
        $instagram = $instagram_record ? $instagram_record->description : '';

        $telegram_record = Setting::where('key', 'telegram')->first();
        $telegram = $telegram_record ? $telegram_record->description : '';

        View::share('tel', $tel);
        View::share('address', $address);
        View::share('logo', $logo);
        View::share('categories', $categories);
        View::share('expo_categories', $expo_categories);
        View::share('pages', $pages);
        View::share('footer', $footer);
        View::share('visitor_benefit', $visitor_benefit);
        View::share('facebook', $facebook);
        View::share('twitter', $twitter);
        View::share('instagram', $instagram);
        View::share('telegram', $telegram);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $menu = 'index';

        $sliders = Slider::all();
        $packages = Package::all();
        $comments = Comment::all();
        $brands = Brand::all();

        $exhibitor_benefit_record = Setting::where('key', 'exhibitor_benefit')->first();
        $exhibitor_benefit = $exhibitor_benefit_record ? $exhibitor_benefit_record->description : '';

        $visitor_benefit_record = Setting::where('key', 'visitor_benefit')->first();
        $visitor_benefit = $visitor_benefit_record ? $visitor_benefit_record->description : '';

        $counter = Counter::first();
        if ($counter) {
            $counter->diff = date_diff($counter->launch_day, new DateTime());
            if ($counter->launch_day < new DateTime()) {
                $counter->status = 0;
            }
        }

        $latestExpos = Expo::where('status', 1)->orderBy('id', 'desc')->take(6)->get();

        $visit_count = SiteVisit::where('day', '=', Carbon::today()->toDateString())->first();
        if ($visit_count && $visit_count != null) {
            $visit_count->count += 1;
        } else {
            $visit_count = new SiteVisit;
            $visit_count->day = Carbon::today()->toDateString();
        }
        $visit_count->save();

        $expoByYears = Expo::with('category')->where('status', 1)->orderBy('start')->get()->groupBy(function ($val) {
            return Carbon::parse($val->start)->format('Y');
        });

        return view('home.index', compact('brands', 'sliders', 'counter', 'packages', 'comments',  'exhibitor_benefit', 'visitor_benefit', 'latestExpos', 'expoByYears', 'menu'));
    }

    public function expos($id = null)
    {
        if ($id == null) {
            $menu = 'All Expos';
            $expos = Expo::where('status', 1)->get();
        } else {
            $category = ExpoCategory::find($id);
            $menu = 'Expos of ' . $category->title;
            $expos = Expo::where([['status', 1], ['expo_category_id', $id]])->get();
        }

        return view('home.expos', compact('expos', 'menu'));
    }

    public function expo($id)
    {
        $menu = 'expo';
        $expo = Expo::find($id);
        $booths = Booth::with('user')->where([['expo_id', $id], ['confirm', 1]])->get();
        $comments = ExpoComment::where([['status', '1'], ['expo_id', $id]])->get();
        $images = ExpoImage::where([['status', '1'], ['expo_id', $id]])->get();

        $visit_count = ExpoVisit::where([['day', '=', Carbon::today()->toDateString()], ['expo_id', $id]])->first();
        if ($visit_count && $visit_count != null) {
            $visit_count->count += 1;
        } else {
            $visit_count = new ExpoVisit;
            $visit_count->day = Carbon::today()->toDateString();
            $visit_count->expo_id = $id;
        }
        $visit_count->save();

        $booth_numbers = ["101", "102", "103", "104", "105", "106", "107", "108", "109", "201", "301", "401", "227", "327", "427", "202", "204", "206", "208", "220", "222", "224", "224", "226", "504", "506", "508", "510", "512", "514", "516", "518", "520", "522", "524", "526", "403", "405", "407", "409", "411", "413", "415", "417", "423", "425", "404", "406", "408", "410", "412", "414", "416", "418", "420", "422", "424", "426", "303", "305", "307", "309", "311", "313", "315", "317", "319", "319", "321", "323", "325", "304", "306", "308", "310", "312", "318", "322", "324", "326", "203", "205", "207", "209", "219", "221", "223", "225"];
        // $map_ids_collection = Booth::where('expo_id', $id)->select('booth_map_id')->get()->toArray();
        // $map_ids = array_column($map_ids_collection, 'booth_map_id');
        $booths_array = $booths->toArray();

        return view('home.expo', compact('booths', 'comments', 'images', 'expo', 'menu', 'booth_numbers', 'booths_array'));
    }

    public function expoMap($id, $map_id)
    {
        $booth = Booth::where([['expo_id', $id], ['booth_map_id', $map_id]])->get();
        if (count($booth) == 0) {
            return redirect('/expo/' . $id)->with('warning', 'expo not find');
        }
        $booth = $booth->first();
        return redirect('/booth/' . $booth->id)->with('success', 'go to expo');
    }

    public function expoComment(Request $request, $id)
    {
        $comment = new ExpoComment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->description = $request->description;
        $comment->expo_id = $id;
        $comment->save();

        return redirect('/expo/' . $id);
    }

    public function booth($id)
    {
        $menu = 'expo';
        $booth = Booth::with(['user', 'images'])->find($id);
        $theme = Theme::find($booth->theme_id);
        $booths = Booth::with('user')->where([['expo_id', $booth->expo_id], ['confirm', 1]])->get();

        $booth->visits = $booth->visits + 1;
        $booth->save();

        // return view($theme->theme_url, compact('booth', 'theme', 'menu'));
        return view('home.theme', compact('booth', 'theme', 'booths', 'menu'));
    }

    public function news()
    {
        $menu = 'news';
        $posts = Post::where('status', 1)->get();

        return view('home.news', compact('posts', 'menu'));
    }

    public function post($id)
    {
        $menu = 'news';
        $post = Post::find($id);

        return view('home.post', compact('post', 'menu'));
    }

    public function page($id)
    {
        $menu = $id;
        $page = Page::find($id);

        return view('home.page', compact('page', 'menu'));
    }


    public function companies($id = null)
    {
        $menu = '';

        if ($id == null) {
            $menu = 'All Companies';
            $userCategories = UserCategory::all(['id'])->groupBy('id')->keys('id')->toarray();
        } else {
            $userCategories = UserCategory::where('category_id', $id)->get(['id'])->groupBy('id')->keys('id')->toarray();
            $category = Category::find($id);
            $menu = 'Company of ' . $category->title;
        }

        $users = User::whereIn('id', $userCategories)->get();

        return view('home.companies', compact('users', 'menu'));
    }

    public function company($id)
    {
        $menu = '';
        $user = User::find($id);

        return view('home.company', compact('user', 'menu'));
    }

    public function calender()
    {
        $menu = 'calender';
        $expos = Expo::where('status', 1)->get();

        $events = "";
        $color = ['red', 'blue', 'green', 'yellow', 'black', 'orange', 'gray', 'Tomato', 'Pink', 'Purple'];
        $index = 0;

        foreach ($expos as $expo) {
            if ($expo && $expo != null) {
                $events .= '{';
                if ($expo->title != '') {
                    $events .= 'title:"' . $expo->title . '",';
                }
                if ($expo->start != '') {
                    $events .= 'start:"' . $expo->start . '",';
                }
                if ($expo->end != '') {
                    $events .= 'end:"' . $expo->end . '",';
                }
                $events .= 'backgroundColor:"' . $color[$index++ % 10] . '",';
                $events .= '},';
            }
        }

        return view('home.calender', compact('events', 'menu'));
    }

    public function history()
    {
        $menu = '';
        $expos = Expo::with('expoImages')->where([['status', 1], ['end', '<', Carbon::today()->toDateString()], ['history', 1]])->get();

        return view('home.history', compact('expos', 'menu'));
    }

    public function about()
    {
        $menu = '';
        $expoByYears = Expo::with('category')->where('status', 1)->orderBy('start')->get()->groupBy(function ($val) {
            return Carbon::parse($val->start)->format('Y');
        });

        return view('home.about', compact('expoByYears', 'menu'));
    }

    public function contact()
    {
        $menu = ''; // virtual-expo.com/contact
        return view('home.contact', compact('menu'));
    }
}
