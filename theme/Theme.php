<?php
namespace Xpressengine\Plugins\Boram\Theme;

use Xpressengine\Config\ConfigEntity;
use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'boram/theme';

    public function renderSetting(ConfigEntity $config = null)
    {
        //XeFrontend

        return parent::renderSetting($config);
    }
}
