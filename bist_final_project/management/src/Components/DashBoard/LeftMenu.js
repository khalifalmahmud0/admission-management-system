import React, { Component } from "react";
import { NavLink } from "react-router-dom";
class LeftMenu extends Component {
  render() {
    var clientWidth = Math.max(
      window.innerWidth,
      document.documentElement.clientWidth
    );
    function HideAfterClickOnMobile() {
      if (clientWidth < 992) {
        document
          .getElementsByTagName("body")[0]
          .classList.remove("sb-sidenav-toggled");
      }
    }

    return (
      <div id="layoutSidenav_nav">
        <nav
          className="sb-sidenav accordion sb-sidenav-dark"
          id="sidenavAccordion"
        >
          <div className="sb-sidenav-menu">
            <div className="nav">
              <NavLink
                to="/dashboard"
                className="nav-link"
                onClick={HideAfterClickOnMobile}
              >
                Dashboard
              </NavLink>
              <NavLink
                to="/profile"
                className="nav-link"
                onClick={HideAfterClickOnMobile}
              >
                Profile
              </NavLink>
              {/* <NavLink to="/role" className="nav-link">
                Role Management
              </NavLink> */}
              {/* <NavLink to="/sitename" className="nav-link">
                Site Name
              </NavLink> */}
              {/* <NavLink to="/introtitle" className="nav-link">
                Intro Title
              </NavLink> */}
              {/* <NavLink to="/sitetitle" className="nav-link">
                Site Title
              </NavLink> */}
              {/* <NavLink to="/latestnews" className="nav-link">
                Latest News
              </NavLink> */}
              {/* <NavLink to="/latestnewslist" className="nav-link">
                Latest News List
              </NavLink> */}
              {/* <NavLink to="/authoritysignature" className="nav-link">
                Authority Signature
              </NavLink> */}
              {/* <NavLink to="/adddepartment" className="nav-link">
                Add Department
              </NavLink> */}
              {/* <NavLink to="/departments" className="nav-link">
                Departments
              </NavLink> */}
              {/* <NavLink to="/paymentnow" className="nav-link">
                Payment Now
              </NavLink> */}
              {/* <NavLink to="/paymentactivities" className="nav-link">
                Payment Activities
              </NavLink> */}
              {/* <NavLink to="/admissionnow" className="nav-link">
                Admission Now
              </NavLink> */}
              {/* <NavLink to="/admissionlist" className="nav-link">
                Admission List
              </NavLink> */}
              {/* <NavLink to="/admitcard" className="nav-link">
                Admit Card
              </NavLink> */}
            </div>
          </div>
        </nav>
      </div>
    );
  }
}

export default LeftMenu;
