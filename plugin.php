<?php
namespace Xpressengine\Plugins\Boram;

use XeFrontend;
use XePresenter;
use Route;
use Xpressengine\Http\Request;
use Xpressengine\Plugin\AbstractPlugin;

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
    }

    public function route()
    {
        Route::fixed($this->getId(), function(){
            Route::group(['namespace' => 'Xpressengine\Plugins\Boram\Controllers'], function() {
                Route::post('/send', ['as' => 'send', 'uses' => 'ContactController@send']);
            });
        });
    }
}
