# CSF React アプリケーション

学生団体廃校文化祭実行委員会 CSF の Web サイトを React + TypeScript + Tailwind.css で実装したフロントエンドアプリケーションです。

## 技術スタック

- **React 19** - UI ライブラリ
- **TypeScript** - 型安全性
- **Tailwind CSS** - ユーティリティファーストの CSS フレームワーク
- **React Router** - ルーティング
- **Vite** - ビルドツール

## セットアップ

### 必要な環境

- Node.js 20.19.0 以上（または 22.12.0 以上）
- npm または yarn

### インストール

```bash
npm install
```

### 開発サーバーの起動

```bash
npm run dev
```

ブラウザで `http://localhost:5173` を開いてください。

### ビルド

```bash
npm run build
```

ビルドされたファイルは `dist` ディレクトリに出力されます。

### プレビュー

```bash
npm run preview
```

## プロジェクト構造

```
csf-react/
├── public/
│   └── assets/
│       └── img/          # 画像アセット
├── src/
│   ├── components/       # 共通コンポーネント
│   │   ├── Header.tsx
│   │   └── Footer.tsx
│   ├── pages/            # ページコンポーネント
│   │   ├── Home.tsx
│   │   ├── Concept.tsx
│   │   ├── Bureau.tsx
│   │   ├── Contact.tsx
│   │   └── Corporate.tsx
│   ├── App.tsx           # メインアプリケーション
│   ├── main.tsx          # エントリーポイント
│   └── index.css         # グローバルスタイル
├── index.html
├── package.json
├── tailwind.config.js
└── vite.config.ts
```

## ページ構成

- `/` - ホームページ
- `/concept` - コンセプトページ
- `/bureau` - 局紹介ページ
- `/contact` - お問い合わせページ
- `/corporate` - 企業向けページ

## 機能

- レスポンシブデザイン
- ハンバーガーメニュー
- スクロール時のヘッダー自動非表示
- スムーズスクロール
- Google Forms 連携（お問い合わせフォーム）

## ライセンス

このプロジェクトは学生団体廃校文化祭実行委員会 CSF のものです。
