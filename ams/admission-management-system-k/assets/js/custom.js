// Add Class == Start == Repeatable Field
// add_class_form_admin
new Vue({
  el: '#add_class_form_admin',
  data() {
    return {
      submit_button_diasble : false,
      classLists: [
        {
          class: '',
          groupORsubject: '',
          availableSeat: '',
          admissionFee: '',
          duplicateClassFound:false
        },
      ]
    }
  },
  methods: {
    class_add_more() {
      this.classLists.push({
                  class: '',
          groupORsubject: '',
          availableSeat: '',
        admissionFee: '',
          duplicateClassFound:false
      })
    },
    deleteAdata(index) {
      this.classLists.splice(index, 1);
    },
    submitAllClass() {
    let url = "/functions.php"
    let data = {
          action: "ClassAddFromAdminPanel",
          info : this.classLists
      }
    axios.post(url, data )
      .then((response) => {
        // this.classLists =
        // [
        // {
        // class: '',
        // groupORsubject: '',
        // availableSeat: '',
        // admissionFee:''
        // }
        // ]
        // console.log(response.data);
        if (response.data == 0) {
            alertify.confirm('Data Save Successfully!', function() {
                    window.location.href = '/dashboard/add-class.php';
                }).autoOk(2).set({
                    title: ""
            });
        } else {
            alertify.confirm('Data Save Successfully, But Duplicate Data Found ! Only Unique Data Saved! Please Check', function() {
                    window.location.href = '/dashboard/add-class.php';
                }).autoOk(10).set({
                    title: ""
            });
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
    whenClassTyping(index) {
    let url = "/functions.php"
    let data = {
          action: "CheckDuplicateClass",
          info : this.classLists[index].class
      }
    axios.post(url, data )
      .then( (response) => {
        // console.log(response.data);
        if (response.data == 'Data_Already_Exist') {
          this.classLists[index].duplicateClassFound = true;
          this.submit_button_diasble = true;
        } else {
          this.classLists[index].duplicateClassFound = false;
          this.submit_button_diasble = false;
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
  }
})
// Add Class == End == Repeatable Field 
// Datatable Start
$(document).ready(function() {
    $('#KHALIF_DATATABLE').DataTable( {
        responsive: {
            details: {
                renderer: function ( api, rowIdx, columns ) {
                    var data = $.map( columns, function ( col, i ) {
                        return col.hidden ?
                            '<tr data-dt-row="'+col.rowIndex+'" data-dt-column="'+col.columnIndex+'">'+
                                '<td>'+col.title+':'+'</td> '+
                                '<td>'+col.data+'</td>'+
                            '</tr>' :
                            '';
                    } ).join('');
                    return data ?
                        $('<table/>').append( data ) :
                        false;
                }
            }
        }
    } );
} );
// Datatable End
// Admin Sign Up Form Start 
new Vue({
  el: '#admin_SignUp_form',
  data() {
    return {
      AdminSignUp: {
        name: '',
        email: '',
        password: '',
        confirm_password: '',
        user_type: 0,
        user_validation: 'NO',
        email_exist:false
      }
    }
  },
  methods: {
    admin_SignUp_Submit() {
    let url = "/functions.php"
    let data = {
          action: "SignUpAsAdminFormData",
          info : this.AdminSignUp
      }
    axios.post(url, data )
      .then((response) => {
        // console.log(response.data);
        if (response.data == '0') {
            alertify.confirm('Data Save Successfully! Admin Should Approve Your Request Before You Login', function() {
                    window.location.href = '/auth/signin.php';
                }).autoOk(2).set({
                    title: ""
            });
        } else {
          alertify.confirm('UnKnown Error Occurs! Please Try Again Later', function() {
                    window.location.href = '/auth/admin.php';
                }).autoOk(2).set({
                    title: ""
            });
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
  },
  whenEmailTyping() {
    let url = "/functions.php"
    let data = {
          action: "checkDuplicateEmail_FROM_ADMIN_form",
          info : this.AdminSignUp
      }
    axios.post(url, data )
      .then((response) => {
        // console.log(response.data);
        if (response.data == '1') {
          this.AdminSignUp.email_exist = true;
        } else {
          this.AdminSignUp.email_exist = false;
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
  }
})
// Admin Sign Up Form End
// Signup Form Start 
new Vue({
        el: '#signupForm',
        data() {
          return {
            signup:{
              su_name : '',
              su_email : '',
              su_fa_name : '',
              su_ma_name : '',
              su_gu_number : '',
              su_pass : '',
              su_rep_pass : '',
              su_class : '',
              su_group : '',
              su_admission_fee : '',
              su_total_seat : '',
              su_available_seat : '',
              su_checkbox: '',
              su_email_exist:false
            }
            }
  },
  methods: {
    whenEmailTyping() {
    let url = "/functions.php"
    let data = {
          action: "checkDuplicateEmail",
          info : this.signup
      }
    axios.post(url, data )
      .then( (response) => {
        if (response.data == '1') {
          this.signup.su_email_exist = true;
        } else {
          this.signup.su_email_exist = false;
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
    submitSignUp() {
      let url = "/payment/checkout.php"
      let data = {
          action: "signup",
          info : this.signup
      }
          axios.post(url, data )
      .then(function (response) {
        // console.log(data);
      // alertify.alert(response.data).set({title:""});
      var strJSON = encodeURIComponent(JSON.stringify(data));
      location.href = '/payment/checkout.php?info='+strJSON;
    })
    .catch(function (error) {
    // handle error
    console.log(error);
  })
      // axiosfunction(url,data);
    },
    classSelect() {
    let url = "/functions.php"
    let data = {
          action: "AdmissionFeeDependsOnClass",
          info : this.signup.su_class
      }
    axios.post(url, data )
      .then((response) => {
        this.signup.su_admission_fee = response.data.class_list_table_admission_fee;
        this.signup.su_total_seat = response.data.class_list_table_available_seat;
        this.signup.su_available_seat = this.signup.su_total_seat - response.data.student_table_totalStudentOfAClass;
        // console.log(response.data);
        // if (response.data == '1') {
        //   this.signup.su_email_exist = true;
        // } else {
        //   this.signup.su_email_exist = false;
        // }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    }
  }
})
// If Profile Page 
  $(document).ready(function() {
    if (window.location.href.indexOf("/profile.php") > -1) {
new Vue({
        el: '#vueEmailCheck_updateProfilePage',
        data() {
          return {
            update_profile: {
              profile_id : document.querySelector("input[name=profileID]").value,
              up_email: document.querySelector("input[name=up_email]").value,
              up_email_exist : false
            }
            }
  },
  methods: {
    whenEmailTyping() {
    let url = "/functions.php"
    let data = {
          action: "Profile_Update_email_check",
          info : this.update_profile
      }
    axios.post(url, data )
      .then( (response) => {
        // console.log(response.data);
        if (response.data == 'YES') {
          this.update_profile.up_email_exist = true;
        } else {
          this.update_profile.up_email_exist = false;
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
  }
})
// Current Password Matching == profile page == password update 
new Vue({
        el: '#current_pass_match_check',
        data() {
          return {
            change_pass: {
              profile_id : document.querySelector("input[name=profileID]").value,
              current_pass: '',
              pass_match : false
            }
            }
  },
  methods: {
    whenPassTyping() {
    let url = "/functions.php"
    let data = {
          action: "current_pass_match_check",
          info : this.change_pass
      }
    axios.post(url, data )
      .then( (response) => {
        // console.log(response.data);
        if (response.data == '1') {
          this.change_pass.pass_match = true;
        } else {
          this.change_pass.pass_match = false;
        }
    })
    .catch((error)=> {
    // handle error
    console.log(error);
  })
    },
  }
})
    }
  });
