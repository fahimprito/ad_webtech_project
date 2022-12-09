import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import RegistrationPage from './Public/Pages/RegistrationPage';
import StartingPage from './Public/Pages/StartingPage';
import LoginPage from './Public/Pages/LoginPage';

const Main = () => {
    return (
      <div>
        <BrowserRouter>
          <Routes>
  
            {/* Public Route */}

            <Route path="/" element={<StartingPage />} />
            <Route path="/registration" element={<RegistrationPage />} />
            <Route path="/login" element={<LoginPage />} />
            {/* <Route path="/login" element={<LoginPage />} /> */}
            
            
          </Routes>
        </BrowserRouter>
      </div>
    )
  }
  
export default Main