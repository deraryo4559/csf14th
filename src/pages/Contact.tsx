import { useState } from "react";

const Contact = () => {
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
    // Google Formsへの送信処理
    const form = e.target as HTMLFormElement;
    form.submit();
  };

  return (
    <main>
      <div className="section">
        <div className="section_inner">
          <header className="section_header">
            <h1 className="heading heading-primary">お問い合わせ</h1>
          </header>
          <div className="post_content">
            <div className="content">
              <p style={{ textAlign: "center", margin: "40px auto" }}>
                お気軽にお問い合わせください。
              </p>
              <form
                className="c-form"
                action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd2i8UguoxKP61etBpYxvJeltDUXjpC6fUFLBEvBudp_hD6uA/formResponse"
                method="POST"
                target="hidden_iframe"
                onSubmit={handleSubmit}
              >
                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-option">
                    お問い合わせの種類
                    <span className="c-form__required">必須</span>
                  </label>
                  <div className="c-form__radio-group">
                    <input
                      className="c-form__radio-input"
                      id="option1"
                      name="entry.1376946857"
                      type="radio"
                      value="ご協賛に関するお問い合わせ"
                      required
                    />
                    <label className="c-form__radio-label" htmlFor="option1">
                      ご協賛に関するお問い合わせ
                    </label>
                    <input
                      className="c-form__radio-input"
                      id="option2"
                      name="entry.1376946857"
                      type="radio"
                      value="その他のお問い合わせ"
                      required
                    />
                    <label className="c-form__radio-label" htmlFor="option2">
                      その他のお問い合わせ
                    </label>
                  </div>
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-theme">
                    件名
                    <span className="c-form__required">必須</span>
                  </label>
                  <input
                    className="c-form__input"
                    name="entry.2039365324"
                    id="field-theme"
                    placeholder="件名"
                    type="text"
                    required
                  />
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-message">
                    お問い合わせ内容
                    <span className="c-form__required">必須</span>
                  </label>
                  <textarea
                    className="c-form__input"
                    name="entry.141200493"
                    id="field-message"
                    placeholder="お問い合わせ内容"
                    required
                  />
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-name">
                    氏名
                    <span className="c-form__required">必須</span>
                  </label>
                  <input
                    className="c-form__input"
                    name="entry.1239520887"
                    id="field-name"
                    placeholder="株式会社 山田"
                    type="text"
                    required
                  />
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-mail">
                    メールアドレス
                    <span className="c-form__required">必須</span>
                  </label>
                  <input
                    className="c-form__input"
                    name="entry.1097643981"
                    id="field-mail"
                    placeholder="sample@gmail.com"
                    type="email"
                    required
                  />
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-adress">
                    住所
                  </label>
                  <input
                    className="c-form__input"
                    name="entry.1988994468"
                    id="field-adress"
                    placeholder="住所"
                    type="text"
                  />
                </div>

                <div className="c-form__item">
                  <label className="c-form__label" htmlFor="field-number">
                    電話番号
                  </label>
                  <input
                    className="c-form__input"
                    name="entry.275651095"
                    id="field-number"
                    placeholder="電話番号"
                    type="text"
                  />
                </div>

                <div className="c-form__item">
                  <label
                    className="c-form__label agree__label"
                    htmlFor="field-agree"
                  >
                    <a
                      href="/privacypolicy"
                      target="_blank"
                      rel="noopener noreferrer"
                    >
                      当団体プライバシーポリシー
                    </a>
                    に同意頂ける場合は「同意する」にチェックを付け「入力内容の確認」ボタンをクリックしてください。
                    <span className="c-form__required">必須</span>
                  </label>
                  <div className="c-form__radio-group">
                    <input
                      className="c-form__radio-input"
                      id="agree"
                      name="entry.1253721909"
                      type="radio"
                      value="同意する"
                      required
                    />
                    <label className="c-form__radio-label" htmlFor="agree">
                      同意する
                    </label>
                  </div>
                </div>

                <div className="c-form__submit">
                  <button type="submit">送信する</button>
                </div>
              </form>
              <iframe
                name="hidden_iframe"
                id="hidden_iframe"
                style={{ display: "none" }}
                onLoad={() => {
                  if (submitted) {
                    window.location.href = "/contact/thanks";
                  }
                }}
              />
            </div>
          </div>
        </div>
      </div>
    </main>
  );
};

export default Contact;
