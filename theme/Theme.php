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
        //XeFrontend
        
        XeFrontend::js(static::asset('js/settings.js'))->load();

        return parent::renderSetting($config);
    }
}
