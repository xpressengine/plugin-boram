<?php
namespace Xpressengine\Plugins\Boram\Theme;

use XeFrontend;
use Xpressengine\Config\ConfigEntity;
use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'boram/theme';

    public function renderSetting(ConfigEntity $config = null)
    {
        XeFrontend::js(static::asset('js/settings.js'))->load();
        
        return parent::renderSetting($config);
    }
    
//    public function render()
//    {
//        XeFrontend::js(static::asset([
//            'css/layout.css',
//            'css/owl.carousel.css'
//        ]))->load();
//
//        return parent::render();
//    }
}
