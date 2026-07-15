# syntax=docker/dockerfile:1

# .ruby-version と一致させてください
ARG RUBY_VERSION=3.2.2
FROM docker.io/library/ruby:$RUBY_VERSION-slim

# Railsアプリの配置先
WORKDIR /rails

# 開発用・ビルド用のパッケージをすべてインストール
# （開発中に新しいGemを追加できるよう build-essential や git を残します）
RUN apt-get update -qq && \
    apt-get install --no-install-recommends -y \
    build-essential \
    git \
    libyaml-dev \
    pkg-config \
    curl \
    libjemalloc2 \
    libvips \
    sqlite3 \
    bash && \
    rm -rf /var/lib/apt/lists /var/cache/apt/archives

# 環境変数を開発向けに設定
ENV RAILS_ENV="development" \
    BUNDLE_PATH="/usr/local/bundle"

# Gemのインストール（開発・テスト用Gemも含めるため BUNDLE_WITHOUT は設定しません）
COPY Gemfile Gemfile.lock ./
RUN bundle install

# アプリケーションコードをコピー
# （※開発時はローカルのコードをマウントして上書きしますが、初期起動用にコピーしておきます）
COPY . .

# 起動用スクリプト（docker-entrypoint）の実行権限を付与
RUN chmod +x /rails/bin/docker-entrypoint

# Railsのデフォルトポート
EXPOSE 3000

USER 1000:1000

ENTRYPOINT ["/rails/bin/docker-entrypoint"]

# 外部（ホストPC）からアクセスできるように「-b 0.0.0.0」を指定してRailsサーバーを起動
CMD ["./bin/rails", "server", "-b", "0.0.0.0"]