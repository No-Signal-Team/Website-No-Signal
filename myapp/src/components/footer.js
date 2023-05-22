import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import '../App.css';

function Footer(){
    return <footer className="footer pt-4 secondary">
        <div className="py-2">
            <Row>
                <Col>
                    <div className="text-center">
                        <h4>Nos Réseaux sociaux</h4>
                        <ul>
                            <li><a href="#insta">Intagram</a></li>
                            <li><a href="#twitter">Twitter</a></li>
                            <li><a href="#discord">Discord</a></li>
                        </ul>
                    </div>
                </Col>
                <Col>
                    <Form>
                        <Form.Group className="mb-3" controlId="formBasicEmail">
                            <Form.Label>Inscrit toi à notre newsletter</Form.Label>
                            <Form.Control type="email" placeholder="Email" />
                        </Form.Group>
                        {['checkbox'].map((type) => (
                            <div key={`default-${type}`} className="mb-3">
                            <Form.Check 
                                type={type}
                                id={`default-${type}`}
                                label={`Deviens beta testeur`}
                            />
                            </div>
                        ))}
                        <Button variant="primary" type="submit">
                            Submit
                        </Button>
                    </Form>
                </Col>
            </Row>
            <p className="text-center pt-4">No Signal © 2023 Copyright</p>
        </div>
    </footer>
} 

export default Footer