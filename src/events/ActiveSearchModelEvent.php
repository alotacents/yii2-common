<?php
/**
 * @link https://github.com/yii2tech
 * @copyright Copyright (c) 2015 Yii2tech
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace alotacents\common\events;

use yii\base\ModelEvent;

/**
 * ActiveSearchEvent represents the parameter needed by {@see ActiveSearchModel} events.
 *
 * @see ActiveSearchModel
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 1.0
 */
class ActiveSearchModelEvent extends ModelEvent
{
    /**
     * @var \yii\db\ActiveQueryInterface|null related active query instance.
     */
    public $query;
}
