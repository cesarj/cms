<?php
/**
 * XOOPS user handler
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       XOOPS Project (http://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         kernel
 * @since           2.0.0
 * @author          Kazumi Ono (AKA onokazu) http://www.myweb.ne.jp/, http://jp.xoops.org/
 * @version         $Id$
 */

namespace Xoops\Core\Kernel\Handlers;

use Xoops\Core\Database\Connection;
use Xoops\Core\Kernel\XoopsPersistableObjectHandler;

/**
 * XOOPS user handler class.
 * This class is responsible for providing data access mechanisms to the data source
 * of XOOPS user class objects.
 *
 * @author  Kazumi Ono <onokazu@xoops.org>
 * @author  Taiwen Jiang <phppp@users.sourceforge.net>
 * @package kernel
 */
class XoopsUserHandler extends XoopsPersistableObjectHandler
{

    /**
     * Constructor
     *
     * @param Connection|null $db {@link Connection}
     */
    public function __construct(Connection $db = null)
    {
        parent::__construct($db, 'users', '\\Xoops\\Core\\Kernel\\Handlers\\XoopsUser', 'uid', 'uname');
    }

}
