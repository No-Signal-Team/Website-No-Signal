import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import Button from 'react-bootstrap/Button';
import ToggleButton from 'react-bootstrap/ToggleButton';
import ToggleButtonGroup from 'react-bootstrap/ToggleButtonGroup';
import "../App.css"

function Menu() {
  return (
    <Navbar expand="lg" fixed="top">
        <Container fluid>
          <Navbar.Brand href="#home">
              <img
                src="https://cdn-icons-png.flaticon.com/512/90/90394.png"
                width="30"
                height="30"
                className="d-inline-block align-top"
                alt="castle"
              />
          </Navbar.Brand>
          <Navbar.Toggle aria-controls="navbarScroll"/>
          <Navbar.Collapse id="navbarScroll">
            <Nav className="me-auto">
              <Button href="#game" variant="secondary" className="button-margin">Notre Jeu</Button>{' '}
              <Button href="#us" variant="secondary" className="button-margin">Qui nous sommes</Button>{' '}
              <Button href="#team" variant="secondary" className="button-margin">Notre Team</Button>{' '}
            </Nav>
            <Nav>
            <Button href="#download" variant="light" className="button-margin">Télécharger</Button>{' '}
              <ToggleButtonGroup type="radio" name="options" defaultValue={1}>
                  <ToggleButton id="tbg-radio-1" variant="light" value={1}>
                  FR
                  </ToggleButton>
                  <ToggleButton id="tbg-radio-2" variant="light" value={2}>
                  EN
                  </ToggleButton>
              </ToggleButtonGroup>
            </Nav>
          </Navbar.Collapse>
        </Container>
    </Navbar>
  );
}

export default Menu;