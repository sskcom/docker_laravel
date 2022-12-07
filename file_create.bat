@echo off

rem Laravelプロジェクトのソースコードを格納するディレクトリを作成する
mkdir src

rem docker ディレクトリを作成する
mkdir docker

rem app ディレクトリを作成する
mkdir docker\app

rem db ディレクトリを作成する
mkdir docker\db

rem web ディレクトリを作成する
mkdir docker\web

rem Dockerfile と PHP 設定ファイルを作成する
echo "" > docker\app\Dockerfile
echo "" > docker\app\php.ini

rem Dockerfile と MySQL 設定ファイルを作成する
echo "" > docker\db\Dockerfile
echo "" > docker\db\my.conf

rem Dockerfile と nginx 設定ファイルを作成する
echo "" > docker\web\Dockerfile
echo "" > docker\web\default.conf

rem docker-compose.yml ファイルを作成する
echo "" > docker-compose.yml
