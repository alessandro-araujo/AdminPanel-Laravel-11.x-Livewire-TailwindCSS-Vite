<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## ➡️ Requisitos.

- **PHP** 8.2 ou superior
- **Composer** 2.8.5 ou superior
- **Node.js** 20 ou superior
- **phpMyAdmin** 5.2.1 ou superior
- **Git** 2.47.1.windows.1 ou superior


## ➡️ Usando o projeto pela **primeira vez**.

```shell
git clone https://github.com/alessandro-araujo/test-fullstack-laravel-zamurak-studio.git .
```

- **[Criando e Configurando Arquivo: .env](#%EF%B8%8F-configura%C3%A7%C3%B5es-do-banco-de-dados-regras-migrate) Crie o arquivo .env de .env-example**

* Crie a **chave** (comando que define o valor **APP_KEY** no seu arquivo **.env**).
```env
php artisan key:generate
```
- **Instale as depêndencias:**
```shell
composer install
```
- **Executar as migrations**
* Após configurar o banco, execute:
```shell
php artisan migrate
```
* Obs: Caso, não tenha um banco, `laravel`, digite sim:
```shell
WARN  The database 'laravel' does not exist on the 'mysql' connection.
Would you like to create it? (yes/no) [yes]
❯ yes
```

- Cadastre os **Seeders**:
```shell
php artisan db:seed
```

- **Execute o php:**
```shell
php artisan serve
```
- **Acesse: [http://127.0.0.1:8000/](http://127.0.0.1:8000/)**


## ➡️ Configurações do Banco de Dados
- Crie o arquivo `.env` copiando o arquivo `.env-example`:

* Configuração aplicada para o projeto:
```env
APP_TIMEZONE=America/Sao_Paulo
APP_URL=http://127.0.0.1:8000/
APP_LOCALE=pt_BR

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
* **Obs: Atualize os dados de DB_USERNAME e DB_PASSWORD, conforme esta no seu ambiente.**
* Certifique-se que DB_DATABASE=laravel esteja disponivel (ou o nome que colocou).


- **[Usando o projeto pela primeira vez](#%EF%B8%8F-usando-o-projeto-pela-primeira-vez)**.


## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
