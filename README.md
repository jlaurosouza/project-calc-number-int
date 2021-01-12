# PHP Framework Laravel 8


## Para rodar este projeto
```bash
$ git clone https://github.com/jluarosouza/project-calc-number-int
$ cd project-calc-number-int
$ composer install
$ php artisan serve
```
Acesssar pela url: http://localhost:8000/ #neste caso a porta esta a padrão, mais pode ser alterada se necessário, PS: o link para acesso é mostrado quando o comardo anterior é executado.



## Pré-requisitos
- PHP >= 7.0
- Laravel 8
- composer


## Anotações/Extras
As seções a seguir são anotações sobre o framework e podem não refletir a aplicação em desenvolvimento.


Composer:
```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
$ sudo chmod +x /usr/local/bin/composer
$ sudo chmod -R 777 ~/.composer/cache/
$ sudo composer self-update
```

### Instalação Framework
```bash
$ composer global require "laravel/installer"
```

Exportar o path do laravel para Linux reconhecer os comandos (bash):

1. Incluir no final do arquivo ~/.bashrc: export PATH="~/.composer/vendor/bin:$PATH"

2. Depois executar: 
```bash
$ source ~/.bashrc 
```


### Criação de um projeto clean
```bash
$ laravel new nome_projeto
$ cd nome_projeto
$ php artisan serve
```

O último comando serve para testar a instalação, se em localhost:8000 aparecer LARAVEL escrito na página, tudo está ok. Ao utilizar o comando laravel new automaticamente a última versão do Laravel será baixada. Até a escrita deste documento o comando configura o Laravel 5.2. Caso deseja instalar laravel 8 LTS, substitua aquele primeiro comando por:
```bash
$ composer create-project --prefer-dist laravel/laravel nome-do-projeto 8.*
```

### Artisan
- Sistema de comandos do Laravel. Help em:
```bash
$ php artisan
```
- Remover arquivos de cache criado pelo Laravel:
```bash
$ php artisan clear-compiled 
```
- Colocar sistema em modo manutenção:
```bash
$ php artisan down 
```

- A ilustração a seguir demonstra o uso do tinker com objetos do tipo Post salvando no banco de dados:
![Tinker exemplo](public/image/tinker.png)


- Para adicionar uma tag 3 ao post 1 pelo tinker basta:
```bash
$post = App\Post::find(1);
$post->tags()->attach(3);
$post->tags;
```

- Para "sincronizar" os idsa de tags com um post, pode ser usada a função sync(array()) que realiza o attach e detach das chaves estrangeiras, removendo ids que não conferiram com a lista informada no argumento de sua função:
```bash
$post->tags()->sync([1, 3, 5, 7]);
```

### Informações importantes
 - Assim que a aplicação é executada no browser, a página do cálculo é exibida.