import castle from "../video/castle.mp4";
import Menu from "../components/nav";
import Footer from "../components/footer";
import Button from 'react-bootstrap/Button';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import { FaArrowCircleRight } from "react-icons/fa";
import '../App.css';

function Home(){

    return <div className="montserrat">
        <Menu/>

        <div id="home" className="main">
                <video autoPlay loop muted id='video'>
                    <source src={castle} type='video/mp4'/>
                </video>
                <div className="text-center content">
                    <h1>NO SIGNAL</h1>
                    <h2>Clip promotionnel du jeu</h2>
                    <p className="content-color">L'heure de l'horreur est arrivée. Préparez vous à un environnement sans merci au Château.</p>
                    <Button variant="light" size="lg"><FaArrowCircleRight/> Regarder</Button>{' '}
                </div>
        </div>

        <div id="game">
            <h3 className="sub-titles">NOTRE JEU</h3>
            <div className="game"></div>
        </div>

        <div id="us">
            <h3 className="sub-titles">QUI NOUS SOMMES</h3>
            <div className="us"></div>
        </div>

        <div id="team">
            <div className="team">
                <Row>
                    <Col>
                        <h3 className="team-title">NOTRE EQUIPE</h3>
                        <h4 className="team-subt">Découvrez notre équipe et leurs profils</h4>
                    </Col>
                    <Col>
                        <img className="team-img" src="https://fivestarexperiences.com.au/wp-content/uploads/2018/04/Happy-team.jpg" alt="team"/>
                    </Col>
                </Row>
            </div>
        </div>

        <Footer/>
        </div>
}

export default Home;