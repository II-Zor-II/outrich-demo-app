class Employee {
    constructor(id, first_name, last_name, date_of_birth) {
        this.id = id;
        this.first_name = first_name;
        this.last_name = last_name;
        this.date_of_birth = date_of_birth;
    }

    getData() {
        return {
            id: this.id,
            first_name: this.first_name,
            last_name: this.last_name,
            date_of_birth: this.date_of_birth
        }
    }
}

class EmployeeList {
    constructor(rawData) {
        this.responseData = JSON.parse(rawData);
        this.formatResponseData();
    }

    formatResponseData() {
        this.employeeList = [];
        if (Array.isArray(this.responseData)) {
            this.responseData.forEach((dataRow) => {
                this.employeeList.push(
                  new Employee(dataRow.id, dataRow.first_name, dataRow.last_name, dataRow.date_of_birth)
                )
            });
        }
    }

    getEmployeeList() {
        return this.employeeList;
    }
}
