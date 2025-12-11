import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Header from "./components/Header";
import Footer from "./components/Footer";
import Home from "./pages/Home";
import Concept from "./pages/Concept";
import Bureau from "./pages/Bureau";
import Contact from "./pages/Contact";
import Corporate from "./pages/Corporate";

const App = () => {
  // デバッグ用: baseパスを確認
  const baseUrl = import.meta.env.BASE_URL || '/csf14th/';
  const currentPath = window.location.pathname;
  
  console.log("BASE_URL:", baseUrl);
  console.log("Current path:", currentPath);
  
  // basenameを動的に決定
  // GitHub Pagesでは /csf14th/ がbaseパス
  // 開発環境では / がbaseパス
  const basename = baseUrl.replace(/\/$/, ''); // 末尾の / を削除

  return (
    <Router basename={basename}>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route
          path="/concept"
          element={
            <>
              <Header />
              <main>
                <Concept />
              </main>
              <Footer />
            </>
          }
        />
        <Route
          path="/bureau"
          element={
            <>
              <Header />
              <main>
                <Bureau />
              </main>
              <Footer />
            </>
          }
        />
        <Route
          path="/contact"
          element={
            <>
              <Header />
              <main>
                <Contact />
              </main>
              <Footer />
            </>
          }
        />
        <Route
          path="/corporate"
          element={
            <>
              <Header />
              <main>
                <Corporate />
              </main>
              <Footer />
            </>
          }
        />
      </Routes>
    </Router>
  );
};

export default App;
