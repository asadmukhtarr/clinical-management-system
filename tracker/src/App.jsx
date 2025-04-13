import Home from "./components/Home";
import About from "./components/About";
import Contct from "./components/Contact";
import Doctors from "./components/Doctors";
import Appointments from "./components/Appointments";
import Book from "./components/Book";
import Track from "./components/Track";
import Header from "./components/includes/Header";
const App = () => {
    return (
        <div>
            <Header />
            <Home />
            <About />
            <Contct />
            <Doctors />
            <Appointments />
            <Book />
            <Track />
        </div>
    )
}
export default App;