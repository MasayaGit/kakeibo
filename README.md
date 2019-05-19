# kakeibo
家計簿アプリ

#framework
Symfony4
Bootstrap

## Install

```
$ git clone https://github.com/MasayaGit/kakeibo.git
$ cd ./kakeibo
$ php bin/console server:run
$ http://127.0.0.1:8000 
```
test用

name: test

password: 1234

## table

person

|id|name|password|
|:---:|:---:|:---:|
|id|名前|パスワード|

cost

|id|person_id|costname|price|category|time|
|:---:|:---:|:---:|:---:|:---:|:---:|
|id|personのid|名前|価格|カテゴリー|時間|

## Reference
PHPフレームワーク Symfony 4入門
https://www.shuwasystem.co.jp/book/9784798056692.html
