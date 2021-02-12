function login() {
    let data = {
        stud_no: stud_no.value,
        password: password.value,
        action: 'login'
    }

    axios.post("route", data).then((res) => {
      if (res.status) {
        // success
        console.log(res);
      } else {
        console.log(res);
      }
    });
}


function register() {
    let data = {
        stud_no : stud_no.value,
        Fname : Fname.value,
        Mname : Mname.value,
        Lname : Lname.value,
        course: course.value,
        year: year.value,
        action: 'register'
    }

    axios.post('route', data).then(res => { 
        if (res.status) {
            // success
            console.log(res);
        } else {
            // failed
            console.log(res)
        }

    }).catch(err => {
        console.log(err)
    })
}