import React, { Component, Fragment } from "react";
import Header from "../Components/DashBoard/Header";
import LeftMenu from "../Components/DashBoard/LeftMenu";
import Footer from "../Components/DashBoard/Footer";
import axios, { post } from "axios";
class FileUpload extends Component {
    // constructor() {
    //     super();
    //     this.state = {
    //         image: ""
    //     };
    // }
    // constructor(props) {
    //     super(props);
    //     this.state = {
    //         image: ""
    //     };
    //     this.onFormSubmit = this.onFormSubmit.bind(this);
    //     this.onChange = this.onChange.bind(this);
    //     this.fileUpload = this.fileUpload.bind(this);
    // }
    // onFormSubmit(e) {
    //     e.preventDefault();
    //     this.fileUpload(this.state.image);
    // }
    // onChange(e) {
    //     let files = e.target.files || e.dataTransfer.files;
    //     if (!files.length) return;
    //     this.createImage(files[0]);
    // }
    // fileUpload(image) {
    //     const url = "http://localhost/core_php.php";
    //     const formData = { file: this.state.image };
    //     return post(url, formData).then(response => console.log(response));
    // }
    // createImage(file) {
    //     let reader = new FileReader();
    //     reader.onload = e => {
    //         this.setState({
    //             image: e.target.result
    //         });
    //     };
    //     reader.readAsDataURL(file);
    // }
    onChange = e => {
        let file = e.target.files;
        let filename = file[0]["name"];
        let imageSize = file[0]["size"];
        let imageType = file[0]["type"];
        let reader = new FileReader();
        reader.readAsDataURL(file[0]);
        reader.onload = e => {
            console.log(file);
            const url = "http://localhost/core_php.php";
            const imageBase64Data = {
                name: filename,
                file: e.target.result
            };
            if (imageSize <= 100000) {
                if ("image/jpeg" === imageType) {
                    axios
                        .post(url, imageBase64Data)
                        .then(res => {
                            console.log(res);
                        })
                        .catch(err => {
                            console.log(err);
                        });
                } else {
                    console.log("Image Type Must be .jpg format");
                }
            } else {
                console.log("Image Size Must be Maximum 100kb");
            }
        };
        // console.log(file[0]["name"]);
    };
    render() {
        return (
            <Fragment>
                <div className="sb-nav-fixed" id="management_dashboard">
                    <Header />
                    <div id="layoutSidenav">
                        <LeftMenu />
                        <div id="layoutSidenav_content">
                            <main className="allContant">
                                <div className="container-fluid">
                                    <form
                                        // onSubmit={this.onFormSubmit}
                                        encType="multipart/form-data"
                                    >
                                        <h1>
                                            React js Laravel File Upload
                                            Tutorial
                                        </h1>
                                        <input
                                            type="file"
                                            onChange={e => {
                                                this.onChange(e);
                                            }}
                                        />
                                        {/* <button type="submit">Upload</button> */}
                                    </form>
                                </div>
                            </main>
                            <Footer />
                        </div>
                    </div>
                </div>
            </Fragment>
        );
    }
}

export default FileUpload;
