import { Link } from "react-router-dom";
import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';

const Header = () => {
    

    return (
        <>

            <Navbar className="shadow mb-5 " bg="Light"  expand="lg" >
                <Container fluid >
                    <Navbar.Brand href="/"><h3>Smart e-Ticket</h3></Navbar.Brand>
                    <Navbar.Toggle aria-controls="navbarScroll" />
                    <Navbar.Collapse id="navbarScroll">
                    <Nav
                        className=" m-auto my-2 my-lg-0"
                        style= {{ maxHeight: '100px'  }} 
                        navbarScroll
                    >
                        <Nav.Link href="/">Home</Nav.Link>

                        <Nav.Link href="#action2">About</Nav.Link>

                        <Nav.Link href="#action2">Contact</Nav.Link>

                        <Button variant="outline-success">Buy Ticket</Button>{' '}
                    </Nav>
                    <Form className="d-flex">
                        <Nav.Link href="/login">Login</Nav.Link>
                    </Form>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
            
        </>
    )
}

export default Header