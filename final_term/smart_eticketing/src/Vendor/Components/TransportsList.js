import { useState, useEffect } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import Card from 'react-bootstrap/Card';
import AxiosConfig from '../../Public/Services/AxiosConfig';


const TransportsList = () => {

    const [Transports_List, setTransports_List] = useState([]);
    
    useEffect(()=>{
        AxiosConfig.get("/vendor/transportList")
        .then(resp=>{
            console.log(resp.data);
            setTransports_List(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);

    return (
        <>

            <Container fluid>
                <Row>
                    <Col>
                    <div class="contrainer py-2">
                        <div class="row ">
                            <div class="col-2">
                                <a class="nav-link" href="/vendor/home"> Back </a>
                            </div>
                            <div class="col-8 text-center">
                                <h3>Transport Information </h3>
                            </div>
                        </div>



                        <div class="row py-5">
                            <div class="col-2">
                                <nav class="nav flex-column">
                                    <a class="nav-link" href="#">Add new transports</a>
                                    <a class="nav-link" href="#">Transport details</a>
                                    <a class="nav-link" href="#">Transport Seats</a>
                                </nav>

                            </div>
                            <div class="col-8 text-center">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#Transport ID</th>
                                            <th scope="col">Transport Name</th>
                                            <th scope="col">Transport Type</th>
                                            <th scope="col">From</th>
                                            <th scope="col">To</th>
                                            <th scope="col">Date</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>

                                    {Transports_List.map(data=>(
                                        <tr key={data.transport_id}>
                                            <td >{data.transport_name}</td>
                                            <td >{data.transport_type}</td>
                                            <td >{data.route_from}</td>
                                            <td >{data.route_to}</td>
                                            <td >{data.transport_date}</td>
                                            <td>
                                                <a href="">
                                                    <button type="button" class="btn btn-outline-success btn-sm" >View Seats</button>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    ))}
                                    
                                    

                                    
                                </table>
                                {/* <nav aria-label="Page navigation example">
                                    {{$data->links('pagination::bootstrap-5')}}
                                </nav> */}
                                
                                
                            </div>
                            <div class="col-2">
                                
                            </div>
                        </div>
                        
                        
                    </div>
                    </Col>

                </Row>

            </Container>.    

            

            
            
        </>
    )
}

export default TransportsList