import React, { Component } from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";
import LoginPage from "../Pages/LoginPage";
import RegistrationPage from "../Pages/RegistrationPage";
import ErrorPage from "../Pages/ErrorPage";
import WelCome from "../Pages/DashBoard/WelCome";
import ProfileUpdatePage from "../Pages/DashBoard/Profile/ProfileUpdatePage";
import ProfileSocialChangePage from "../Pages/DashBoard/Profile/ProfileSocialChangePage";
import ProfilePassChange from "../Pages/DashBoard/Profile/ProfilePassChange";
import FileUpload from "../Pages/FileUpload";
class Routes extends Component {
    render() {
        return (
            <BrowserRouter>
                <Switch>
                    <Route path="/" component={LoginPage} exact />
                    <Route path="/login" component={LoginPage} />
                    <Route path="/register" component={RegistrationPage} />
                    <Route path="/dashboard" component={WelCome} />
                    <Route path="/fileupload" component={FileUpload} />
                    <Route
                        path="/profile"
                        component={ProfileUpdatePage}
                        exact
                    />
                    <Route
                        path="/profile/update-info"
                        component={ProfileUpdatePage}
                    />
                    <Route
                        path="/profile/update-social"
                        component={ProfileSocialChangePage}
                    />
                    <Route
                        path="/profile/update-pass"
                        component={ProfilePassChange}
                    />
                    {/* <Route path="/role" component={DashBoard} exact /> */}
                    {/* <Route path="/sitename" component={DashBoard} exact /> */}
                    {/* <Route path="/introtitle" component={DashBoard} exact /> */}
                    {/* <Route path="/sitetitle" component={DashBoard} exact /> */}
                    {/* <Route path="/latestnews" component={DashBoard} exact /> */}
                    {/* <Route path="/latestnewslist" component={DashBoard} exact /> */}
                    {/* <Route path="/authoritysignature" component={DashBoard} exact /> */}
                    {/* <Route path="/adddepartment" component={DashBoard} exact /> */}
                    {/* <Route path="/departments" component={DashBoard} exact /> */}
                    {/* <Route path="/paymentnow" component={DashBoard} exact /> */}
                    {/* <Route path="/paymentactivities" component={DashBoard} exact /> */}
                    {/* <Route path="/admissionnow" component={DashBoard} exact /> */}
                    {/* <Route path="/admissionlist" component={DashBoard} exact /> */}
                    {/* <Route path="/admitcard" component={DashBoard} exact /> */}
                    <Route path="*" component={ErrorPage} />
                </Switch>
            </BrowserRouter>
        );
    }
}

export default Routes;
