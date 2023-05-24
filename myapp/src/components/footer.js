//import Button from 'react-bootstrap/Button';
//import Form from 'react-bootstrap/Form';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import { FaDiscord } from "react-icons/fa";
import { FaInstagram } from "react-icons/fa";
import { FaTwitter } from "react-icons/fa";
//import { useState } from "react";
//import $ from "jquery";
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

                <form action="/action_page.php">
                <label>Email</label>
                <input type="email"id="email"name="email"placeholder="Your email"/>
                <input type="submit"value="Submit"/>
                </form>
                </Col>
            </Row>
            <p className="text-center pt-4">No Signal © 2023 Copyright</p>
        </div>
    </footer>
} 

/*
    const [email, setEmail] = useState("");
    const [result, setResult] = useState("");

    const handleChange = (e) => {
        setEmail(e.target.value);
    };
  
    const handleSumbit = (e) => {
        e.preventDefault();
        const form = $(e.target);
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            success(data) {
                setResult(data);
            },
        });
    };




<Form.Group className="mb-3" controlId="formBasicCheckbox">
<Form.Check type="checkbox" label="Deviens beta testeur" />
</Form.Group>

                    <Form 
                    action="http://localhost:8000/server.php"
                    method="post"
                    onSubmit={(event) => handleSumbit(event)}>
                        <Form.Group className="text-center mb-3 form-text-title" controlId="formBasicEmail">
                            <Form.Label>Inscrit toi à notre newsletter</Form.Label>
                            <label htmlFor="email">Email: </label>
                            <input
                            type="text"
                            id="email"
                            name="email"
                            value={email}
                            onChange={(event) => handleChange(event)}
                            />
                        </Form.Group>
                        <Button variant="outline-light" type="submit">
                            S'inscrire
                        </Button>
                    </Form>*/

export default Footer