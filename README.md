# クライアント名・プロジェクト名

| クライアント名   | 千種区保育園連絡会                                                           |
| :--------------- | :--------------------------------------------------------------------------- |
| 顧客番号         | 0079                                                                         |
| デザイン担当者   | 宮治                                                                         |
| 初期構築         | 鈴木                                                                         |
| CMS              | WordPress                                                                    |
| ドメイン         | https://chikusahoiku.com/（仮）                                              |
| ドメイン管理     | --                                                                           |
| 本番サーバー     | XSERVER                                                                      |
| 本番サーバー状態 | 状態報告                                                                     |
| テストサーバー   | http://yohakutest.xsrv.jp/chikusaku/wp                                       |
| Bitbucket        | https://bitbucket.org/yohaku_shimizu/chikusa/src/master/                     |
| NAS              | --                                                                           |
| GoogleDrive      | https://drive.google.com/drive/u/0/folders/1rjQw_5u2WrF4JSqVjlkooI4teBEmAVIh |

## 案件概要

千種区保育園連絡会様の公式ホームページ制作です。
サイト制作の目的は、千種区内の保育園の紹介、保育・子育てに関する情報を発信する連絡会の公式サイトを立ち上げることです。
サイト公開予定日は 2022 年 3 月下旬ごろです。
納品予定のサーバーは XSERVER です。
PHP・MySQL・Apache のバージョンは WordPress の必要要件を満たしているのを確認済みです。

## 必須プラグイン

- Advanced Custom Fields (カスタムフィールド設定)
- Contact Form 7 (お問い合わせフォーム)
- Custom Post Type UI (カスタム投稿設定)
- All-in-One WP Migration（wordpress 引っ越し）
- Smart Custom Fields（カスタムフィールド設定）

## 投稿

- お知らせ
- 施設とその情報

## お客様更新

- メインビジュアル
- 各ページのテキスト、画像（見出し以外）
- フッターの電話番号や受付時間など

細かな投稿、更新内容は[機能要件定義書](https://docs.google.com/document/d/1c4H2iBWdIY52bUF5eypbiMHTYah_DniIjc78qzPjwkQ/edit "機能要件定義書")をご確認ください。

## 注意事項

お知らせのシングルページは作成しません。
お知らせ記事は、一覧ページでアコーディオンから内容を表示させます。
トップページからのお知らせ記事のリンクはアンカーです。
エリアもトップページからのリンクはエリア一覧ページへのアンカーです。
クリッカブルマップに対応します。マップの svg にアンカーを付けてあります。

svg は img タグで囲まずに php ファイルのテンプレートとして作成して下さい。
svg の保存場所 yohaku_theme/images/svg/○○.php

```
//SVGの表示
<?php get_temlate_part('images/svg/○○'); ?>
```

### 命名規則について

クラス名や変数名は命名規則に従って付与してください。

vem 構造に沿ったクラス名を付与して下さい。

## 各種シート

| 名前               | 場所                                                                                                    |
| :----------------- | :------------------------------------------------------------------------------------------------------ |
| 仕様書             | https://docs.google.com/spreadsheets/d/1WGwaAwPgBp_MjBwsft6rFDl_pKsXJgP_tftjSYDRy4E/edit#gid=630475992  |
| タスク管理シート   | https://docs.google.com/spreadsheets/d/1tecF9YUMtOnL4o-02SLXyLVYz65neRwYULzoLOkk3eI/edit#gid=1932802791 |
| 機能要件定義書     | https://docs.google.com/document/d/1c4H2iBWdIY52bUF5eypbiMHTYah_DniIjc78qzPjwkQ/edit                    |
| 本件仕様書         | https://docs.google.com/document/d/1Hfe4KmLZDnOdSjdF2DD02uzvIE6ptFpo-Hv3X0E1CUg/edit                    |
| 保守サービス仕様書 | https://docs.google.com/document/d/195fT_8ppzQ_shz5idfz4CzZufMgnBEksHFXy2swtqm0/edit                    |
| 品質管理シート     | 作成後、記入します。                                                                                    |

## 修正などの対応記録

| 年月日     | 実施者 | 内容                    |
| :--------- | :----- | :---------------------- |
| 2021/12/17 | 鈴木   | 初期構築、README の作成 |
| 2022/03/29 | 近藤   | トップページキャッチコピー追加、メディアに画像の追加、お知らせプレビュー画面整理 |
| 2022/03/30 | 近藤   | 公開作業 |