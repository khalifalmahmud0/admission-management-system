import React, { Component, Fragment } from "react";
import { NavLink } from "react-router-dom";

class LeftMenu extends Component {
    HideAfterClickOnMobile = () => {
        var clientWidth = Math.max(
            window.innerWidth,
            document.documentElement.clientWidth
        );
        if (clientWidth < 992) {
            document
                .getElementsByTagName("body")[0]
                .classList.remove("sb-sidenav-toggled");
        }
    };

    render() {
        return (
            <Fragment>
                <div id="layoutSidenav_nav">
                    <nav
                        className="sb-sidenav accordion sb-sidenav-dark"
                        id="sidenavAccordion"
                    >
                        <div className="sb-sidenav-menu">
                            <div className="nav">
                                {/* DashBoard Menu & Submenu */}
                                <NavLink
                                    className="nav-link collapsed"
                                    to="#"
                                    data-toggle="collapse"
                                    data-target="#collapseDashboard"
                                    aria-expanded="false"
                                    aria-controls="collapseDashboard"
                                >
                                    <div className="sb-nav-link-icon">
                                        <i className="fas fa-book-open"></i>
                                    </div>
                                    Dashboard
                                    <div className="sb-sidenav-collapse-arrow">
                                        <i className="fas fa-angle-down"></i>
                                    </div>
                                </NavLink>
                                <div
                                    className="collapse"
                                    id="collapseDashboard"
                                    aria-labelledby="headingTwo"
                                    data-parent="#sidenavAccordion"
                                >
                                    <nav
                                        className="sb-sidenav-menu-nested nav accordion"
                                        id="sidenavAccordionPages"
                                    >
                                        <NavLink
                                            className="nav-link"
                                            to="/dashboard"
                                            // data-toggle=""
                                            // data-target="#collapseDashboard"
                                            // aria-expanded="true"
                                            // aria-controls="collapseDashboard"
                                            onClick={
                                                this.HideAfterClickOnMobile
                                            }
                                        >
                                            School Name
                                        </NavLink>
                                        <NavLink
                                            className="nav-link"
                                            to="/fileupload"
                                            // data-toggle="collapse"
                                            // data-target="#collapseDashboard"
                                            // aria-expanded="false"
                                            // aria-controls="collapseDashboard"
                                            onClick={
                                                this.HideAfterClickOnMobile
                                            }
                                        >
                                            Software Title
                                        </NavLink>
                                        <NavLink
                                            className="nav-link"
                                            to="/b"
                                            // data-toggle="collapse"
                                            // data-target="#collapseDashboard"
                                            // aria-expanded="false"
                                            // aria-controls="collapseDashboard"
                                            onClick={
                                                this.HideAfterClickOnMobile
                                            }
                                        >
                                            Intro
                                        </NavLink>
                                        <NavLink
                                            className="nav-link"
                                            to="/c"
                                            // data-toggle="collapse"
                                            // data-target="#collapseDashboard"
                                            // aria-expanded="false"
                                            // aria-controls="collapseDashboard"
                                            onClick={
                                                this.HideAfterClickOnMobile
                                            }
                                        >
                                            Latest News
                                        </NavLink>
                                        <NavLink
                                            className="nav-link"
                                            to="/d"
                                            // data-toggle="collapse"
                                            // data-target="#collapseDashboard"
                                            // aria-expanded="false"
                                            // aria-controls="collapseDashboard"
                                            onClick={
                                                this.HideAfterClickOnMobile
                                            }
                                        >
                                            All Latest News
                                        </NavLink>
                                    </nav>
                                </div>
                                {/* Profile  */}
                                <NavLink
                                    to="/profile"
                                    className="nav-link"
                                    onClick={this.HideAfterClickOnMobile}
                                >
                                    <div className="sb-nav-link-icon">
                                        <i className="fas fa-tachometer-alt"></i>
                                    </div>
                                    Profile
                                </NavLink>
                                {/* Role Management Menu  */}
                                <a className="nav-link" href="#">
                                    <div className="sb-nav-link-icon">
                                        <i className="fas fa-tachometer-alt"></i>
                                    </div>
                                    Role Management
                                </a>
                                {/* Admission Process Menu & Submenu */}
                                <div className="sb-sidenav-menu-heading">
                                    Admission
                                </div>
                                <a
                                    className="nav-link collapsed"
                                    href="#"
                                    data-toggle="collapse"
                                    data-target="#collapseAdmission"
                                    aria-expanded="false"
                                    aria-controls="collapseAdmission"
                                >
                                    <div className="sb-nav-link-icon">
                                        <i className="fas fa-book-open"></i>
                                    </div>
                                    Admission Process
                                    <div className="sb-sidenav-collapse-arrow">
                                        <i className="fas fa-angle-down"></i>
                                    </div>
                                </a>
                                <div
                                    className="collapse "
                                    id="collapseAdmission"
                                    aria-labelledby="headingTwo"
                                    data-parent="#sidenavAccordion"
                                >
                                    <nav
                                        className="sb-sidenav-menu-nested nav accordion"
                                        id="sidenavAccordionPages"
                                    >
                                        <NavLink
                                            className="nav-link collapsed"
                                            to="/dr"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Add OnGoing Admission
                                        </NavLink>
                                        <NavLink
                                            className="nav-link collapsed"
                                            to="/u"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            OnGoing Admission List
                                        </NavLink>
                                        <NavLink
                                            className="nav-link collapsed"
                                            to="/w"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Payment Now
                                        </NavLink>
                                        <a
                                            className="nav-link collapsed"
                                            href="#"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Payment Activities
                                        </a>
                                        <a
                                            className="nav-link collapsed"
                                            href="#"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Admission Now
                                        </a>
                                        <a
                                            className="nav-link collapsed"
                                            href="#"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Admission List
                                        </a>
                                        <a
                                            className="nav-link collapsed"
                                            href="#"
                                            // data-toggle="collapse"
                                            // data-target="#pagesCollapseAuth"
                                            // aria-expanded="false"
                                            // aria-controls="pagesCollapseAuth"
                                        >
                                            Admit Card
                                        </a>
                                    </nav>
                                </div>
                                {/* Menu End  */}
                            </div>
                        </div>
                        {/* Menu Footer  */}
                        <div className="sb-sidenav-footer">
                            <div className="small">Logged in as:</div>
                            Admin
                        </div>
                    </nav>
                </div>
            </Fragment>
        );
    }
}

export default LeftMenu;
