<?php
/**
 * Theme.php
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

namespace Xpressengine\Plugins\Boram\Theme;

use App\Facades\XePresenter;
use XeFrontend;
use Xpressengine\Config\ConfigEntity;
use Xpressengine\Theme\GenericTheme;

/**
 * Class Theme
 *
 * @category    Boram
 * @package     Xpressengine\Plugins\Boram
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        https://xpressengine.io
 */
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
