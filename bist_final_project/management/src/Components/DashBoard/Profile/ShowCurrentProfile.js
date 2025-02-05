import React, { Component } from "react";
import { Col } from "react-bootstrap";
class ShowCurrentProfile extends Component {
  render() {
    return (
      <Col lg={4} md={4} sm={6}>
        <div className="card-deck">
          <div className="card">
            <img
              className="card-img-top profileimage"
              src={process.env.PUBLIC_URL + "/assets/img/profile.png"}
              alt=""
            />
            <div className="card-body">
              <h5 className="card-title">Khalif Al mahmud</h5>
            </div>
            <div className="card-footer">
              <small className="text-muted">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </Col>
    );
  }
}

export default ShowCurrentProfile;
