<?php

namespace App\Widgets;

use App\Widgets\BaseMargo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Products extends BaseMargo
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Product::count();
<<<<<<< HEAD
        $string = trans_choice('Product', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-basket',
            'title'  => "{$count} {$string}",
            'text'   => __('Посмотрите список всех продуктов', ['count' => $count, 'string' => Str::lower($string)]),
=======
        $string = 'Product';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
>>>>>>> master
            'button' => [
                'text' => 'Products',
                'link' => route('voyager.products.index'),
            ],
<<<<<<< HEAD
            'image' => '/storage/settings/product.jpeg',
=======
            'image' => 'storage/settings/product.jpeg',
>>>>>>> master
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('Post'));
    }
}
