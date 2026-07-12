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
- Turbo Drive


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
tests/ ユニットテスト
```


## その他

- [評価](./evaluation.md)
- [ユニットテスト](./test.md)
- [イノベーション](./innovation.md)
- [コメントについて](./comment.md)
- [理想のコードと認知負荷](./code.md)
