<?php
/**
 * Created by PhpStorm.
 * User: seungman
 * Date: 2017. 3. 8.
 * Time: PM 2:55
 */

namespace Xpressengine\Plugins\Boram\Controllers;

use XeConfig;
use App\Http\Controllers\Controller;
use Xpressengine\Http\Request;

class SettingsContentsController extends Controller
{
    public function settings()
    {
        $config = XeConfig::getOrNew('plugin.theme_boram_contact');

        return \XePresenter::make('boram::views.settings', ['config' => $config]);
    }

    public function store(Request $request)
    {
        $useContact = $request -> get('useContact');
        $contactBackgroundImage = $request -> file('contactBackgroundImage');
        $contactTitle = $request -> get('contactTitle');
        $contactSubTitle = $request -> get('contactSubTitle');
        $contactName = $request -> get('contactName');
        $contactAddress = $request -> get('contactAddress');
        $contactTel = $request -> get('contactTel');
        $contactEmail = $request -> get('contactEmail');
        $contactFax = $request -> get('contactFax');
        $contactBusinessHours = $request -> get('contactBusinessHours');
        $contactSocial = $request -> get('contactSocial');
        $theme_desktop = $request -> get('theme_desktop');
        $theme_mobile = $request -> get('theme_mobile');
        $successMessage = $request -> get('successMessage');
        $emailFormHeader = $request -> get('emailFormHeader');
        $emailFormFooter = $request -> get('emailFormFooter');

        $config = XeConfig::get('plugin.theme_boram_contact');

        if($contactBackgroundImage) {
            $contactBackgroundImage = $this->uploadFile($contactBackgroundImage);
        }

        if($config) {
            XeConfig::put('plugin.theme_boram_contact', [
                'useContact' => $useContact,
                'contactBackgroundImage' => $contactBackgroundImage,
                'contactTitle' => $contactTitle, 
                'contactSubTitle' => $contactSubTitle,
                'contactName' => $contactName,
                'contactAddress' => $contactAddress,
                'contactTel' => $contactTel,
                'contactEmail' => $contactEmail,
                'contactFax' => $contactFax,
                'contactBusinessHours' => $contactBusinessHours,
                'contactSocial' => $contactSocial,
                'theme_desktop' => $theme_desktop,
                'theme_mobile' => $theme_mobile,
                'successMessage' => $successMessage,
                'emailFormHeader' => $emailFormHeader,
                'emailFormFooter' => $emailFormFooter,
            ]);

        } else {
            XeConfig::add('plugin.theme_boram_contact', [
                'useContact' => $useContact,
                'contactBackgroundImage' => $contactBackgroundImage,
                'contactTitle' => $contactTitle,
                'contactSubTitle' => $contactSubTitle,
                'contactName' => $contactName,
                'contactAddress' => $contactAddress,
                'contactTel' => $contactTel,
                'contactEmail' => $contactEmail,
                'contactFax' => $contactFax,
                'contactBusinessHours' => $contactBusinessHours,
                'contactSocial' => $contactSocial,
                'theme_desktop' => $theme_desktop,
                'theme_mobile' => $theme_mobile,
                'successMessage' => $successMessage,
                'emailFormHeader' => $emailFormHeader,
                'emailFormFooter' => $emailFormFooter,
            ]);
            
        }

        return redirect()->to(route('boram::settings'));
    }

    private function uploadFile($uploadFile) {
        // 업로드된 파일을 스토리지에 등록
        $file = app('xe.storage')->upload(
            $uploadFile,
            'public/plugin/boram/contact',
            'backgroundImage',
            'local'
        );

        // 등록된 파일의 출처를 기록
        app('xe.storage')->bind('plugin/boram/contact', $file);

        // 등록된 파일의 정보를 사용하기 편하게.. [id, filename, path]
        $saved = [
            'id' => $file->id,
            'filename' => $file->clientname
        ];

        $mediaFile = null;

        if (app('xe.media')->is($file)) {
            $mediaFile = app('xe.media')->make($file);
            $saved['path'] = $mediaFile->url();
        }

        return $saved;
    }
}