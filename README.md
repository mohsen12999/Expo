# Expo

-   `laravel new blog --auth`
-   `php artisan make:model Flight --migration`
-   `php artisan make:controller PhotoController --resource --model=Photo`

## user role

-   admin 10
-   exhibitor

## theme

-   https://www.templatemonster.com/landing-page-template/gravitas-beauty-expo-motocms-3-landing-page-template-75687.html
-   https://www.templatemonsterpreview.com/de/demo/75687.html?_ga=2.232668763.599846155.1595170577-1453530242.1595170577&_gac=1.57145432.1595170610.Cj0KCQjw3s_4BRDPARIsAJsyoLMsV4ktVuiYDvm-UTgH6n26-LzcZZWTEia37YSbGYwtQRFvZDUuvQkaAsyBEALw_wcB

*   https://laravel.com/docs/7.x/middleware
*   https://laravel.com/docs/7.x/controllers
*   https://laravel.com/docs/7.x/blade

## TODO list

-   [ ] Admin alert
-   [ ] home persian style and translate
-   [ ] calender for home
-   [ ] change theme layout
-   [ ] booth gif
-   [ ] write themes css
-   [ ] use modal for play video/image

## Sample user

admin@namayeshagh.ir
pvJDW6HsNuuVf4Z

user@namayeshagh.ir
ZYDYeHd9EZw34AQ

## localization

https://laravel.com/docs/7.x/localization
https://dev.to/fadilxcoder/adding-multi-language-functionality-in-a-website-developed-in-laravel-4ech
https://laraveldaily.com/multi-language-routes-and-locales-with-auth/
https://medium.com/@ultimateakash/how-to-create-multi-language-website-using-laravel-localization-29237f03393b

## mirror img

https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_flip_image

```css
img:hover {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
}
```

## video length

https://github.com/PHP-FFMpeg/PHP-FFMpeg#ffprobe

```php
$ffprobe = FFMpeg\FFProbe::create();
$ffprobe
    ->format('/path/to/video/mp4') // extracts file informations
    ->get('duration');
```

## pdf number of page

```php
// Imagick::identifyImage().
$im = new Imagick();
$im->pingImage('name_of_pdf_file.pdf');
echo $im->getNumberImages();
```

## Alert

```php
session()->flash('status', "Send Successfully");
return  redirect()->back();

@if (session()->has('status'))
<div class="alert alert-success">{{ session()->get('status') }}</div>
@endif

Route::post('user/profile', function () {
    // Update the user's profile...

    return redirect('dashboard')->with('status', 'Profile updated!');
});
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
```

file:///E:/Project/site/Expo/AdminLTE-2.4.18/pages/UI/general.html

## make helper for php storm

-   'barryvdh/laravel-ide-helper'

## slider

https://sachinchoolur.github.io/lightGallery/
https://sachinchoolur.github.io/lightGallery/demos/
https://sachinchoolur.github.io/lightGallery/demos/dynamic.html
https://sachinchoolur.github.io/lightGallery/demos/html5-videos.html
