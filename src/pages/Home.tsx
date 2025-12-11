import { Link } from "react-router-dom";
import Header from "../components/Header";
import Footer from "../components/Footer";
import { getAssetPath } from "../utils/assetPath";

const Home = () => {
  return (
    <>
      <Header />
      <main>
        <div>
          {/* KV Section */}
          <section className="kv">
            <div className="kv_inner">
              <h1 className="kv_title">
                <span className="c">C</span>
                <span className="s">S</span>
                <span className="f">F</span>
              </h1>
              <p className="kv_subtitle">
                廃校を通して
                <br />
                　　都市と地方の架け橋となる
              </p>
            </div>
            <div className="kv_frame">
              <div className="kv-frame-wrapper">
                <section className="kv_frame_sns">
                  <ul>
                    <li>
                      <a
                        href="https://www.instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src={getAssetPath(
                            "/assets/img/common/Instagram_logo.png"
                          )}
                          alt="Instagram"
                        />
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://www.x.com"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        <img
                          src={getAssetPath("/assets/img/common/x_logo.png")}
                          alt="X (Twitter)"
                        />
                      </a>
                    </li>
                  </ul>
                </section>
              </div>
            </div>
          </section>

          {/* Concept Section */}
          <section className="section section-concept">
            <div className="section_inner">
              <div className="section_headerWrapper">
                <header className="concept_header">
                  <h2>1. 学生団体って？</h2>
                </header>
                <div className="concept_body">
                  <p>
                    <span className="concept_blue">学生団体</span>
                    は大学などの学生コミュニティ内で
                    <br />
                    形成される組織で、さまざまな目的や
                    <br />
                    関心ごとに基づいて活動する集団です。
                    <br />
                    これらの団体は、学生が
                    <span className="concept_blue">自己成長</span>や
                    <span className="concept_blue">社会貢献</span>を促進し、
                    <br />
                    興味や才能を発揮する場を提供することを
                    <br />
                    目指しています。
                  </p>
                  <div className="section_btn">
                    <Link to="/concept" className="sc_btn">
                      Read More
                    </Link>
                  </div>
                </div>
              </div>
            </div>
            <div className="concept_frame">
              <Link to="/concept#concept1" className="concept_frame_title">
                1. 学生団体って
              </Link>
              <Link to="/concept#concept2" className="concept_frame_title">
                2. CSFとは
              </Link>
              <Link to="/concept#concept3" className="concept_frame_title">
                3. 14期代表挨拶
              </Link>
              <Link to="/concept#concept4" className="concept_frame_title">
                4. 校境なき文化祭
              </Link>
            </div>
            <div
              className="concept-rect-right-top"
              style={{
                backgroundImage: `url('${getAssetPath(
                  "/assets/img/concept/hatena3.png"
                )}')`,
              }}
            />
          </section>

          {/* Bureau Section */}
          <section className="section section-bureau" id="bureau">
            <div className="section_bureau-inner">
              <div className="bureau-content">
                <Link to="/bureau#kouhou" className="bureau-single kouhou">
                  <div className="bureau-header">
                    <h2>広報局</h2>
                  </div>
                  <div className="bureau-body">
                    <p>
                      自分のデザインで
                      <br />
                      廃校の魅力を伝える局
                    </p>
                  </div>
                  <div className="square-icon">
                    <i className="fa-solid fa-arrow-right" />
                  </div>
                </Link>
                <Link to="/bureau#sousei" className="bureau-single tihousousei">
                  <div className="bureau-header">
                    <h2>地方創生局</h2>
                  </div>
                  <div className="bureau-body">
                    <p>
                      廃校という唯一性を
                      <br />
                      生かし理念を実践していく局
                    </p>
                  </div>
                  <div className="square-icon">
                    <i className="fa-solid fa-arrow-right" />
                  </div>
                </Link>
                <Link to="/bureau#unei" className="bureau-single unei">
                  <div className="bureau-header">
                    <h2>運営局</h2>
                  </div>
                  <div className="bureau-body">
                    <p>
                      理想のイベントを創る
                      <br />
                      ための中心となる局
                    </p>
                  </div>
                  <div className="square-icon">
                    <i className="fa-solid fa-arrow-right" />
                  </div>
                </Link>
                <Link to="/bureau#syogai" className="bureau-single syogai">
                  <div className="bureau-header">
                    <h2>渉外局</h2>
                  </div>
                  <div className="bureau-body">
                    <p>
                      団体が活動するための
                      <br />
                      縁の下の力持ち局
                    </p>
                  </div>
                  <div className="square-icon">
                    <i className="fa-solid fa-arrow-right" />
                  </div>
                </Link>
              </div>
              <div
                className="bureau-rect-left-top"
                style={{
                  backgroundImage: `url('${getAssetPath(
                    "/assets/img/concept/grandpa.png"
                  )}')`,
                }}
              />
              <div
                className="bureau-rect-left-bottom"
                style={{
                  backgroundImage: `url('${getAssetPath(
                    "/assets/img/concept/instrument.png"
                  )}')`,
                }}
              />
              <div
                className="bureau-rect-right-bottom"
                style={{
                  backgroundImage: `url('${getAssetPath(
                    "/assets/img/concept/ghost.png"
                  )}')`,
                }}
              />
            </div>
          </section>

          {/* News Section */}
          <section className="section-news">
            <div className="section_news-inner">
              <div className="center-line" />
              <div className="news-header">
                <h1>NEWS</h1>
              </div>
              <div className="news-content">
                <div className="topic-content news-box">
                  <div className="topic-header">
                    <h2>TOPIC</h2>
                  </div>
                  <div className="ruled-lines">
                    {[1, 2, 3, 4, 5, 6, 7, 8].map((i) => (
                      <div key={i} className="ruled-line">
                        <div className="article">
                          <section className="section-article">
                            <div className="section_inner">
                              <div className="section_body">
                                <div className="cardList cardList-1row">
                                  <div className="card">
                                    <div className="card_body">
                                      <a href="#">
                                        <time>2024.01.01</time>
                                        サンプルニュースタイトル {i}
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    ))}
                  </div>
                  <div className="news-btn-container">
                    <Link to="/news/topic" className="news_btn">
                      Read More
                    </Link>
                  </div>
                </div>
                <div className="event-content news-box">
                  <div className="event-header">
                    <h2>EVENT</h2>
                  </div>
                  <div className="ruled-lines">
                    {[1, 2, 3, 4, 5, 6, 7, 8].map((i) => (
                      <div key={i} className="ruled-line">
                        <div className="article">
                          <section className="section-article">
                            <div className="section_inner">
                              <div className="section_body">
                                <div className="cardList cardList-1row">
                                  <div className="card">
                                    <div className="card_body">
                                      <a href="#">
                                        <time>2024.01.01</time>
                                        サンプルイベントタイトル {i}
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                      </div>
                    ))}
                  </div>
                  <div className="news-btn-container">
                    <Link to="/news/event" className="news_btn">
                      Read More
                    </Link>
                  </div>
                </div>
              </div>
            </div>
          </section>

          {/* Funding Section */}
          <section className="section-funding">
            <div className="section_funding-innner">
              <div className="funding-header">
                クラウドファンディングを
                <br className="funding-indent" />
                募集しています！！
              </div>
              <div
                className="funding-img"
                style={{
                  backgroundImage: `url('${getAssetPath(
                    "/assets/img/common/group2.jpg"
                  )}')`,
                }}
              />
              <div className="funding-content">
                <div className="bar-header">
                  <p>只今の寄付金</p>
                  <p>目標金額</p>
                </div>
                <div className="funding-bar">
                  <div style={{ width: "38%" }} />
                </div>
                <div className="bar-footer">
                  <p>￥116,000</p>
                  <p>￥300,000</p>
                </div>
              </div>
              <a
                className="funding-link"
                href="https://for-good.net/project/1001016"
                target="_blank"
                rel="noopener noreferrer"
              >
                クラウドファンディング詳細はこちら
                <i className="fa-solid fa-link" />
              </a>
            </div>
          </section>
        </div>
      </main>
      <Footer />
    </>
  );
};

export default Home;
