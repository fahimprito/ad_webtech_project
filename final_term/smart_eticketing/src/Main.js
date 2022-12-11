import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import RegistrationPage from './Public/Pages/RegistrationPage';
import StartingPage from './Public/Pages/StartingPage';
import LoginPage from './Public/Pages/LoginPage';
import VendorHomePage from './Vendor/Pages/VendorHomePage';
import TransportsListPage from './Vendor/Pages/TransportsListPage';
import ProfilePages from './Vendor/Pages/ProfilePages';

const Main = () => {
    return (
      <div>
        <BrowserRouter>
          <Routes>
  
            {/* Public Route */}

            <Route path="/" element={<StartingPage />} />
            <Route path="/registration" element={<RegistrationPage />} />
            <Route path="/login" element={<LoginPage />} />
            
            
            {/* Vendor */}
            <Route path="/vendor/home" element={<VendorHomePage />} />
            <Route path="/vendor/transportsList" element={<TransportsListPage />} />
            <Route path="/vendor/profile" element={<ProfilePages />} />


            
            
          </Routes>
        </BrowserRouter>
      </div>
    )
  }
  
export default Main