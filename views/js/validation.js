const Validate = {
    string: (x) => {
        return !(x == undefined || x == null || x.trim().length == 0) ? x : false;
    },
    email: (x) => {
        return Validate.string(x) && /\S+@\S+\.\S+/.test(x) ? x : false;
    },
    array: (x) => {
        return !x.some((e) => {
            if (!Validate.string(e)) {
                return true;
            }
        });
    },
    equal: (x) => {
        return !x.some((e) => {
            if (e != x[0]) {
                return true;
            }
        });
    },
    password: (x) => {
        return Validate.string(x) && x.length > 7 && !x.includes(" ") ? x : false;
    },
};
