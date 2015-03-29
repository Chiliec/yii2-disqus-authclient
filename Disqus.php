<?php
/**
 * @link https://github.com/Chiliec/yii2-disqus-authclient
 * @author Vladimir Babin <vovababin@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace chiliec\authclient;

use yii\authclient\OAuth2;

class Disqus extends OAuth2
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'https://disqus.com/api/oauth/2.0/authorize/';
    /**
     * @inheritdoc
     */
    public $tokenUrl = 'https://disqus.com/api/oauth/2.0/access_token/';
    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'https://disqus.com/api/3.0/';
    /**
     * @inheritdoc
     */
    public $scope = 'read,write,email';

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'disqus';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Disqus';
    }

    /**
     * @inheritdoc
     */
    protected function defaultViewOptions()
    {
        return [
            'popupWidth' => 800,
            'popupHeight' => 500,
        ];
    }
}
