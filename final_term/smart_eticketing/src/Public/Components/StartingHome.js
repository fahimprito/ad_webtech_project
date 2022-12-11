import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';


const StartingHome = () => {
    

    return (
        <>

            <Container>
                <Row>
                    <Col>

                        <div class=" p-5 row text-center ">
                            <div class="col-12">

                                <h2>WELCOME TO THE LARGEST ONLINE TICKET WEBSITE </h2>
                            </div>
                        </div>
                    </Col>


                </Row>

                <Row>
                    
                    <Col >
                        <div class= 'row p-5 bg-light' >
                            <div class="col-2">


                            </div>
                            <div class="col-8 bg-light">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Search Available Ticket </h5>
                                    </div>
                                    <div class="p-5 card-body mx-auto">
                                        <form class="row p-5 gy-2 gx-3 align-items-center">
                                            <div class="col-auto">  
                                                <label for="route_from" class="form-label">From</label>
                                                    <select id="inputState" class="form-select" name="route_from">
                                                        <option >Choose...</option>
                                                        <option >Dhaka</option>
                                                        <option >Bogra</option>
                                                        <option >Barisal</option>
                                                        <option >Bandarban</option>
                                                        <option >Chittagong</option>
                                                        <option >Comilla</option>
                                                        <option >Dinajpur</option>
                                                        <option >Faridpur</option>
                                                        <option >Jamalpur</option>
                                                        <option >Jessore</option>
                                                        <option >Khulna</option>
                                                        <option >Shariatpur</option>
                                                        <option >Kushtia</option>
                                                        <option >Mymensingh</option>
                                                        <option >Noakhali</option>
                                                        <option >Pabna</option>
                                                        <option >Patuakhali</option>
                                                        <option >Rajshahi</option>
                                                        <option >Rangpur</option>
                                                        <option >Sylhet</option>
                                                        <option >Tangail</option>
                                                    </select>
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    Please select a state.
                                                </div>
                                                
                                            </div>        
                                            <div class="col-auto">  
                                                <label for="route_to" class="form-label">To</label>
                                                    <select id="inputState" class="form-select" name="route_to">
                                                        <option >Choose...</option>
                                                        <option >Dhaka</option>
                                                        <option >Bogra</option>
                                                        <option >Barisal</option>
                                                        <option >Bandarban</option>
                                                        <option >Chittagong</option>
                                                        <option >Comilla</option>
                                                        <option >Dinajpur</option>
                                                        <option >Faridpur</option>
                                                        <option >Jamalpur</option>
                                                        <option >Jessore</option>
                                                        <option >Khulna</option>
                                                        <option >Shariatpur</option>
                                                        <option >Kushtia</option>
                                                        <option >Mymensingh</option>
                                                        <option >Noakhali</option>
                                                        <option >Pabna</option>
                                                        <option >Patuakhali</option>
                                                        <option >Rajshahi</option>
                                                        <option >Rangpur</option>
                                                        <option >Sylhet</option>
                                                        <option >Tangail</option>
                                                    </select>
                                                
                                                
                                            </div>
                                            <div class="col-auto">
                                                    
                                                <label class="col-auto" for="form3Example1cg">Date </label>
                                                <input type="date" name="transport_date" value="{{old('transport_date')}}" class="form-control" />
                                                  
                                                

                                            </div>

                                        
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-2"> 
                            </div>

                        </div>
                    </Col>
                    

                </Row>

            </Container>.   

            <Col>
                <div class="p-5 row bg-light">
                    <div class="col-2"> 
                    </div>

                    <div class="col-8"> 
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                <th scope="col"><h4>Available Bus Operators</h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Abdullah Paribahan</td>
                                <td>Tisha Group</td>
                                <td>Shyamoli SP</td>
                                <td>Hanif Enterprise</td>
                                <td>Dipjol Enterprise</td>
                                </tr>
                                <tr>
                                <td>Sheba Transport</td>
                                <td>Shyamoli Plus Pvt Ltd</td>
                                <td>Saintmartin Hyundai (Robi Express)</td>
                                <td>Chaklader Paribahan</td>
                                <td>Thornton</td>
                                </tr>
                                <tr>
                                <td>Alhamra Paribahan</td>
                                <td>Manik Express</td>
                                <td>Agomony Express</td>
                                <td>Green Line</td>
                                <td>Elish Paribahan</td>
                                </tr>
                                <tr>
                                <td>S.R Travels (Pvt) Ltd</td>
                                <td>Diganta Express</td>
                                <td>Dhaka Line</td>
                                <td>Ena Transport (Pvt) Ltd</td>
                                <td>Emad Paribahan(Pvt.)Ltd.</td>
                                </tr>
                            </tbody>
                        </table>


                    </div>

                </div>
            </Col> 

            

            
            
        </>
    )
}

export default StartingHome