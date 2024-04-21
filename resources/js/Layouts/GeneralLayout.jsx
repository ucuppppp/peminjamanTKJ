import React from "react";
import telLogo from "img/TELLOGO.png";

const GeneralLayout = ({ children }) => {

    return (
        <>
        <section className="min-h-screen flex flex-col justify-center items-center">
            <img src={telLogo} alt="Tel Logo" />
            {children}
        </section>
        </>
    )
}

export default GeneralLayout
