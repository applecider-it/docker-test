FROM ruby:3.2.2

RUN apt-get update -qq && apt-get install -y postgresql-client

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# コンテナ内にアプリ用のディレクトリを作成
WORKDIR /app

# ローカルのGemfile類をコンテナにコピーしてインストール
COPY Gemfile /app
COPY Gemfile.lock /app

RUN bundle install

# 3000番ポートを公開
EXPOSE 3000
