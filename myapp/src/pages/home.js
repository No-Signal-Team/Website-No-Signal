import castle from "../video/castle.mp4";
import Menu from "../components/nav";
import Footer from "../components/footer";
import Button from 'react-bootstrap/Button';
import '../App.css';

function Home(){
    return <div>
        <Menu/>

        <div id="home" className="main">
                <video autoPlay loop muted id='video'>
                    <source src={castle} type='video/mp4'/>
                </video>
                <div className="text-center content">
                    <h1>No Signal</h1>
                    <h2>Clip promotionnel du jeu</h2>
                    <p className="secondary">L'heure de l'horreur est arrivée. Préparez vous à un environnement sans merci au Château.</p>
                    <Button variant="light" size="lg">Regarder</Button>{' '}
                </div>
        </div>

        <div id="game">
            <h3>Notre Jeu</h3>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
        </div>

        <div id="us">
            <h3>Qui nous sommes</h3>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
        </div>

        <div id="team">
            <h3>Notre Equipe</h3>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
            <p>scroll</p>
        </div>


        <Footer/>
        </div>
}

export default Home;