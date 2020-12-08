<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Booth
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $pic
 * @property \App\Theme|null $theme
 * @property string $video
 * @property int $status
 * @property string $status_description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $package_id
 * @property int|null $theme_id
 * @property int|null $user_package_id
 * @property int|null $expo_id
 * @property int|null $user_id
 * @property-read \App\Expo|null $expo
 * @method static \Illuminate\Database\Eloquent\Builder|Booth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Booth query()
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereExpoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereStatusDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereThemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereUserPackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Booth whereVideo($value)
 */
	class Booth extends \Eloquent {}
}

namespace App{
/**
 * App\Brand
 *
 * @property int $id
 * @property string $pic
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property int $id
 * @property string $title
 * @property string $pic
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Expo[] $expos
 * @property-read int|null $expos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Comment
 *
 * @property int $id
 * @property string $pic
 * @property string $name
 * @property string $title
 * @property string $quote
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 */
	class Comment extends \Eloquent {}
}

namespace App{
/**
 * App\Counter
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property string|null $url_link
 * @property \Illuminate\Support\Carbon|null $launch_day
 * @property int $status
 * @property int|null $expo_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereExpoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereLaunchDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUrlLink($value)
 */
	class Counter extends \Eloquent {}
}

namespace App{
/**
 * App\Expo
 *
 * @property int $id
 * @property string $title
 * @property string $pic
 * @property \Illuminate\Support\Carbon|null $start
 * @property \Illuminate\Support\Carbon|null $end
 * @property int $type
 * @property string $type_desc
 * @property string $theme
 * @property string $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property int|null $user_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Booth[] $booths
 * @property-read int|null $booths_count
 * @property-read \App\Category|null $category
 * @method static \Illuminate\Database\Eloquent\Builder|Expo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Expo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereTypeDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Expo whereUserId($value)
 */
	class Expo extends \Eloquent {}
}

namespace App{
/**
 * App\Image
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $booth_id
 * @property int|null $product_id
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereBoothId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 */
	class Image extends \Eloquent {}
}

namespace App{
/**
 * App\Invoice
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $bankName
 * @property string $bankCode
 * @property int $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUserId($value)
 */
	class Invoice extends \Eloquent {}
}

namespace App{
/**
 * App\Message
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $file
 * @property int $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $ticket_id
 * @property int|null $sender_id
 * @property-read \App\User|null $sender
 * @property-read \App\Ticket|null $ticket
 * @method static \Illuminate\Database\Eloquent\Builder|Message newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Message query()
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Message whereUpdatedAt($value)
 */
	class Message extends \Eloquent {}
}

namespace App{
/**
 * App\Package
 *
 * @property int $id
 * @property string $pic
 * @property string $title
 * @property string $description
 * @property int $video_time
 * @property int|null $photo_count
 * @property int|null $catalog_page
 * @property string $color
 * @property int $type
 * @property int $status
 * @property int $duration
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCatalogPage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePhotoCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereVideoTime($value)
 */
	class Package extends \Eloquent {}
}

namespace App{
/**
 * App\Page
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereUpdatedAt($value)
 */
	class Page extends \Eloquent {}
}

namespace App{
/**
 * App\Post
 *
 * @property int $id
 * @property string $pic
 * @property string $title
 * @property string $abstract
 * @property string $description
 * @property int $status
 * @property int $subject_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereAbstract($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSubjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 */
	class Post extends \Eloquent {}
}

namespace App{
/**
 * App\Product
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $pic
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $booth_id
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBoothId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App{
/**
 * App\Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $title
 * @property string|null $description
 * @property string|null $other
 * @property string|null $url
 * @property string|null $info
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereOther($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUrl($value)
 */
	class Setting extends \Eloquent {}
}

namespace App{
/**
 * App\Slider
 *
 * @property int $id
 * @property string $pic
 * @property string|null $title
 * @property string|null $description
 * @property string|null $btn_title
 * @property string|null $btn_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBtnLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereBtnTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Slider whereUpdatedAt($value)
 */
	class Slider extends \Eloquent {}
}

namespace App{
/**
 * App\Theme
 *
 * @property int $id
 * @property string $title
 * @property string $pic
 * @property string $theme_url
 * @property string $theme
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Theme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme query()
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme wherePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereThemeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Theme whereUpdatedAt($value)
 */
	class Theme extends \Eloquent {}
}

namespace App{
/**
 * App\Ticket
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $name
 * @property string $email
 * @property int $type
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $sender_id
 * @property int|null $receiver_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $messages
 * @property-read int|null $messages_count
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereReceiverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ticket whereUpdatedAt($value)
 */
	class Ticket extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $avatar
 * @property string $color
 * @property string $theme
 * @property string $address
 * @property string $mobile
 * @property string $tel
 * @property int $role_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Invoice[] $invoices
 * @property-read int|null $invoices_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Package[] $packages
 * @property-read int|null $packages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\UserPackage[] $userPackages
 * @property-read int|null $user_packages_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\UserPackage
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string|null $start
 * @property string|null $end
 * @property int $type
 * @property int $status
 * @property int|null $booth_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @property int|null $package_id
 * @property int|null $invoice_id
 * @property-read \App\Booth|null $booth
 * @property-read \App\Invoice|null $invoice
 * @property-read \App\Package|null $package
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereBoothId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage wherePackageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPackage whereUserId($value)
 */
	class UserPackage extends \Eloquent {}
}

