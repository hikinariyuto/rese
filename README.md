・アプリケーション名 rese
飲食店予約サービスアプリ

・作成した目的
外部の飲食店予約サービスは手数料を取られるので自社で予約サービスを持つため。

・機能一覧
会員登録
ログイン
ログアウト
ユーザー情報取得
ユーザー飲食店お気に入り一覧取得
ユーザー飲食店予約情報取得
飲食店一覧取得
飲食店詳細取得
飲食店お気に入り追加
飲食店お気に入り削除
飲食店予約情報追加
エリアで検索する
ジャンルで検索する
店名で検索する

・使用技術
laravel
php
mysql
docker
nginx
html
css

・テーブル設計
shopsテーブル					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	unsigned bigint	○		○	
shop_name	string				
area	string				
kind	string				
introduction	string				
shop_image	string				
created_at	timestamp				
updated_at	timestamp				
					
reservesテーブル					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	unsigned bigint	○		○	
name	string				
shop_id	int				○
date	string				
time	string				
number	string				
created_at	timestamp				
updated_at	timestamp				
					
favoritesテーブル					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	unsigned bigint	○		○	
shop_id	int				○
name	string				
created_at	timestamp				
updated_at	timestamp				
