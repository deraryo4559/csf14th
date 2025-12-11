interface Sponsor {
  name: string;
  logo: string;
  url: string;
}

const Corporate = () => {
  // スポンサーロゴのデータ（実際のデータはAPIやJSONから取得）
  const sponsors: Sponsor[] = [
    // サンプルデータ - 実際のデータに置き換える必要があります
    // { name: '企業名', logo: '/path/to/logo.png', url: '/sponsor/1' },
  ];

  return (
    <main>
      <section id="corporate-header">
        <div className="corporate-header-inner">
          <h1>企業の皆様へ</h1>
        </div>
        <div className="corporate-container-inner">
          <h2>はじめに</h2>
          <p>
            この度は、2024年6月16日開催の紫陽祭の開催にあたり、多くの企業の皆様からの多大なるご協賛をいただきました。
            <br />
            ご協賛いただきました協賛品につきましては、紫陽祭の各種イベント景品や来場者ノベルティとして活用させていただきます。
            <br />
            この場をお借りいたしまして、廃校文化祭実行委員会CSF一同厚く御礼申し上げます。
          </p>
        </div>
        <div className="corporate-name-inner">
          <p>学生団体廃校文化祭実行委員会CSF</p>
          <p>14期代表　小瀬木遼</p>
          <p>14期渉外局長　林凌平</p>
        </div>
      </section>

      {/* Logo Section */}
      <section id="corporate-logo">
        <div className="corporate-logo-header">
          <h2>2024年紫陽祭 協賛企業一覧（五十音順）</h2>
        </div>
        <div className="corporate-logo-inner">
          {sponsors.length > 0 ? (
            <div className="logo-container">
              {sponsors.map((sponsor, index) => (
                <a key={index} href={sponsor.url} className="logo-card">
                  <img src={sponsor.logo} alt={sponsor.name} />
                </a>
              ))}
            </div>
          ) : (
            <div className="text-center text-gray-500 py-12">
              <p>協賛企業の情報を準備中です。</p>
            </div>
          )}
        </div>
      </section>
    </main>
  );
};

export default Corporate;
