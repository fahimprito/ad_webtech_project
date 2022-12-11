import React from 'react'
import VendorHeader from '../Components/VendorHeader'
import Footer from '../../Public/Components/Footer'
import TransportsList from '../Components/TransportsList'

const TransportsListPage = () => {
  return (
    <>
        <VendorHeader />
        <TransportsList />
        <Footer />
    </>
  )
}

export default TransportsListPage