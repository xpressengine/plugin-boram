<?php
namespace Xpressengine\Plugins\Boram\Theme;

use App\Facades\XePresenter;
use XeFrontend;
use Xpressengine\Config\ConfigEntity;
use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'boram/theme';

    public function render()
    {
        $config = \XeConfig::getOrNew('plugin.theme_boram_contact');

        view()->share('contactConfig', $config);

        return parent::render();
    }
}
