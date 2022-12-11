import { Link } from "react-router-dom";
import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';

const VendorHeader = () => {
    

    return (
        <>

            <Navbar className="shadow mb-5 " bg="Light"  expand="lg" >
                <Container fluid >
                    <Navbar.Brand href="/vendor/home"><h3>Smart e-Ticket</h3></Navbar.Brand>
                    <Navbar.Toggle aria-controls="navbarScroll" />
                    <Navbar.Collapse id="navbarScroll">
                        <Nav
                            className=" m-auto my-2 my-lg-0"
                            style= {{ maxHeight: '100px'  }} 
                            navbarScroll
                        >
                            <Nav.Link href="/vendor/home">Home</Nav.Link>

                            <Nav.Link href="#action2">About</Nav.Link>

                            <Nav.Link href="#action2">Contact</Nav.Link>

                            <Button variant="outline-success">Buy Ticket</Button>{' '}
                        </Nav>
                        <Nav className="mr-auto my-2 my-lg-0">
                            <NavDropdown 
                                align="end"
                                title="Profile"
                                id="dropdown-menu-align-end">
                                <NavDropdown.Item href="/vendor/profile">Profile</NavDropdown.Item>
                                <NavDropdown.Item href="#action/3.2">Settings</NavDropdown.Item>
                                <NavDropdown.Divider />
                                <NavDropdown.Item href="/login">
                                    Logout
                                </NavDropdown.Item>
                            </NavDropdown>
                        
                        </Nav>
                    </Navbar.Collapse>
                </Container>
            </Navbar>
            
        </>
    )
}

export default VendorHeader