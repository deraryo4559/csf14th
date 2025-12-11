const Footer = () => {
  return (
    <footer
      className="footer"
      style={{
        backgroundImage: "url('/assets/img/common/footer3.png')",
      }}
    >
      <div className="footer_inner">
        <div className="footer_info">
          <div className="footer_logo">
            <div
              className="footer-logo-image"
              style={{
                backgroundImage: "url('/assets/img/common/csf_logo2.png')",
              }}
            />
            <div className="footer-logo-name">
              <span className="logo-sup">学生団体</span>
              廃校文化祭実行委員会
              <span className="logo-sub">Closed School Festival</span>
            </div>
          </div>
        </div>
      </div>
      {/* アクセス部分の追加 */}
      <section className="section-access">
        <div className="access-body">
          <div className="addres-inner">
            <h2 className="section-access-header">ACCESS</h2>
            <div className="addres-core">
              <div className="access-logo">
                <i className="fa-solid fa-location-dot" />
              </div>
              <div className="access-addres">
                〒171-0014
                <br />
                東京都豊島区池袋3丁目30-8
              </div>
            </div>
          </div>
        </div>
        <div className="access-map">
          <div id="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12954.469103783442!2d139.704458!3d35.73563!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892a772681ea9%3A0xfd7d62a3e02d3a!2z44G_44KJ44GE6aSo5aSn5piO!5e0!3m2!1sja!2sjp!4v1710431930938!5m2!1sja!2sjp"
              style={{ border: 0, width: "100%", maxWidth: "100%" }}
              allowFullScreen
              loading="lazy"
              referrerPolicy="no-referrer-when-downgrade"
            />
          </div>
        </div>
      </section>
      <div className="pageTop js-toTop">
        <a href="#">
          <i className="fas fa-arrow-up" />
          <span>TOP PAGE</span>
        </a>
      </div>
    </footer>
  );
};

export default Footer;
