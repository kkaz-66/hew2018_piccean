## よく使うdockerコマンド一覧

### laradockディレクトリに移動してから下のコマンドを実行 


#### 起動   

picceandockerディレクトリに移動してから下のコマンドを実行

    docker-compose up -d
    
or

    docker-compose up

//起動後にブラウザ上で localhost:8082 でアクセスできるはず

#### 起動確認

    docker-compose ps
    
//Upは起動中、Exitは停止中

#### 停止

    docker-compose stop


データベースに入るには picceandockerディレクトリに移動してから下のコマンドを実行

    docker exec -it picceandocker_mysql_1 bash
    mysql -u root -p 
    
    DBパスワード   = root

    exit        //終了するコマンド

workspaceに入るには

  docker exec -it  laradock_workspace_1 /bin/bash

***
# Git基本コマンド
* git clone
* git add
* git commit  
* git push
* git reset --soft HEAD^

#### git clone  
ブランチを指定して、リポジトリをローカルに持ってきたい時

    git clone -b ブランチ名

#### git add
管理対象に追加（ステージングエリアに上げる）
 今のディレクトリより下のものを全て管理対象に追加。

    git add .

#### git commit
コメント付きでコミット    例→ git commit -m “[FIX] ◯◯◯◯画面を修正”

    git commit -m “[xxxx] xxxxxxxxx”

#### git push
ローカルでの開発内容を共有リポジトリに反映させる。

    git push  origin 宛先ブランチ名
    
#### git reset --soft HEAD^
commitをなかったことにする。

    git reset --soft HEAD^


### Gitコミットメッセージ

    [ADD] ファイルの追加など
    [IMPL] 実装したことを示す
    [FIX] 直した内容
    [UPDATE] 更新したことを示す
    [REMOVE] 削除したことを示す
    [WIP] 作業の途中を示す