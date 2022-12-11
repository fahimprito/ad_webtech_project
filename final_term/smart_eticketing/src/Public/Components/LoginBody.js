import { useState, useEffect } from 'react';
import axios from "axios";
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import AxiosConfig from '../Services/AxiosConfig';

const LoginBody = () => {
    const [userType, setUserType] = useState("");
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const [errors, setErrors] = useState([]);
    const[token, setToken]= useState("");

    useEffect(() => {
        document.title='Login';
    }, []);
    
    const handleform = (event) =>{
        event.preventDefault();
        const data = { userType: userType, email: email, password: password, };
        
        console.log(userType);
        console.log(data);
        AxiosConfig.post("/login", data).
            then((resp) => {
                
                debugger;

                

                if(resp.data.msg){

                    localStorage.setItem('userType', resp.data.userType);
                    localStorage.setItem('user_id', resp.data.user.id);
                    localStorage.setItem('username', resp.data.user.username);

                    if(resp.data.userType=="admin"){
                        alert(resp.data.msg);

                    }else if(resp.data.userType=="vendor"){
                        window.location.href = "/vendor/home";

                    } else if(resp.data.userType=="customer"){
                        alert(resp.data.msg);
                        //
                        var token = resp.data.token;
                        console.log(token);
                        var user = {userId: token.userid, access_token:token.token};
                        localStorage.setItem('user',JSON.stringify(user));
                        console.log(localStorage.getItem('user'));
                    }
                }
                if(resp.data.errmsg){
                    alert(resp.data.errmsg);
                }
                
                // window.location.href = "/login";
            }, (err) => {
                debugger;
                setErrors(err.response.data);
                console.log(errors.gender);
            })
        
    }



    return (
        <Container>
            <Row>
                <Col></Col>
                <Col xs={5}>
                    <div className="shadow p-5 mb-5 bg-body rounded">
                        <form action="" onSubmit={handleform}>

                            <h3 class="mb-5">Login</h3>
                            <div class="row align-items-center">
                                <div class="mb-3 col-md-6 pb-2">
                                    <label for="userType">User Type:</label>
                                </div>
                                

                                <div class="mb-3 col-md-6 pb-2" >
                                    <select class="form-select" onChange={(e) => { setUserType(e.target.value) }} name="userType"  >
                                        <option value="admin"  >Admin</option>
                                        <option value="vendor" >Vendor</option>
                                        <option value="customer"  >Customer</option> 
                                    </select>
                                    
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value={email} onChange={(e) => { setEmail(e.target.value) }}/>
                                <span className="text-danger">{errors.email ? errors.email : ''}</span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" value={password}   onChange={(e) => { setPassword(e.target.value) }} />
                                <span className="text-danger">{errors.password ? errors.password : ''}</span>
                            </div>
                            {/* <!-- 2 column grid layout for inline styling --> */}
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                {/* <!-- Checkbox --> */}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                                </div>

                                <div class="col">
                                {/* <!-- Simple link --> */}
                                <a href="#!">Forgot password?</a>
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" value="Sign in" class="btn btn-primary btn-block mb-4">Sign in</button>
                            </div>
                            
                            <div class="text-center">
                                <p>Don't have an account? <a href="/registration">Register</a></p>
                            </div>

                            
                        </form>
                    </div>


                </Col>
                <Col></Col>
            </Row>
        
        </Container>
    );
}

export default LoginBody;