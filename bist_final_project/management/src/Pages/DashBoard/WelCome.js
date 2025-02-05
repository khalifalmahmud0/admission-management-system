import React, { Component } from "react";
import Header from "../../Components/DashBoard/Header";
import LeftMenu from "../../Components/DashBoard/LeftMenu";
import Footer from "../../Components/DashBoard/Footer";

class WelCome extends Component {
  render() {
    // var clientWidth = Math.max(
    //   window.innerWidth,
    //   document.documentElement.clientWidth
    // );
    // var clientHeight = Math.max(
    //   window.innerHeight,
    //   document.documentElement.clientHeight
    // );
    // if (clientWidth < 992) {
    //   console.log("Choto");
    //   document
    //     .getElementsByTagName("body")[0]
    //     .classList.remove("sb-sidenav-toggled");
    // }
    // console.log(clientWidth);
    // console.log(clientHeight);
    return (
      <div className="sb-nav-fixed" id="management_dashboard">
        <Header />
        <div id="layoutSidenav">
          <LeftMenu />
          <div id="layoutSidenav_content">
            <main className="allContant">
              <div className="container-fluid">
                <h1>Hi Welcome</h1>
              </div>
            </main>
            <Footer />
          </div>
        </div>
      </div>
    );
  }
}

export default WelCome;
