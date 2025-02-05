import React, { Component, Fragment } from "react";
import {NavLink} from "react-router-dom";
class Registration extends Component {
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
    const passtext =
        "Show" === this.state.password.text ? (
            <img
                width="20px"
                src={process.env.PUBLIC_URL + "/assets/img/eyeon.png"}
                alt=""
                onClick={this.showPassword}
                className="field-icon passwordshow"
            />
        ) : (
            <img
                width="20px"
                src={process.env.PUBLIC_URL + "/assets/img/eyeoff.png"}
                alt=""
                onClick={this.hidePassword}
                className="field-icon passwordshow"
            />
        );
    return (
      <Fragment>
        <div className="authbody">
          <div className="container">
            <div className="signup-content">
              <form action="/login">
                <h2 className="auth_header">Create account</h2>
                <div className="form-group">
                  <input
                    type="text"
                    className="form-input"
                    placeholder="Enter Your Name"
                    required
                  />
                </div>
                <div className="form-group">
                  <input
                    type="email"
                    className="form-input"
                    placeholder="Enter Your Email"
                    required
                  />
                </div>

                <div className="form-group">
                  <input
                    type={this.state.password.type}
                    className="form-input"
                    placeholder="Enter Your Password"
                    required
                  />
                  {passtext}
                </div>

                <div className="form-group">
                  <input
                    type={this.state.password.type}
                    className="form-input"
                    placeholder="Re-Enter Your password"
                    required
                  />
                  {passtext}
                </div>

                <div className="form-input">
                  <label>Upload Image</label>
                  <div className="form-group">
                    <input type="file" required />
                  </div>
                </div>
                <div className="form-group m-top-checkbox">
                  <input type="checkbox" required />
                  <label className="label-agree-term">
                    I agree all statements in{" "}
                    <NavLink to="#" className="term-service">
                      Terms of service
                    </NavLink>
                  </label>
                </div>

                <div className="form-group">
                  <input
                    type="submit"
                    className="form-submit"
                    value="Sign up"
                  />
                  <input type="reset" className="form-submit" value="Reset" />
                </div>
              </form>
              <p className="loginhere">
                Have already an account ?
                <NavLink to="/login">Login here</NavLink>
              </p>
            </div>
          </div>
        </div>
      </Fragment>
    );
  }
}

export default Registration;
