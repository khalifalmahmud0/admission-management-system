import React, { Component } from "react";
import Header from "../../../Components/DashBoard/Header";
import LeftMenu from "../../../Components/DashBoard/LeftMenu";
import ProfileTopNav from "../../../Components/DashBoard/Profile/ProfileTopNav";
import ShowCurrentProfile from "../../../Components/DashBoard/Profile/ShowCurrentProfile";
import Footer from "../../../Components/DashBoard/Footer";
import { Container, Row, Col } from "react-bootstrap";
import UpdatePassword from "../../../Components/DashBoard/Profile/UpdatePassword";
class ProfilePassChange extends Component {
  render() {
    return (
      <div className="sb-nav-fixed" id="management_dashboard">
        <Header />
        <div id="layoutSidenav">
          <LeftMenu />
          <div id="layoutSidenav_content">
            <main className="allContant">
              <div className="container-fluid">
                <Container>
                  <Row>
                    <Col lg={8} md={8} sm={6}>
                      <div className="editProfile">
                        <ProfileTopNav />
                        <UpdatePassword title="Change PassWord" />
                      </div>
                    </Col>
                    <ShowCurrentProfile />
                  </Row>
                </Container>
              </div>
            </main>
            <Footer />
          </div>
        </div>
      </div>
    );
  }
}

export default ProfilePassChange;
