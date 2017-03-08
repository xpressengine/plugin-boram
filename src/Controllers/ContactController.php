<?php
/**
 * Created by PhpStorm.
 * User: seungman
 * Date: 2017. 3. 3.
 * Time: PM 6:34
 */

namespace Xpressengine\Plugins\Boram\Controllers;


use App\Http\Controllers\Controller;
use Xpressengine\Http\Request;
use Xpressengine\Plugins\Boram\Theme\Theme;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $title = $request->get('title');
        $content = $request->get('content');

    }

    public function show()
    {
//        \XeTheme::selectTheme('theme/boram@theme.3');
        $config = \XeConfig::getOrNew('plugin.theme_boram_contact');
        \XeTheme::selectTheme($config);

        return \XePresenter::make(Theme::view('contact'));
    }
}