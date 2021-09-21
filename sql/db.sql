CREATE TABLE `oop-crud`.`students` ( `student_id` INT NOT NULL AUTO_INCREMENT , `student_name` VARCHAR(100) NOT NULL , `student_roll_no` VARCHAR(100) NOT NULL , `student_class_name` VARCHAR(100) NOT NULL , `student_class_section` VARCHAR(100) NOT NULL , `status` ENUM('0','1') NOT NULL , `created_on` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`student_id`)) ENGINE = InnoDB;




CREATE TABLE user (
    user_id INT NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(100) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    status ENUM('0','1') NOT NULL,
    created_on TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(user_id)) ENGINE = InnoDB;