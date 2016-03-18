# bootstrap-blade

## Getting Started

Instalação (OSX)

1. Instalar o [NodeJS](http://nodejs.org/)
2. Instalar o [Bower](http://bower.io/): `$ npm install -g bower`

### Blade

Instalar o Blade:

```
composer install
```

### Bower

Download de assets com o bower:

```
`$ bower install`
```

### Gulp

Instalar o Gulp:

```
$ npm install gulp
```

E logo após, suas dependências:

```
$ npm install --save-dev
```

Para minificar os assets:

```
$ gulp
```

Tarefa de watch:

```
$ gulp watch
```

Tarefa de compactação de imagens - [Tiny PNG](tinypng.com):

```
$ gulp tiny
```

Para trabalhar com a tarefa acima, coloque as imagens que queira compactar dentro do diretório `./images`, e aponte seus arquivos - como `.scss`, por exemplo - para o diretório padrão: `./assets/img`.

**PS**: o Tiny PNG somente permite até 500 imagens compactadas por chave de API, ou seja, se der algum erro, troque sua chave. Para conseguir uma acesse [a área de desenvolvedor](https://tinypng.com/developers), cadastre-se e seja feliz :)

**PPS**: se você rodar a tarefa `gulp tiny` ela irá criar o arquivo `.tinypng-sigs`, que diz à tarefa para não executá-la nos mesmos arquivos, somente nos novos. Por exemplo: se eu tenho a imagem `01.jpg` e rodo a tarefa, ao executá-la uma segunda vez a mesma imagem não será gerada novamente. **Atenção**: se por algum motivo você apagar alguma imagem já gerada e quiser compacta-la novamente, apague o arquivo `.tinypng-sigs` do diretório `./images`.


## Realização de Testes

1. [PageSpeed Insights](http://developers.google.com/speed/pagespeed/insights/?hl=pt-BR) performance e acessibilidade/experiência de usuário (UX)
2. [Testing Tools](https://developers.google.com/structured-data/testing-tool/) microdata