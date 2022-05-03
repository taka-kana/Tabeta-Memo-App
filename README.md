## アプリケーション名
# 「tabeta-memo」
![logo](https://user-images.githubusercontent.com/88753764/166392863-ff86fe0e-7ed5-4d0a-b0de-0a6fee7b4382.png)

### URL :  https://tabeta-memo.com/
##### ※スマートフォン対応もしています。
<br>

## アプリケーション概要
### 子供・高齢者・ペットなど、家族の食事の好みや傾向を記録できる料理の記録ツール
<br>

## アプリケーション開発詳細
### [Qiita記事](https://qiita.com/616no-hitori/items/0b6f4aae4713746d3ccd)
<br>

## 開発背景
#### 料理のレシピ（作り方や詳細）を投稿するアプリは数多く存在しますが、食べた量や好みなどを記録するツールはあまり多くないことを感じ、妻や元職場のママさんたちに共感を得て作成する事としました。
<br>

## 目指した課題解決
#### このアプリを利用することで、家族の好きな食べ物・嫌いな食べ物を把握したい、初めて食べたものの記念や試した結果を残したい、同じ悩みを持った子供・お年寄り・ペットの食事を参考にしたいというニーズの解決を目指しました。

<br>

## 使用技術

### フロントエンド
#### ・HTML,CSS,Sass
#### ・JQuery
#### ・JavaScript
<br>

### バックエンド
#### ・PHP 7.4.28
#### ・Laravel Framework 6.20.44
<br>

### インフラ
#### ・MySQL 8.0.28
#### ・nginx 1.20.0
#### ・Docker version 20.10.12（開発環境）
#### ・docker-compose version 1.29.2（開発環境）
#### ・AWS(EC2,VPC,RDS,S3,ALB,Route53)（本番環境）
<br>

### その他
#### ・VSCode
#### ・Git/Github
#### ・googleスプレッドシート（エレベーターピッチ・ユーザーストーリーマップ）
#### ・Excel（ER図、画面遷移図）
#### ・figma（ワイヤーフレーム）
#### ・diagrams.net（インフラ図）
<br>

## 画面遷移図
![画面遷移図](https://user-images.githubusercontent.com/88753764/166151987-5eafc49e-0acf-4525-8e48-3c21f6c45813.png)
<br>
<br>

## ER図
![ER図](https://user-images.githubusercontent.com/88753764/166468437-25d8f910-4339-4086-9f1f-603c495c210f.png)
<br>
<br>

## インフラ
![awsアーキテクチャ](https://user-images.githubusercontent.com/88753764/166464010-b66fe15f-9b93-4ddf-8621-0823ed2f8546.png)
<br>
<br>

## 機能一覧
#### ユーザー登録：ユーザー名、メールアドレス、パスワードの登録
#### ログイン機能：メールアドレス、パスワードでの認証
#### ゲストログイン：ユーザー登録しないで利用可能
#### 投稿：画像投稿・カテゴリー・キーワード・レビュー・完食度・公開設定
#### 投稿の編集・削除機能
#### 絞り込み検索：キーワード検索・カテゴリー検索などの複数条件検索
#### 公開設定・非公開設定/表示
#### My-memo機能：自己投稿のみ表示、自己投稿のみでキーワード・カテゴリー検索
#### ユーザー情報編集：ユーザー名・メールアドレスの変更

## 利用方法
### ホーム画面
#### ヘッダーメニューもしくはホーム画面の各ログインボタンからユーザーでのログインが可能です。またゲストログインボタンからゲストユーザーとしてログインもできます。
<br>

<img src="https://user-images.githubusercontent.com/88753764/166149614-95a0c40b-7198-4a21-82d4-a10a7385e347.png" width="800px" height="auto" >
<br>

### ユーザー登録・ログイン
#### 新規登録ではユーザー名、メールアドレス、パスワードを入力すると新規にユーザー登録をすることができます。
#### ログイン画面では登録したメールアドレスと、パスワードを入力する事により登録済みのユーザーでログインすることができます。
<br>

<img src="https://user-images.githubusercontent.com/88753764/166153742-29162fb3-fa10-4a8d-abe1-c8c2b5c32040.png" width="400px" height="auto" >  　　　　<img src="https://user-images.githubusercontent.com/88753764/166153737-10de7166-e2c5-4303-bcab-81ec6755eb97.png" width="400px" height="auto" >

#### ログインするとヘッダーにユーザー名が表示されます。

<img src="https://user-images.githubusercontent.com/88753764/166175345-9ca8ba75-fd27-49af-a2ed-aa75f55f555c.png" width="400px" height="auto" >

### みんなの記録画面（投稿一覧画面）
#### **ヘッダー**
#### ・自身や他のユーザーが投稿したメモが表示されます。
#### ・このページで表示されるメモは公開設定をしているメモのみです。
#### ・ヘッダーのロゴをクリックする事によりmy-memoに遷移することができます。
#### ・ヘッダーよりmemo投稿ページに遷移することができます。
#### ・ヘッダーのメニューボタンを押すとメニューが展開されmy-memo・ユーザー情報ページへの遷移、ログアウトをすることができます。
<br>

#### **検索機能**
#### ・検索フォームでキーワードを入力・カテゴリーを選択する事により、公開設定がされている指定されたメモのみを表示することができます。
<br>

#### **メモ一覧**
#### ・表示されているメモカードをクリックするとメモ詳細画面へ遷移します。
#### ・自身が投稿したメモの右下部には編集・削除ボタンがあり編集ボタンを押すと編集ページへ遷移、削除ボタンを押すと記事が削除されます。
#### ・ヘッダー分だけ下部へスクロールすると画面右下にtoTopボタンが出現し、クリックするとページ上部へ遷移します。
#### ・下部のページネーションにより次ページに遷移することができます。

<img src="https://user-images.githubusercontent.com/88753764/166152251-a0183c7c-b859-42ff-9381-73bd352954f4.png" width="400px" height="auto" >
<br>

### Memo投稿
#### ・レシピ名、画像、メモ、カテゴリー名、食材キーワード、我が家のレビュー、完食度、公開・非公開の入力・項目選択を行うことで投稿することができます。
#### ・画像は未入力でも投稿することができます。未入力の場合はみんなの記録、My-memo、記事詳細画面で「NO IMAGE」の画像が表示されます。
#### ・公開・非公開設定では、非公開に設定するとみんなの記録に表示されなくなります。

<img src="https://user-images.githubusercontent.com/88753764/166152821-453e9fea-ecc5-4204-b3a9-ab4d539ff28d.png" width="400px" height="auto" >

### My-memo

#### ・現在ログインされているユーザーが投稿したメモ一覧が表示されます。
#### ・みんなの投稿とは異なり投稿日時も表示されます。
<img src="https://user-images.githubusercontent.com/88753764/166255253-e0db2afe-7c2f-4fa0-9b76-1ce1683ccb00.png" width="400px" height="auto" >

### ユーザー情報

#### ユーザー名、メールアドレスを確認することができます。

<img src="https://user-images.githubusercontent.com/88753764/166391013-3cfcfe3e-c6d0-4981-b6f6-effe57e2fa1b.png" width="400px" height="auto" >

### ユーザー情報変更

#### ユーザー名、メールアドレスを変更することができます。
#### ゲストユーザーは内容を変更することができません。

<img src="https://user-images.githubusercontent.com/88753764/166391165-031a5eb4-56cf-4d67-88b3-750d3c86d0b4.png" width="400px" height="auto" >

## 今後の改変予定
### 現在はCRUD機能中心に実装しています。よりSNS色を強めたり、メモとしての機能を向上させるため下記の追加を考えております。

#### ・「いいね」/コメント機能を追加しユーザー同士のコミュニケーション機能向上。
#### ・カレンダー機能・並び替え機能を追加しユーザビリティを向上。
#### ・好きなものリスト・嫌いなものリスト機能を追加。

## Developer

#### Takahiro Kanazawa

<img src="https://user-images.githubusercontent.com/88753764/166468992-eddf7ec6-0fa7-454a-b13b-0e8fefa0a43c.jpg" width="200px" height="auto" >

#### twitter : https://twitter.com/taka_life_log
#### Qiita : https://qiita.com/616no-hitori