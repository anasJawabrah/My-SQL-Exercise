<!---------------------------------------------------------->
<!-- 1. Write a SQL statement to create a simple table countries
including columns country_id,country_name and region_id. -->


    CREATE TABLE countries (
        country_id int,
        country_name varchar(255),
        region_id int
    );

<!---------------------------------------------------------->
<!-- 2. Write a SQL statement to create a simple table countries
including columns country_id,country_name and region_id which is already exists. -->


    CREATE TABLE countrie AS  (
        SELECT country_id, country_name, region_id
        FROM countries;
    );
<!---------------------------------------------------------->
<!-- 3. Write a SQL statement to create the structure of a table dup_countries similar to countries. -->


    CREATE TABLE IF NOT EXISTS dup_countries
    LIKE countries;



    CREATE TABLE dup_countries AS
    SELECT *
    FROM countries;

<!---------------------------------------------------------->
<!-- 4. Write a SQL statement to create a duplicate copy of countries table including structure and data by name dup_countries. -->

    CREATE TABLE dup_countries AS  (
        SELECT *
        FROM countries;
    );

    // OR
    // CREATE TABLE IF NOT EXISTS dup_countries
    // AS SELECT * FROM  countries;
