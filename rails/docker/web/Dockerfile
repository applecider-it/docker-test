# 使用するRubyのバージョンを指定
FROM ruby:3.2.2

# 必要なパッケージ（PostgreSQLクライアントやNode.jsなど）をインストール
RUN apt-get update -qq && apt-get install -y nodejs postgresql-client

# コンテナ内にアプリ用のディレクトリを作成
WORKDIR /app

# ローカルのGemfile類をコンテナにコピーしてインストール
COPY Gemfile /app
COPY Gemfile.lock /app

RUN bundle install

# 3000番ポートを公開
EXPOSE 3000
