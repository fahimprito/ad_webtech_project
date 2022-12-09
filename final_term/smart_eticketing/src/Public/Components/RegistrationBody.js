import { useState, useEffect } from 'react';
import Container from 'react-bootstrap/Container';
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import AxiosConfig from '../Services/AxiosConfig';

const RegistrationBody = () => {
    const [userType, setUserType] = useState("");
    const [name, setName] = useState("");
    const [username, setUsername] = useState("");
    const [email, setEmail] = useState("");
    const [phone, setPhone] = useState("");
    const [password, setPassword] = useState("");
    const [c_password, setC_Password] = useState("");
    const [gender, setGender] = useState("");
    const [dob, setDob] = useState("");
    const [address, setAddress] = useState("");

    const [errors, setErrors] = useState([]);

    useEffect(() => {
        document.title='Registration';
    }, []);

    // console.log(username);
    const handleform = (event) =>{
        event.preventDefault();
        const data = { userType: userType, name: name, username: username, email: email, phone: phone, password: password, c_password: c_password, gender: gender, dob: dob, address: address };
        
        AxiosConfig.post("registration", data).
            then((resp) => {
                
                debugger;

                alert(resp.data);
                window.location.href = "/login";
            }, (err) => {
                debugger;
                setErrors(err.response.data);
                console.log(errors.gender);
            })
        
    }


    return (
        <>
            <Container>
                <Row>
                    <Col></Col>
                    <Col xs={8}>
                        <div className="shadow p-5 mb-5 bg-body rounded">

                            <form action="" onSubmit={handleform}>
                                <div className="row align-items-center">
                                    <div className="mb-3 col-md-3 ps-4">
                                        <h3 className="mb-5">Registration</h3>
                                    </div>
                                </div>

                                <div className="row align-items-center">
                                    <div className="mb-3 col-md-3 ps-4">
                                        <label for="userType">Registration as </label>
                                    </div>
                                    

                                    <div className="mb-3 col-md-9 pe-4">
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="userType" id="inlineRadio1" value="admin" onChange={(e) => { setUserType(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio1">Admin</label>
                                        </div>
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="userType" id="inlineRadio2" value="vendor" onChange={(e) => { setUserType(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio2">Vendor</label>
                                        </div>
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="userType" id="inlineRadio3" value="customer" onChange={(e) => { setUserType(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio3">Customer</label>
                                        </div>
                                        <br/>
                                        <span className="text-danger">{errors.userType ? errors.userType : ''}</span>

                                    </div>
                                </div>


                                <div className="row align-items-center ">
                                    
                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example1cg">Full name</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="text" id="form3Example1cg" name="name" className="form-control" value={name} onChange={(e) => { setName(e.target.value) }}/>
                                        <span className="text-danger">{errors.name ? errors.name[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example1cg">UserName</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <label className="visually-hidden" for="autoSizingInputGroup">Username</label>
                                        <div className="input-group">
                                            <div className="input-group-text">@</div>
                                            <input type="text" className="form-control" id="autoSizingInputGroup" name="username" placeholder="Username" value={username} onChange={(e) => { setUsername(e.target.value) }}/>
                                            <br/>
                                            <span className="text-danger">{errors.username ? errors.username[0] : ''}</span>
                                        </div>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example1cg">Email address</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="email" className="form-control" name="email"  placeholder="example@example.com" value={email} onChange={(e) => { setEmail(e.target.value) }}/>
                                        <span className="text-danger">{errors.email ? errors.email[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Examplea8">Phone Number</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="text" id="form3Examplea8"  name="phone"  className="form-control " value={phone} onChange={(e) => { setPhone(e.target.value) }}/>
                                        <span className="text-danger">{errors.phone ? errors.phone[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example4cg">Password</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="password" id="form3Example4cg" name="password"  className="form-control " value={password} onChange={(e) => { setPassword(e.target.value) }}/>
                                        <span className="text-danger">{errors.password ? errors.password[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example4cg">Confirm Password</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="password" id="form3Example4cg" name="c_password" className="form-control " value={c_password} onChange={(e) => { setC_Password(e.target.value) }}/>
                                        <span className="text-danger">{errors.c_password ? errors.c_password[0] : ''}</span>
                                    </div>


                                    <div className="mb-3 col-md-3 ps-4">
                                        <label for="gender">Gender </label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" onChange={(e) => { setGender(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" onChange={(e) => { setGender(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div className="form-check form-check-inline">
                                            <input className="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others" onChange={(e) => { setGender(e.target.value) }}/>
                                            <label className="form-check-label" for="inlineRadio3">Others</label>
                                        </div>
                                        <span className="text-danger">{errors.gender ? errors.gender[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example1cg">Date of Birth</label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <input type="date" name="dob" value={dob} onChange={(e) => { setDob(e.target.value) }} className="form-control" />
                                        <span className="text-danger">{errors.dob ? errors.dob[0] : ''}</span>
                                    </div>

                                    <div className="mb-3 col-md-3 ps-4">
                                        <label className="form-label" for="form3Example4cg">Address </label>
                                    </div>
                                    <div className="mb-3 col-md-9 pe-4">
                                        <textarea type="text" className="form-control" rows="3" name="address" value={address} onChange={(e) => { setAddress(e.target.value) }} placeholder="Address"></textarea>
                                        <span className="text-danger">{errors.address ? errors.address[0] : ''}</span>
                                    </div>



                                    
                                </div>

                                <div className="row align-items-center ">
                                        <div className="mb-3 col-md-5 ps-4 ">
                                            <button type="submit" className="btn btn-primary btn-lg">Registration</button>
                                        </div>
                                        <div className="text-center col-md-7 pe-4">
                                            <p>Already have an account? <a href="/login">Login</a></p>
                                        </div>
                                </div>


                            </form>
                        </div>
                    </Col>
                    <Col></Col>
                </Row>
            </Container>
            
        </>
    )
}

export default RegistrationBody