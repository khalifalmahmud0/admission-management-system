import React, { Component, Fragment } from "react";

class UpdateProfileSocialMedia extends Component {
  render() {
    return (
      <Fragment>
        <h3 style={{ textAlign: "center", textTransform: "capitalize" }}>
          {this.props.title}
        </h3>
        <hr />
        <form>
          <div className="form-group">
            <label>Facebook</label>
            <input type="url" className="form-control" required></input>
          </div>
          <div className="form-group">
            <label>Twitter</label>
            <input type="url" className="form-control" required></input>
          </div>
          <div className="form-group">
            <label>LinkedIn</label>
            <input type="url" className="form-control" required></input>
          </div>
          <div className="form-group">
            <label>GitHub</label>
            <input type="url" className="form-control" required></input>
          </div>
          <div className="form-group">
            <label>Personal Website</label>
            <input type="url" className="form-control" required></input>
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

export default UpdateProfileSocialMedia;
