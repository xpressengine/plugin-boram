<?php
/**
 * Plugin.php
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

namespace Xpressengine\Plugins\Boram;

use XeFrontend;
use XePresenter;
use Route;
use Xpressengine\Http\Request;
use Xpressengine\Plugin\AbstractPlugin;

/**
 * Class Plugin
 *
 * @category    Boram
 * @package     Xpressengine\Plugins\Boram
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        https://xpressengine.io
 */
class Plugin extends AbstractPlugin
{
    /**
     * 이 메소드는 활성화(activate) 된 플러그인이 부트될 때 항상 실행됩니다.
     *
     * @return void
     */
    public function boot()
    {
        $this->route();

        $this->registerSettingsMenu();
    }

    public function route()
    {
        Route::fixed($this->getId(), function(){
            Route::group(['namespace' => 'Xpressengine\Plugins\Boram\Controllers'], function() {
                //contact 전송
                Route::post('/send', ['as' => 'boarm::sendEmail', 'uses' => 'ContactController@send']);

                //contact view
                Route::get('/contact', ['as' => 'boram::contact', 'uses' => 'ContactController@show']);
            });
        });

        Route::settings('plugin/boram', function(){
            Route::group(['namespace' => 'Xpressengine\Plugins\Boram\Controllers'], function() {
                //컨텐츠 메뉴 settings view
                Route::get('/settings', [
                    'as' => 'boram::settings',
                    'uses' => 'SettingsContentsController@settings',
                    'settings_menu' => 'contents.contact'
                ]);

                //컨텐츠 메뉴 -> contact 설정 저장
                Route::post('/store', [
                    'as' => 'boram::settings.contact.store',
                    'uses' => 'SettingsContentsController@store',
                ]);
            });
        });
    }

    public function getSettingsURI()
    {
        return route('boram::settings');
    }

    protected function registerSettingsMenu()
    {
        \XeRegister::push('settings/menu', 'contents.contact', [
            'title' => 'Contact 설정',
            'display' => true,
            'description' => 'Contact 설정',
            'ordering' => 5000  // 정렬 순서
        ]);
    }
}
