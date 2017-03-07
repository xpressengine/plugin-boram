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
    public function sendEmail(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $title = $request->get('title');
        $content = $request->get('content');
        
    }

    public function show()
    {
        \XeTheme::selectTheme('theme/boram@theme.3');

        return \XePresenter::make(Theme::view('contact'));
    }
}