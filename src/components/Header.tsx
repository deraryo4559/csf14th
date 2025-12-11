import { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import { getAssetPath } from "../utils/assetPath";

const Header = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);
  const [headerHidden, setHeaderHidden] = useState(false);
  const [lastScrollPos, setLastScrollPos] = useState(0);

  useEffect(() => {
    const handleScroll = () => {
      const scrollPos = window.scrollY;
      const headerHeight = 100;

      setIsScrolled(scrollPos > 50);

      if (scrollPos > lastScrollPos && scrollPos > headerHeight) {
        setHeaderHidden(true);
      } else {
        setHeaderHidden(false);
      }

      setLastScrollPos(scrollPos);
    };

    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, [lastScrollPos]);

  const toggleMenu = () => {
    setIsMenuOpen(!isMenuOpen);
  };

  const menuItems = [
    { path: "/", label: "TOP" },
    { path: "/concept", label: "CONCEPT" },
    { path: "/bureau", label: "DEPARTMENT" },
    { path: "/corporate", label: "CORPORATE" },
    { path: "/contact", label: "CONTACT" },
  ];

  return (
    <header
      className={`header ${isScrolled ? "is-active" : ""}`}
      id="header"
      style={{ top: headerHidden ? "-100px" : "0" }}
    >
      <div className="header_logo">
        <Link to="/" />
        <div
          className="logo-img"
          style={{
            backgroundImage: `url('${getAssetPath(
              "/assets/img/common/CSF_Logo_header4.png"
            )}')`,
          }}
        />
        <h2 className="logo-title">学生団体廃校文化祭実行委員会</h2>
      </div>

      <div className="header_nav">
        <div
          className={`header_menu js-menu-icon ${
            isMenuOpen ? "is-active" : ""
          }`}
          onClick={toggleMenu}
        >
          <span />
        </div>
        <nav className={`gnav js-menu ${isMenuOpen ? "is-active" : ""}`}>
          <ul>
            {menuItems.map((item) => (
              <li key={item.path}>
                <Link to={item.path} onClick={() => setIsMenuOpen(false)}>
                  {item.label}
                </Link>
              </li>
            ))}
          </ul>
        </nav>
      </div>
    </header>
  );
};

export default Header;
