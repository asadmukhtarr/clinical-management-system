import { Routes,Route } from "react-router-dom";
import Home from "./components/Home";
import About from "./components/About";
import Doctors from "./components/Doctors";
import Appointments from "./components/Appointments";
import Book from "./components/Book";
import Track from "./components/Track";
import Header from "./components/includes/Header";
import Contact from "./components/Contact";
const App = () => {
    var name = "Web Medical Hub";
    return (
        <div>
            <Header title={name} />
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/about" element={<About />} />
                <Route path="/contact" element={<Contact />} />
                <Route path="/doctors" element={<Doctors />} />
                <Route path="/appointment" element={<Appointments />} />
                <Route path="/book" element={<Book />} />
                <Route path="/track" element={<Track />} />
            </Routes>
        </div>
    )
}
export default App;