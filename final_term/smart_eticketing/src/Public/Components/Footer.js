
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';

const Footer = () => {
    

    return (
        <>
            

            <Container>
                <Row>

                    <Col>
                        <div className="bg-light text-center text-lg-start">
                    
                        <div className="container p-4">
                            
                            <div className="row">
                            
                                <div className="col-lg-6 col-md-12 mb-4 mb-md-0">
                                    <h5 className="text-uppercase">Smart E-Ticket System</h5>

                                    <p>
                                    This is the best online bus ticket instant booking <br></br>
                                    website and mobile app for travelers with comfort, <br></br>
                                    safety and comprehensive facilities. The website <br></br>
                                    was founded in the year 2022. 
                                    </p>
                                    
                                    
                                </div>
                            
                                <div className="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 className="text-uppercase">Services</h5>

                                    <ul className="list-unstyled mb-0">
                                    <li>
                                        <a href="#!" className="text-dark">Bus ticket</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-dark">Train ticket</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-dark">Launch ticket</a>
                                    </li>
                                    </ul>
                                </div>
                            
                                <div className="col-lg-3 col-md-6 mb-4 mb-md-0">
                                    <h5 className="text-uppercase mb-0">Social</h5>

                                    <ul className="list-unstyled">
                                    <li>
                                        <a href="#!" className="text-dark">
                                        
                                        facebook</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-dark">
                                        
                                        instagram</a>
                                    </li>
                                    <li>
                                        <a href="#!" className="text-dark">
                                        
                                        twitter</a>
                                    </li>
                                    
                                    
                                    </ul>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                        <div className="text-center p-3" >
                            © 2022 Copyright:
                            <a className="text-dark" href="#">SmarteTicket.com</a>
                        </div>
                    
                    </div>

                    </Col>
                </Row>

            </Container>
            
            
        </>
    )
}

export default Footer