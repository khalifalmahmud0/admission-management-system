import React, { Component, Fragment } from "react";
import { NavLink } from "react-router-dom";
import eyeon from "../../../public/assets/img/eyeon.png";
import eyeoff from "../../../public/assets/img/eyeoff.png";
class Login extends Component {
    constructor(props) {
        super(props);
        this.state = {
            password: {
                type: "password",
                text: "Show"
            }
        };
    }
    showPassword = () => {
        this.setState({
            password: {
                type: "text",
                text: "Hide"
            }
        });
    };
    hidePassword = () => {
        this.setState({
            password: {
                type: "password",
                text: "Show"
            }
        });
    };
    render() {
        var passtext =
            "Show" === this.state.password.text ? (
                <img
                    width="20px"
                    src={eyeon}
                    alt=""
                    onClick={this.showPassword}
                    className="field-icon passwordshow"
                />
            ) : (
                <img
                    width="20px"
                    src={eyeoff}
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
                            <form action="/dashboard">
                                <h2 className="auth_header">Login</h2>
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
                                        type="submit"
                                        className="form-submit"
                                        value="Sign In"
                                    />
                                    <input
                                        type="reset"
                                        className="form-submit"
                                        value="Reset"
                                    />
                                </div>
                            </form>
                            <p className="loginhere">
                                Don't Have account ?
                                <NavLink to="/register">Create Here</NavLink>
                            </p>
                        </div>
                    </div>
                </div>
            </Fragment>
        );
    }
}

export default Login;
