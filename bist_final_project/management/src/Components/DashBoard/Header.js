import React, { Component } from "react";
import { NavLink } from "react-router-dom";

class Header extends Component {
  constructor() {
    super();
    this.state = {
      navtoggle: 1,
    };
  }
  nav_add_class = () => {
    this.setState({
      navtoggle: 0,
    });
    document
      .getElementsByTagName("body")[0]
      .classList.add("sb-sidenav-toggled");
  };
  nav_remove_class = () => {
    this.setState({
      navtoggle: 1,
    });
    document
      .getElementsByTagName("body")[0]
      .classList.remove("sb-sidenav-toggled");
  };
  render() {
    var navShowHide =
      1 === this.state.navtoggle ? (
        <button
          className="btn btn-link btn-sm order-1 order-lg-0"
          id="sidebarToggle"
          onClick={this.nav_add_class}
        >
          <i className="fas fa-bars"></i>
        </button>
      ) : (
        <button
          className="btn btn-link btn-sm order-1 order-lg-0"
          id="sidebarToggle"
          onClick={this.nav_remove_class}
        >
          <i className="fas fa-bars"></i>
        </button>
      );
    return (
      <nav className="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        {navShowHide}
        <span className="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0"></span>
        <ul className="navbar-nav ml-auto ml-md-0">
          <li className="nav-item dropdown">
            <NavLink
              className="nav-link dropdown-toggle"
              id="userDropdown"
              to="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i className="fas fa-user fa-fw"></i>
            </NavLink>
            <div
              className="dropdown-menu dropdown-menu-right"
              aria-labelledby="userDropdown"
            >
              <NavLink className="dropdown-item" to="/profile/update-info">
                View Profile
              </NavLink>
              <NavLink className="dropdown-item" to="/login">
                Logout
              </NavLink>
            </div>
          </li>
        </ul>
      </nav>
    );
  }
}

export default Header;
