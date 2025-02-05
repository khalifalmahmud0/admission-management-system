import React, { Component, Fragment } from "react";
import { NavLink } from "react-router-dom";
import axios, { post } from "axios";
/**
 * Import PassWord Hide / Show Image
 */
import eyeon from "../../../public/assets/img/eyeon.png";
import eyeoff from "../../../public/assets/img/eyeoff.png";
/**
 * Start Component
 */
class Registration extends Component {
    constructor(props) {
        super(props);
        this.state = {
            /**
             * Manage Full Registration Form Data
             */
            regformData: {
                reg_name: null,
                reg_email: null,
                reg_pass: null,
                reg_rep_pass: null,
                reg_image: null
            },
            /**
             * Manage Password Hide/Show When Typing
             */
            password: {
                type: "password",
                text: "Show"
            },
            /**
             * Error handling
             * Validation Check
             * Validation Error Message Handle
             */
            validation: {
                passNotMatching: null,
                passNotMatchingStatus: 1,
                imageSizeType: null,
                imageSizeTypeStatus: 1
            },
            /**
             * If Status 0 , then Submit Button Will Be Disabled
             * Error handling
             * Validation Check
             */
            status: {
                status: 1
            }
        };
    }
    /**
     * onClick function
     * Change State
     * after click == input type will be change from PASSWORD to TEXT
     */
    showPassword = () => {
        this.setState({
            password: {
                type: "text",
                text: "Hide"
            }
        });
    };
    /**
     * onClick function
     * Change State
     * after click == input type will be change from TEXT to PASSWORD
     */
    hidePassword = () => {
        this.setState({
            password: {
                type: "password",
                text: "Show"
            }
        });
    };
    /**
     * onChange function
     * Change Registation Form Initial Value From State
     */
    reg_field_change_handler = event => {
        if ("reg_name" === event.target.name) {
            this.setState({
                regformData: {
                    ...this.state.regformData,
                    reg_name: event.target.value
                }
            });
        }
        if ("reg_email" === event.target.name) {
            this.setState({
                regformData: {
                    ...this.state.regformData,
                    reg_email: event.target.value
                }
            });
        }
        if ("reg_pass" === event.target.name) {
            this.setState({
                regformData: {
                    ...this.state.regformData,
                    reg_pass: event.target.value
                },
                validation: {
                    passNotMatchingStatus: 1
                }
            });
        }
        if ("reg_rep_pass" === event.target.name) {
            this.setState({
                regformData: {
                    ...this.state.regformData,
                    reg_rep_pass: event.target.value
                },
                validation: {
                    passNotMatchingStatus: 1
                }
            });
        }
        if ("reg_image" === event.target.name) {
            let file = event.target.files;
            let filename = file[0]["name"];
            let imageSize = file[0]["size"];
            let imageType = file[0]["type"];
            let reader = new FileReader();
            reader.readAsDataURL(file[0]);
            reader.onloadend = event => {
                const imageBase64Data = {
                    name: filename,
                    file: event.target.result
                };
                if (imageSize <= 100000) {
                    if ("image/jpeg" === imageType) {
                        this.setState({
                            regformData: {
                                ...this.state.regformData,
                                reg_image: imageBase64Data
                            }
                        });
                        this.setState({
                            validation: {
                                // ...this.state.validation,
                                imageSizeType: (
                                    <p className="SuccessNotice">
                                        Perfect !! :)
                                    </p>
                                ),
                                imageSizeTypeStatus: 1
                            }
                        });
                    } else {
                        this.setState({
                            validation: {
                                // ...this.state.validation,
                                imageSizeType: (
                                    <p className="ErrorNotice">
                                        Image Type Must be .jpg format !
                                    </p>
                                ),
                                imageSizeTypeStatus: 0
                            }
                        });
                    }
                } else {
                    this.setState({
                        validation: {
                            // ...this.state.validation,
                            imageSizeType: (
                                <p className="ErrorNotice">
                                    Image Size Must be Maximum 100kb !
                                </p>
                            ),
                            imageSizeTypeStatus: 0
                        }
                    });
                }
            };
        }
    };
    /**
     * Get Full Data After From Submit
     * Send Data to Database By Api
     */
    reg_form_submit_handler = event => {
        event.preventDefault();
        document.getElementById("reg_form").reset();
        this.setState({
            validation: {
                passNotMatchingStatus: 0,
                imageSizeType: null
            }
        });
        /**
         * Send All Data
         */
        if (1 === this.state.status.status) {
            const url = "http://localhost/core_php.php";
            const reg_data = this.state.regformData;
            axios
                .post(url, reg_data)
                .then(res => {
                    console.log(res);
                })
                .catch(err => {
                    console.log(err);
                });
        } else {
            console.log("From Submit Error");
        }
    };
    /**
     * Render Component
     */
    render() {
        /**
         * PassWord & Image Validation Check
         * if validation ERROR then state->status->0
         * status-0 Means Submit Button Disabled
         */
        if (
            this.state.validation.imageSizeTypeStatus === 0 ||
            (this.state.regformData.reg_pass !== null &&
                this.state.regformData.reg_pass !== "" &&
                this.state.regformData.reg_pass !==
                    this.state.regformData.reg_rep_pass)
        ) {
            this.state.status.status = 0;
        } else {
            this.state.status.status = 1;
        }
        /**
         * Change Password Hide / Show Image
         */
        const passtext =
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
        /**
         * If Both PassWord Not Match then Which Notice Will Be Show
         */
        if (1 === this.state.validation.passNotMatchingStatus) {
            if (
                this.state.regformData.reg_pass !== null &&
                this.state.regformData.reg_pass !== ""
            ) {
                if (
                    this.state.regformData.reg_pass ===
                    this.state.regformData.reg_rep_pass
                ) {
                    this.state.validation.passNotMatching = (
                        <p className="SuccessNotice">PassWord Match :) </p>
                    );
                } else {
                    this.state.validation.passNotMatching = (
                        <p className="ErrorNotice">
                            Sorry !! PassWord Not Match :(
                        </p>
                    );
                }
            }
        }
        /**
         * Change Submit Button With the Value Of state->status->
         * if status->0 ,anybody can not submit this button
         * if status->1 , button will work Properly
         */
        const submit =
            this.state.status.status == 0 ? (
                <input
                    type="submit"
                    className="form-submit"
                    value="Sign up"
                    disabled
                />
            ) : (
                <input type="submit" className="form-submit" value="Sign up" />
            );
        /**
         * Finally Return The Registration Component
         */
        return (
            <Fragment>
                <div className="authbody">
                    <div className="container">
                        <div className="signup-content">
                            {/* Form Start */}
                            <form
                                action="/login"
                                onSubmit={this.reg_form_submit_handler}
                                id="reg_form"
                            >
                                <h2 className="auth_header">Create account</h2>
                                {/* Name */}
                                <div className="form-group">
                                    <input
                                        type="text"
                                        className="form-input"
                                        placeholder="Enter Your Name"
                                        onChange={this.reg_field_change_handler}
                                        required
                                        name="reg_name"
                                    />
                                </div>
                                {/* Email  */}
                                <div className="form-group">
                                    <input
                                        type="email"
                                        className="form-input"
                                        placeholder="Enter Your Email"
                                        onChange={this.reg_field_change_handler}
                                        required
                                        name="reg_email"
                                    />
                                </div>
                                {/* PassWord  */}
                                <div className="form-group">
                                    <input
                                        type={this.state.password.type}
                                        className="form-input"
                                        placeholder="Enter Your Password"
                                        onChange={this.reg_field_change_handler}
                                        required
                                        name="reg_pass"
                                    />
                                    {/* Password Hide / Show -> eye off/on  */}
                                    {passtext}
                                </div>
                                {/* Repeat PassWord */}
                                <div className="form-group">
                                    <input
                                        type={this.state.password.type}
                                        className="form-input"
                                        placeholder="Re-Enter Your password"
                                        onChange={this.reg_field_change_handler}
                                        required
                                        name="reg_rep_pass"
                                    />
                                    {/* Password Hide / Show -> eye off/on  */}
                                    {passtext}
                                    {/* Password Matching Check Notice  */}
                                    {this.state.validation.passNotMatching}
                                </div>
                                {/* Image Upload  */}
                                <div className="form-input">
                                    <label>Upload Image</label>
                                    <div className="form-group">
                                        <input
                                            id="reg_img_id"
                                            type="file"
                                            name="reg_image"
                                            required
                                            onChange={
                                                this.reg_field_change_handler
                                            }
                                        />
                                    </div>
                                    {/* Image Validation Check Notice  */}
                                    {this.state.validation.imageSizeType}
                                </div>
                                {/* CheckBox : Terms & Conditions */}
                                <div className="form-group m-top-checkbox">
                                    <input type="checkbox" required />
                                    <label className="label-agree-term">
                                        I agree all statements in{" "}
                                        <NavLink
                                            to="#"
                                            className="term-service"
                                        >
                                            Terms of service
                                        </NavLink>
                                    </label>
                                </div>
                                <div className="form-group">
                                    {/* Submit Button  */}
                                    {submit}
                                    {/* Reset Button  */}
                                    <input
                                        type="reset"
                                        className="form-submit"
                                        value="Reset"
                                    />
                                </div>
                            </form>
                            {/* Link to Login Page */}
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
