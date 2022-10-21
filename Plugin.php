<?php

namespace MailImage;

use MapasCulturais\App;


class Plugin extends \MapasCulturais\Plugin
{
    public function __construct(array $config = [])
    {
        $config += [
            'imageUrl' => ''
        ];

        parent::__construct($config);
    }

    public function _init()
    {
        $app = App::i();
        
        if($this->config['imageUrl']){
            $app->hook("asset(img/mail-image.png):url", function(&$url) use ($app){
                if(is_callable($this->config['imageUrl'])){
                    $fn = $this->config['imageUrl'];
                    $url = $fn();
                }else{
                    $url = $this->config['imageUrl'];
                }
            });
        }

    }

    public function register()
    {
    }
    
}
