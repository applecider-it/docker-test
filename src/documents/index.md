# Docker + PHP動作確認

wsl + Docker + Viteの動作確認用

Macでも動作確認済み

## 設計

- 構造はLaravelに寄せています。
- Laravelのコンポーネントを部分的に利用。
- Viteの動作確認。

## PHP動作確認

- Mysql接続

## Javascript動作確認

- Viteのホットリロード
- Alpine
- Vue
- React
- HTMX
- Turbo


## 構造

```
app/  アプリケーション部分
bootstrap/  ブート部分
config/ 設定
database/
public/ WEBのエントリーポイント
resources/  リソース
routes/ ルート
storage/  ストレージ
```


## その他

- [評価](./evaluation.md)
