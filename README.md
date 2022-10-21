# plugin-AbstractValidator
Plugin que manipula a imagem que é enviada nos e-mails

## Exemplo de Configuração

```
    'MailImage' => [
        'namespace' => 'MailImage',
        'config' => [
            'imageUrl' => function(){
                $subsite = MapasCulturais\App::i()->repo('Subsite')->find(1);
                return $subsite->files['logo']->url;
            }
        ],
    ],
```
