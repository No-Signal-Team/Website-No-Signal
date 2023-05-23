import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import { FaDiscord } from "react-icons/fa";
import { FaInstagram } from "react-icons/fa";
import { FaTwitter } from "react-icons/fa";
import '../App.css';

function Footer(){
    return <footer className="footer pt-4 secondary">
        <div className="py-2">
            <Row>
                <Col lg={4}>
                    <div className="text-center">
                        <h4>Nos Réseaux Sociaux</h4>
                        <ul className="socials">
                            <li><a href="#insta"><FaInstagram/> Intagram</a></li>
                            <li><a href="#twitter"><FaTwitter/> Twitter</a></li>
                            <li><a href="#discord"><FaDiscord/> Discord</a></li>
                        </ul>
                    </div>
                </Col>
                <Col lg={{ span: 4, offset: 4 }}>
                    <Form>
                        <Form.Group className="text-center mb-3 form-text-title" controlId="formBasicEmail">
                            <Form.Label>Inscrit toi à notre newsletter</Form.Label>
                            <Form.Control type="email" placeholder="Email" />
                        </Form.Group>
                        <Form.Group className="mb-3" controlId="formBasicCheckbox">
                            <Form.Check type="checkbox" label="Deviens beta testeur" />
                        </Form.Group>
                        <Button variant="outline-light" type="submit">
                            S'inscrire
                        </Button>
                    </Form>
                </Col>
            </Row>
            <p className="text-center pt-4">No Signal © 2023 Copyright</p>
        </div>
    </footer>
} 

export default Footer