import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Header from "./components/Header";
import Footer from "./components/Footer";
import Home from "./pages/Home";
import Concept from "./pages/Concept";
import Bureau from "./pages/Bureau";
import Contact from "./pages/Contact";
import Corporate from "./pages/Corporate";

const App = () => {
  return (
    <Router basename="/csf14th">
      <Header />
      <main>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/concept" element={<Concept />} />
          <Route path="/bureau" element={<Bureau />} />
          <Route path="/contact" element={<Contact />} />
          <Route path="/corporate" element={<Corporate />} />
        </Routes>
      </main>
      <Footer />
    </Router>
  );
};

export default App;
