
## Requisitos Mínimos

- PHP 8

## Como instalar?

Basta seguir o passo-a-passo abaixo para realizar a instalação

1 Passo: Dê um clone no projeto
```
git clone https://github.com/marcelonralves/consulta-cep.git
```

2 Passo: Abra o diretório do projeto clonado e execute o comando abaixo para instalar as dependências
```
composer install
```

3 Passo: Caso o projeto não tenha o arquivo .env, renomeie o arquivo .env.example para .env

4 Passo: Execute o comando abaixo para gerar a chave de criptografia que o Laravel pede
```
php artisan key:generate
```

5 Passo: Execute o comando para rodar o servidor

Se for utilizar o servidor imbutido do PHP, basta executar:
```
php -S localhost:8000 -t public
```
ou pode utilizar o do próprio artisan
```
php artisan serve
```

6 Passo: Testar a rota abaixo

```
http://localhost:8000/api/search/local/17560246,01001000
```

## Stack Utilizada

O projeto foi feito utilizando o Laravel 9

