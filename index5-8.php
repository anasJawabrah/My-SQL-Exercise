//--- question 5
CREATE TABLE IF NOT EXISTS countries(
    COUNTRY_ID int(2),
    COUNTRY_NAME VARCHAR(40) NOT NULL,
    REGION_ID DECIMAL(10, 0) NOT NULL
);
//--- question 6
CREATE TABLE IF NOT EXISTS JOBS(
    JOB_ID int(11),
    JOB_TITLE VARCHAR(40) NOT NULL,
    MIN_SALARY DECIMAL(6,0),
    MAX_SALARY DECIMAL(6,0) CHECK( MAX_SALARY<=25000)
);
//--- question 7
CREATE TABLE IF NOT EXISTS countries(
    COUNTRY_ID int(2),
    COUNTRY_NAME VARCHAR(40) CHECK(COUNTRY_NAME IN ('China','India','Italy')),
    REGION_ID DECIMAL(10, 0) NOT NULL
);
//--- question 8
CREATE TABLE IF NOT EXISTS job_history(
    employee_id int(11) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL CHECK (END_DATE LIKE '--/--/----'),
    job_id int(11),
    department_id int(11) NOT NULL,,
);