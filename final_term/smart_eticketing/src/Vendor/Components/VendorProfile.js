import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';


const VendorProfile = () => {
    

    return (
        <>

            <Container fluid>
                <Row>
                    <Col>
                    <div class="card">
                        <div class="card-body text-center">
                            
                            <img src="https://t4.ftcdn.net/jpg/00/65/77/27/360_F_65772719_A1UV5kLi5nCEWI0BNLLiFaBPEkUbv5Fv.jpg"
                                alt="admin avatar" class="img-fluid mt-5" />

                            <h5 class="mt-5"></h5>
                            <p class="text-muted my-2">Vendor, Smart e-ticket</p>
                            <p class="text-muted my-2"></p>

                            <div class="pt-5">
                                
                                <form action="#" >
                                    <div>
                                        <input class="form-control form-control-sm" id="formFileSm" type="file"/>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-1" >Update Profile Image</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </Col>
                    <Col xs={8}>
                        <Card border="secondery" >
                            <Card.Body>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">ID</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Gender</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">DOB</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>
                                
                                <Row>
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"></p>
                                    </div>
                                </Row>

                                <Row>
                                    <div class="row pt-4">
                                        <div class="justify-content-center">
                                            <a href="#" class="btn btn-primary mr-1">Edit Profile</a>
                                            <a href="#" class="btn btn-primary mr-1">Change Password</a>
                                        </div>
                                    </div>

                                </Row>
                            </Card.Body>
                        </Card>
                        
                    </Col>


                </Row>

            </Container>.    

            

            
            
        </>
    )
}

export default VendorProfile