import React from "react";
// import React, { Suspense } from "react";
// import { Outlet } from "react-router-dom";
// import Header from "../header/Header";
// import HelmetAsync from "../helmetAsync/HelmetAsync";
// import { Loader } from "../loader/Loader";
// import Footer from "../footer/Footer";
import soon from '../../assets/imgs/soon.jpg'

const LayoutMain = () => {
  return (
    <>
      <div style={{ width: "100%", height: "100vh", display: "flex", alignItems: "center", justifyContent: "center" }}>
        <img src={soon} alt="soon" style={{ width: "fit-content", height: "fit-content", objectFit: "cover" }} />
        
      </div>
      {/* <Header />
      <HelmetAsync />
      <Suspense fallback={<Loader />}>
        <Outlet />
      </Suspense>
      <Footer /> */}
    </>
  );
};

export default LayoutMain;
