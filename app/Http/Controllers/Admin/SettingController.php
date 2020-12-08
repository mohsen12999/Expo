<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('check_admin');
    }

    public function index()
    {
        //
        $menu = 'setting';

        $tel_record = Setting::where('key', 'tel')->first();
        $tel = $tel_record ? $tel_record->description : '';

        $address_record = Setting::where('key', 'address')->first();
        $address = $address_record ? $address_record->description : '';

        $logo_record = Setting::where('key', 'logo')->first();
        $logo = $logo_record ? $logo_record->description : '';

        $footer_record = Setting::where('key', 'footer')->first();
        $footer = $footer_record ? $footer_record->info : '';

        $exhibitor_benefit = Setting::where('key', 'exhibitor_benefit')->first();

        $visitor_benefit = Setting::where('key', 'visitor_benefit')->first();

        $facebook_record = Setting::where('key', 'facebook')->first();
        $facebook = $facebook_record ? $facebook_record->description : '';

        $twitter_record = Setting::where('key', 'twitter')->first();
        $twitter = $twitter_record ? $twitter_record->description : '';

        $instagram_record = Setting::where('key', 'instagram')->first();
        $instagram = $instagram_record ? $instagram_record->description : '';

        $telegram_record = Setting::where('key', 'telegram')->first();
        $telegram = $telegram_record ? $telegram_record->description : '';

        return view('admin.setting', compact('tel', 'address', 'logo', 'footer', 'facebook', 'twitter', 'instagram', 'telegram', 'exhibitor_benefit', 'visitor_benefit', 'menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateTel(Request $request)
    {
        //
        $tel_record = Setting::where('key', 'tel')->first();
        if (!$tel_record) {
            $tel_record = new Setting;
            $tel_record->key = 'tel';
        }

        $tel_record->description = $request->tel;

        $tel_record->save();

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(Request $request)
    {
        //
        $address_record = Setting::where('key', 'address')->first();
        if (!$address_record) {
            $address_record = new Setting;
            $address_record->key = 'address';
        }

        $address_record->description = $request->address;

        $address_record->save();

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateLogo(Request $request)
    {
        //
        $logo_record = Setting::where('key', 'logo')->first();
        if (!$logo_record) {
            $logo_record = new Setting;
            $logo_record->key = 'logo';
        }

        if ($request->hasFile('pic')) {
            $file = $request->file('pic');

            $image_resize = ImageManagerStatic::make($file->getRealPath());
            $image_resize->resize(313, 84);

            $filename = '/img/Logo.png';
            $filename = str_replace(" ", "", $filename);
            $path = str_replace("index/public/img", "img", public_path($filename));
            $image_resize->save($path);

            $logo_record->description = $filename;
            $logo_record->save();
        }

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateFooter(Request $request)
    {
        //
        $footer_record = Setting::where('key', 'footer')->first();
        if (!$footer_record) {
            $footer_record = new Setting;
            $footer_record->key = 'footer';
        }

        $footer_record->info = $request->footer;
        $footer_record->save();

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    public function exhibitorBenefit(Request $request)
    {
        //
        $exhibitor_benefit_record = Setting::where('key', 'exhibitor_benefit')->first();
        if (!$exhibitor_benefit_record) {
            $exhibitor_benefit_record = new Setting;
            $exhibitor_benefit_record->key = 'exhibitor_benefit';
        }

        $exhibitor_benefit_record->title = $request->title;
        $exhibitor_benefit_record->description = $request->description;
        $exhibitor_benefit_record->other = $request->other;
        $exhibitor_benefit_record->url = $request->url;

        $exhibitor_benefit_record->save();

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    public function visitorBenefit(Request $request)
    {
        //
        $visitor_benefit_record = Setting::where('key', 'visitor_benefit')->first();
        if (!$visitor_benefit_record) {
            $visitor_benefit_record = new Setting;
            $visitor_benefit_record->key = 'visitor_benefit';
        }

        $visitor_benefit_record->title = $request->title;
        $visitor_benefit_record->description = $request->description;
        $visitor_benefit_record->other = $request->other;
        $visitor_benefit_record->url = $request->url;

        $visitor_benefit_record->save();

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }

    public function socialNetwork(Request $request)
    {
        if ($request->facebook && $request->facebook != '') {
            $facebook_record = Setting::where('key', 'facebook')->first();
            if (!$facebook_record) {
                $facebook_record = new Setting;
                $facebook_record->key = 'facebook';
            }
            $facebook_record->description = $request->facebook;
            $facebook_record->save();
        }

        if ($request->twitter && $request->twitter != '') {
            $twitter_record = Setting::where('key', 'twitter')->first();
            if (!$twitter_record) {
                $twitter_record = new Setting;
                $twitter_record->key = 'twitter';
            }
            $twitter_record->description = $request->twitter;
            $twitter_record->save();
        }

        if ($request->instagram && $request->instagram != '') {
            $instagram_record = Setting::where('key', 'instagram')->first();
            if (!$instagram_record) {
                $instagram_record = new Setting;
                $instagram_record->key = 'instagram';
            }
            $instagram_record->description = $request->instagram;
            $instagram_record->save();
        }

        if ($request->telegram && $request->telegram != '') {
            $telegram_record = Setting::where('key', 'telegram')->first();
            if (!$telegram_record) {
                $telegram_record = new Setting;
                $telegram_record->key = 'telegram';
            }
            $telegram_record->description = $request->telegram;
            $telegram_record->save();
        }

        return redirect('admin\setting')->with('success', 'Information has been modified');
    }
}
