<?php
/**
 * @link https://github.com/yii2tech
 * @copyright Copyright (c) 2015 Yii2tech
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace alotacents\common\events;

use \yii\base\ActionEvent;

/**
 * ActionEvent represents the event triggered by controller action.
 *
 * @property \yii\base\Model $model associated model instance.
 *
 * @author Paul Klimov <klimov.paul@gmail.com>
 * @since 1.0
 */
class ModelChangeActionEvent extends ActionEvent
{
    /**
     * @var \yii\base\ModelEvent original model event.
     */
    public $modelEvent;

    /**
     * @return \yii\base\Model associated model instance.
     */
    public function getModel()
    {
        return $this->modelEvent->sender;
    }
}
