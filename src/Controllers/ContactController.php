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

    public function show(Request $request)
    {
        $contactConfig = \XeConfig::getOrNew('plugin.theme_boram_contact');
        $selectedTheme = ($request->isMobile())? $contactConfig->get('theme_mobile') : $contactConfig->get('theme_desktop');

        \XeTheme::selectTheme($selectedTheme);

        app('xe.frontend')->bodyClass('no-banner');
        app('xe.frontend')->bodyClass('pull-bg');

        \XeFrontend::js(theme::asset('js/contact.js'))->load();

        return \XePresenter::make('boram::views.contact', [ 'contactConfig' => $contactConfig ]);
    }
}