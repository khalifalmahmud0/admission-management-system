import React, { Component } from "react";
import { Fragment } from "react";
import { Row, Col } from "react-bootstrap";
import { NavLink } from "react-router-dom";

class ProfileTopNav extends Component {
  render() {
    return (
      <Fragment>
        <Row className="profileEditOptions">
          <Col lg={4} md={4} sm={12} className="profileEditOptions_single">
            <NavLink to="/profile/update-info">
              <button type="button" className="btn btn-info">
                Update Profile
              </button>
            </NavLink>
          </Col>
          <Col lg={4} md={4} sm={12} className="profileEditOptions_single">
            <NavLink to="/profile/update-social">
              <button type="button" className="btn btn-info">
                Update Social Media
              </button>
            </NavLink>
          </Col>
          <Col lg={4} md={4} sm={12} className="profileEditOptions_single">
            <NavLink to="/profile/update-pass">
              <button type="button" className="btn btn-info">
                Change PassWord
              </button>
            </NavLink>
          </Col>
        </Row>
        <hr />
      </Fragment>
    );
  }
}

export default ProfileTopNav;
