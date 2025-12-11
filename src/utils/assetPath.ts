// GitHub Pages用のアセットパスヘルパー
export const getAssetPath = (path: string): string => {
  // パスが既に / で始まっている場合
  if (path.startsWith('/')) {
    // baseパスを取得（末尾の/を削除）
    const base = (import.meta.env.BASE_URL || '/').replace(/\/$/, '');
    // パスから最初の / を削除してbaseと結合
    const cleanPath = path.slice(1);
    return `${base}/${cleanPath}`;
  }
  // 相対パスの場合
  const base = (import.meta.env.BASE_URL || '/').replace(/\/$/, '');
  return `${base}/${path}`;
};

