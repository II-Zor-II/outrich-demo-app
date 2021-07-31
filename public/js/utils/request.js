// globally accessible ajax utility object
let ajaxUtil = {};

ajaxUtil.get = (url) => {
    return new Promise(function (resolve, reject) {

        let req = new XMLHttpRequest();

        req.open('GET', url);

        req.setRequestHeader('Accept', 'application/json');

        req.onload = function () {
            if (req.status == 200) {
                // console.log(req.response);
                resolve(req.response);
            } else {
                console.log('error: ' + req.status);
                reject(Error('Promise error with ' + url + ' : ' + req.status));
            }
        };

        req.onerror = function (err) {
            console.log('Network Error with ' + url + ': ' + err);
            reject(Error('Error with ' + url + ' : ' + err));
        };

        req.send();
    });
};
