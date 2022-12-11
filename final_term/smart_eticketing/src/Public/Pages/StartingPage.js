import React from 'react'
import Header from '../Components/Header'
import Footer from '../Components/Footer'
import StartingHome from '../Components/StartingHome'
import { useState, useEffect } from 'react';

const StartingPage = () => {

  useEffect(() => {
    document.title='Smart e-Ticket';
  }, []);

  return (
    <>
        <Header />
        <StartingHome />
        <Footer />
    </>
  )
}

export default StartingPage