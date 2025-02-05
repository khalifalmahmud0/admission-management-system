import React, { Component, Fragment } from "react";
class UpdatePassword extends Component {
  constructor(props) {
    super(props);
    this.state = {
      password: {
        type: "password",
        text: "Show",
      },
    };
  }
  showPassword = () => {
    this.setState({
      password: {
        type: "text",
        text: "Hide",
      },
    });
  };
  hidePassword = () => {
    this.setState({
      password: {
        type: "password",
        text: "Show",
      },
    });
  };
  render() {
    var passtext =
      "Show" === this.state.password.text ? (
        <img
          width="20px"
          src={process.env.PUBLIC_URL + "/assets/img/eyeon.png"}
          alt=""
          onClick={this.showPassword}
          className="adminInputPassHideShow"
        />
      ) : (
        <img
          width="20px"
          src={process.env.PUBLIC_URL + "/assets/img/eyeoff.png"}
          alt=""
          onClick={this.hidePassword}
          className="adminInputPassHideShow"
        />
      );
    return (
      <Fragment>
        <h3 style={{ textAlign: "center", textTransform: "capitalize" }}>
          {this.props.title}
        </h3>
        <hr />
        <form>
          <div className="form-group">
            <label>Enter Password</label>
            <input
              type={this.state.password.type}
              className="form-control"
              placeholder="Enter New Password"
              required
            />
            {passtext}
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

export default UpdatePassword;
