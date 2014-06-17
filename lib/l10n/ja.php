<?php
$TRANSLATIONS = array(
"You are accessing the server from an untrusted domain." => "信頼されていないドメインからサーバーにアクセスしています。",
"Please contact your administrator. If you are an administrator of this instance, configure the \"trusted_domain\" setting in config/config.php. An example configuration is provided in config/config.sample.php." => "管理者に連絡してください。このサーバーの管理者の場合は、\"trusted_domain\" の設定を config/config.php に設定してください。config/config.sample.php にサンプルの設定方法が記載してあります。",
"Help" => "ヘルプ",
"Personal" => "個人",
"Settings" => "設定",
"Users" => "ユーザー",
"Admin" => "管理",
"Failed to upgrade \"%s\"." => "\"%s\" へのアップグレードに失敗しました。",
"No app name specified" => "アプリ名が未指定",
"Unknown filetype" => "不明なファイルタイプ",
"Invalid image" => "無効な画像",
"web services under your control" => "管理下のウェブサービス",
"App directory already exists" => "アプリディレクトリはすでに存在します",
"Can't create app folder. Please fix permissions. %s" => "アプリフォルダーを作成できませんでした。%s のパーミッションを修正してください。",
"No source specified when installing app" => "アプリインストール時のソースが未指定",
"No href specified when installing app from http" => "アプリインストール時のhttpの URL が未指定",
"No path specified when installing app from local file" => "アプリインストール時のローカルファイルのパスが未指定",
"Archives of type %s are not supported" => "\"%s\"タイプのアーカイブ形式は未サポート",
"Failed to open archive when installing app" => "アプリをインストール中にアーカイブファイルを開けませんでした。",
"App does not provide an info.xml file" => "アプリにinfo.xmlファイルが入っていません",
"App can't be installed because of not allowed code in the App" => "アプリで許可されないコードが入っているのが原因でアプリがインストールできません",
"App can't be installed because it is not compatible with this version of ownCloud" => "アプリは、このバージョンのownCloudと互換性がないためインストールできません。",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "非shippedアプリには許可されない<shipped>true</shipped>タグが含まれているためにアプリをインストールできません。",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "info.xml/versionのバージョンがアプリストアのバージョンと合っていないため、アプリはインストールされません",
"Application is not enabled" => "アプリケーションは無効です",
"Authentication error" => "認証エラー",
"Token expired. Please reload page." => "トークンが無効になりました。ページを再読込してください。",
"Unknown user" => "不明なユーザー",
"%s enter the database username." => "%s のデータベースのユーザー名を入力してください。",
"%s enter the database name." => "%s のデータベース名を入力してください。",
"%s you may not use dots in the database name" => "%s ではデータベース名にドットを利用できないかもしれません。",
"MS SQL username and/or password not valid: %s" => "MS SQL サーバーのユーザー名/パスワードが正しくありません: %s",
"You need to enter either an existing account or the administrator." => "既存のアカウントもしくは管理者のどちらかを入力する必要があります。",
"MySQL/MariaDB username and/or password not valid" => "MySQL/MariaDB のユーザー名及び/またはパスワードが無効",
"DB Error: \"%s\"" => "DBエラー: \"%s\"",
"Offending command was: \"%s\"" => "違反コマンド: \"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "MySQL/MariaDB のユーザー '%s'@'localhost' はすでに存在します。",
"Drop this user from MySQL/MariaDB" => "MySQL/MariaDB からこのユーザーを削除",
"MySQL/MariaDB user '%s'@'%%' already exists" => "MySQL/MariaDB のユーザー '%s'@'%%' はすでに存在します",
"Drop this user from MySQL/MariaDB." => "MySQL/MariaDB からこのユーザーを削除。",
"Oracle connection could not be established" => "Oracleへの接続が確立できませんでした。",
"Oracle username and/or password not valid" => "Oracleのユーザー名もしくはパスワードは有効ではありません",
"Offending command was: \"%s\", name: %s, password: %s" => "違反コマンド: \"%s\"、名前: %s、パスワード: %s",
"PostgreSQL username and/or password not valid" => "PostgreSQLのユーザー名もしくはパスワードは有効ではありません",
"Set an admin username." => "管理者のユーザー名を設定",
"Set an admin password." => "管理者のパスワードを設定。",
"Your web server is not yet properly setup to allow files synchronization because the WebDAV interface seems to be broken." => "WebDAVインターフェースに問題があると思われるため、WEBサーバーはまだファイルの同期を許可するよう適切に設定されていません。",
"Please double check the <a href='%s'>installation guides</a>." => "<a href='%s'>インストールガイド</a>をよく確認してください。",
"%s shared »%s« with you" => "%sが あなたと »%s«を共有しました",
"Sharing %s failed, because the file does not exist" => "%s の共有に失敗しました。そのようなファイルは存在しないからです。",
"You are not allowed to share %s" => "%s を共有することを許可されていません。",
"Sharing %s failed, because the user %s is the item owner" => "%s の共有に失敗しました。ユーザー %s がアイテム所有者です。",
"Sharing %s failed, because the user %s does not exist" => "%s の共有に失敗しました。ユーザー %s が存在しません。",
"Sharing %s failed, because the user %s is not a member of any groups that %s is a member of" => "%s の共有に失敗しました。ユーザー %s はどのグループにも属していません。%s は、??のメンバーです。",
"Sharing %s failed, because this item is already shared with %s" => "%s の共有に失敗しました。このアイテムは既に %s で共有されています。",
"Sharing %s failed, because the group %s does not exist" => "%s の共有に失敗しました。グループ %s は存在しません。",
"Sharing %s failed, because %s is not a member of the group %s" => "%s の共有に失敗しました。%s は、グループ %s のメンバーではありません。",
"You need to provide a password to create a public link, only protected links are allowed" => "公開用リンクの作成にはパスワードの設定が必要です",
"Sharing %s failed, because sharing with links is not allowed" => "%s の共有に失敗しました。リンクでの共有は許可されていません。",
"Share type %s is not valid for %s" => "%s の共有方法は、%s には適用できません。",
"Setting permissions for %s failed, because the permissions exceed permissions granted to %s" => "%s の権限設定に失敗しました。%s に許可されている権限を越えています。",
"Setting permissions for %s failed, because the item was not found" => "%s の権限設定に失敗しました。アイテムが存在しません。",
"Sharing backend %s must implement the interface OCP\\Share_Backend" => "%s のバックエンドの共有には、OCP\\Share_Backend　インターフェースを実装しなければなりません。",
"Sharing backend %s not found" => "共有バックエンド %s が見つかりません",
"Sharing backend for %s not found" => "%s のための共有バックエンドが見つかりません",
"Sharing %s failed, because the user %s is the original sharer" => "%s の共有に失敗しました。ユーザー %s が元々の共有者であるからです。",
"Sharing %s failed, because the permissions exceed permissions granted to %s" => "%s の共有に失敗しました。%s に付与されている許可を超えているからです。",
"Sharing %s failed, because resharing is not allowed" => "%s の共有に失敗しました。再共有が許されていないからです。",
"Sharing %s failed, because the sharing backend for %s could not find its source" => "%s の共有に失敗しました。%s のバックエンド共有に必要なソースが見つかりませんでした。",
"Sharing %s failed, because the file could not be found in the file cache" => "%s の共有に失敗しました。ファイルキャッシュにファイルがありませんでした。",
"Could not find category \"%s\"" => "カテゴリ \"%s\" が見つかりませんでした",
"seconds ago" => "数秒前",
"_%n minute ago_::_%n minutes ago_" => array("%n 分前"),
"_%n hour ago_::_%n hours ago_" => array("%n 時間前"),
"today" => "今日",
"yesterday" => "1日前",
"_%n day go_::_%n days ago_" => array("%n日前"),
"last month" => "1ヶ月前",
"_%n month ago_::_%n months ago_" => array("%nヶ月前"),
"last year" => "1年前",
"years ago" => "年前",
"Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"" => "ユーザー名で利用できる文字列は、次のものです： \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"",
"A valid username must be provided" => "有効なユーザー名を指定する必要があります",
"A valid password must be provided" => "有効なパスワードを指定する必要があります",
"The username is already being used" => "ユーザー名はすでに使われています",
"Could not obtain lock type %d on \"%s\"." => "\"%s\" で %d タイプのロックを取得できませんでした。"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
