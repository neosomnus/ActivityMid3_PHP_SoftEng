CREATE TABLE employee_records (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR (50),
    last_name VARCHAR (50),
    gender VARCHAR (50),
    position VARCHAR (50),
    department VARCHAR (50),
    team VARCHAR (50),
    supervisor VARCHAR (50),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);