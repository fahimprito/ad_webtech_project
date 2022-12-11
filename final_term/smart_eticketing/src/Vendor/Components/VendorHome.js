import { useState, useEffect } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';


const VendorHome = () => {
    useEffect(() => {
        document.title='Smart e-Ticket';
    }, []);

    return (
        <>

            <Container fluid>
                <Row>
                    <Col>

                        <div class=" p-5 row text-center ">
                            <div class="col-12">

                                <h2>WELCOME TO THE LARGEST ONLINE TICKET WEBSITE </h2>
                            </div>
                        </div>
                

                        <div class="contrainer py-1">
                            <div class="row text-center">
                                <div class="col-12">
                                    <h3>Welcome to vendor home page  </h3>
                                </div>
                            </div>

                            
                            <div className="row p-5 " >
                                <div className="py-2 col-2 bg-light ">
                                    <nav className="nav flex-column">
                                        <a className="nav-link" href="/vendor/transportsList">Transport List</a>
                                        <a className="nav-link" href="#">Information</a>
                                        <a className="nav-link" href="#">Customer Review</a>
                                    </nav>
                                </div>
                                <div className="col-8">
                                    <img style={{ width: "1300px" }} src="/Images/bushome.jpg" alt="bushome" />
                                </div>
                                <div className="col-2">
                                
                                </div>
                            </div>


                            <div className= 'row p-5 text-center'  >

                                <div class="col-2">
                                

                                </div>        
                                <div  class="p-4 col-2 bg-light">
                                    <Card border="primary" style={{ width: '18rem' }}>
                                        <Card.Body>
                                            <Card.Text>
                                                <h5>
                                                LARGEST TRANSPOTATION <br></br>
                                                NETWORK </h5>
                                            </Card.Text>
                                        </Card.Body>
                                    </Card>
                                </div>
                                <div class="p-4 col-2 bg-light">
                                    <Card border="primary" style={{ width: '18rem' }}>
                                        <Card.Body>
                                            <Card.Text>
                                                <h5>COMFORT ON <br></br> BOARD
                                                </h5>
                                            </Card.Text>
                                        </Card.Body>
                                    </Card>
                                    
                                </div>
                                <div class="p-4 col-2 bg-light">
                                    <Card border="primary" style={{ width: '18rem' }}>
                                        <Card.Body>
                                            <Card.Text>
                                                <h5>
                                                BUS ARRIVE <br></br> ON TIME</h5>
                                            </Card.Text>
                                        </Card.Body>
                                    </Card>
                                    
                                </div>
                                <div class="p-4 col-2 bg-light">
                                    <Card border="primary" style={{ width: '18rem' }}>
                                        <Card.Body>
                                            <Card.Text>
                                                <h5> ENVIRONMENTALLY <br></br> 
                                                FRIENDLY

                                                </h5>
                                            </Card.Text>
                                        </Card.Body>
                                    </Card>
                                </div>


                            
                            </div>
                        </div>
                    </Col>

                </Row>

            </Container>.    

            

            
            
        </>
    )
}

export default VendorHome