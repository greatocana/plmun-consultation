function login() {
    let data = {
        stud_no: stud_no.value,
        password: password.value,
        action: "login",
    };

    if (!Validate.string([data.stud_no])) {
        swal({
            title: "Error!",
            text: "Please Type Student No.",
            icon: "error",
            return()
        })
    } else if(!Validate.string(data.password)){
            swal({
                title: "Error!",
                text: "Please Type Password.",
                icon: "error",
                return()
            }) 
        } else {
            axios.post("route", data).then((res) => {
                    if (res.data.status) {
                        swal({
                            text: "Successful!",
                            icon: "success",
                            showLoaderOnConfirm: true,
                            allowOutsideClick: false,
                            showConfirmButton: true,
                            showCancelButton: false,
                        }).then((result) => {
                            if (result.value) {
                                form_login.reset();
                            }
                        });
                    } 
                })
                
        }
            
    
}
           

function register() {

    let data = {
        stud_no: stud_no.value,
        Fname: Fname.value,
        Mname: Mname.value,
        Lname: Lname.value,
        course: course.value,
        year: year.value,
        password: password.value,
        action: "register",
    };

    if (Validate.array([data.stud_no, data.Fname, data.Mname, data.Lname, data.course, data.year])) {
        if (Validate.equal([data.password, re_password.value])) {
            axios.post("route", data).then((res) => {
                    if (res.data.status) {
                        swal({
                            text: "Successful!",
                            icon: "success",
                            showLoaderOnConfirm: true,
                            allowOutsideClick: false,
                            showConfirmButton: true,
                            showCancelButton: false,
                        }).then((result) => {
                            if (result.value) {
                                form_register.reset();
                            }
                        });
                    } else {
                        swal({
                            text: res.data.message,
                            icon: "warning",
                            allowOutsideClick: false,
                            showConfirmButton: true,
                            showCancelButton: false,
                        });
                    }
                })
                .catch((err) => {
                    console.log(err);
                });
        } else {
            swal({
                text: 'Password not match!',
                icon: "warning",
                allowOutsideClick: false,
                showConfirmButton: true,
                showCancelButton: false,
            });
        }
    } else {
        swal({
            title: "Error!",
            text: "Please complete all the fields",
            icon: "error",
            allowOutsideClick: false,
            showConfirmButton: true,
            showCancelButton: false,
        });
    }
}
