import React, { Component } from "react";
import { NavLink } from "react-router-dom";
class Footer extends Component {
  render(props) {
    return (
      <footer className="py-4 bg-light mt-auto">
        <div className="container-fluid">
          <div className="d-flex align-items-center justify-content-between small">
            <div className="text-muted">
              Copyright &copy; <NavLink to="#">khalifalmahmud</NavLink>
            </div>
            <div>
              <NavLink to="#">Privacy Policy</NavLink>
              &middot;
              <NavLink to="#">Terms &amp; Conditions</NavLink>
            </div>
          </div>
        </div>
      </footer>
    );
  }
}

export default Footer;
