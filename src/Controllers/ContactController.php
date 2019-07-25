<?php
/**
 * ContactController.php
 *
 * PHP version 7
 *
 * @category    Boram
 * @package     Xpressengine\Plugins\Boram
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Plugins\Boram\Controllers;

use App\Http\Controllers\Controller;
use Xpressengine\Http\Request;
use Xpressengine\Plugins\Boram\Theme\Theme;
use Mail;

/**
 * Class ContactController
 *
 * @category    Boram
 * @package     Xpressengine\Plugins\Boram
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        https://xpressengine.io
 */
class ContactController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $title = $request->get('title');
        $content = $request->get('content');

        $contactConfig = \XeConfig::getOrNew('plugin.theme_boram_contact');

        $data = [
            'title' => $title,
            'contents' => $content,
            'emailFormHeader' => xe_trans($contactConfig->get('emailFormHeader')),
            'emailFormFooter' => xe_trans($contactConfig->get('emailFormFooter'))
        ];

        $fields = [
            'name' => $name,
            'email' => $email,
            'title' => $title,
            'contents' => $content,
        ];

        if(!$this->isValid($fields)) {
            $response = [
                'error' => 'error',
                'message' => '입력 필드를 작성해 주세요.',
                'fields' => $fields
            ];

        } else {
            Mail::send('boram::views.email', $data, function ($m) use ($name, $email, $title, $contactConfig) {
                $m->from($email, $name);
                $m->to($contactConfig->get('contactEmail'));
                $m->subject($title);

            });

            $response = [
                "message" => xe_trans($contactConfig->get('successMessage'))
            ];
        }

        return response()->json($response);
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

    private function isValid($data)
    {
        $flag = true;

        foreach ($data as $item) {
            if(!$item) {
                $flag = false;
                break;
            }
        }

        return $flag;
    }
}
