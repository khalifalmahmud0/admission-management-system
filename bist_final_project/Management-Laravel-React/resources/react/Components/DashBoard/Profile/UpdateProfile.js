import React, { Component, Fragment } from "react";

class UpdateProfile extends Component {
  render(props) {
    return (
      <Fragment>
        <h3 style={{ textAlign: "center", textTransform: "capitalize" }}>
          {this.props.title}
        </h3>
        <hr />
        <form>
          <div className="form-group">
            <label>Name</label>
            <input required type="text" className="form-control"></input>
          </div>
          <div className="form-group">
            <label>Email</label>
            <input required type="email" className="form-control"></input>
          </div>
          <div className="form-group">
            <label>Profile Photo</label>
            <input required type="file" className="form-control"></input>
          </div>
          <input
            type="submit"
            className="form-submit btn btn-primary btn-lg btn-block"
            value="Update"
          />
        </form>
      </Fragment>
    );
  }
}

export default UpdateProfile;
