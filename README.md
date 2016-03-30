# Silex 環境構築
=================
## 基本情報
* PHP 5.６
* Silex 2.0
* Mysql 5.6

## 開発環境構築
※環境はvagrantを使用<br>
※作業ディレクトリを`/var/www/html`とする場合


#### 1.リポジトリをクローン

```
$cd /var/www/html
$git clone https://github.com/andsf/silex.git
```

#### 2.composerをインストール(composerの設定をしている方は不要)

```
$cd silex
$curl -s http://getcomposer.org/installer | php
```

#### 3.ドキュメントルート設定<br>

DocumentRootを下記の通りに変更する
```
/var/www/html/silex/public
```
**synced_folderを使用する場合**

```
$cd /var/www/html
$ln -s /vagrant/silex/public silex
```
DocumentRootを下記の通りに変更する
```
/var/www/html/silex
```

#### 4.デフォルトタイムゾーン変更
php.iniのtimezoneを下記のように変更する
```
date.timezone = "Asia/Tokyo"
```

#### 5.composer install

```
php composer.php install
//または
composer install
```
