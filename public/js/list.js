console.log("list");

// function for rendering employee list
(function () {

    const EMPLOYEE_API_URL = "/api/employee";

    let employeeListTable = document.getElementById("employee-list-table");

    let employeeListModel = {};

    let employeeList = [];

    ajaxUtil.get(EMPLOYEE_API_URL).then(function (data) {
        employeeListModel = new EmployeeList(data);
        this.employeeList = employeeListModel.getEmployeeList();
        renderEmployeeList();
    }).catch(function (e) {
        alert("error - " + e);
    });

    function renderEmployeeList() {
        this.employeeList.forEach((employee) => {
            let tr = document.createElement('tr')

            let th_id = document.createElement('th');
            th_id.innerHTML = employee.id;

            let td_first_name = document.createElement('td');
            td_first_name.innerHTML = employee.first_name;
            td_first_name.setAttribute('data-id', employee.id);
            td_first_name.className = "first-name-td";

            let td_last_name = document.createElement('td');
            td_last_name.innerHTML = employee.last_name;
            td_last_name.setAttribute('data-id', employee.id);
            td_last_name.className = "last-name-td";

            let td_birthday = document.createElement('td');
            td_birthday.innerHTML = employee.date_of_birth;
            td_birthday.className = "date-of-birth-td";

            tr.appendChild(th_id);
            tr.appendChild(td_first_name);
            tr.appendChild(td_last_name);
            tr.appendChild(td_birthday);
            employeeListTable.appendChild(tr);
        });
    }

})();

// function for adding callback to buttons
(function () {

    const ADD_NEW_EMPLOYEE_URL = "/create-employee";

    let createEmployeeButton = document.getElementById("create-employee-btn");
    let reloadButton = document.getElementById("reload-btn");

    createEmployeeButton.onclick = () => {
        window.location.replace(ADD_NEW_EMPLOYEE_URL);
    }

    reloadButton.onclick = () => {
        window.location.reload();
    }



    // uses jquery -> event delegation
    $("body").delegate("td.first-name-td, td.last-name-td", "click", function () {
        let data = {
            is_update: true,
            id: $(this).attr("data-id")
        };
        window.location.replace(ADD_NEW_EMPLOYEE_URL + "?" + $.param(data));
    })
})();
