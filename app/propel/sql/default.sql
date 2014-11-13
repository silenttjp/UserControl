
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- User
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `User`;

CREATE TABLE `User`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `First_Name` VARCHAR(100),
    `Last_Name` VARCHAR(100),
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB CHARACTER SET='utf8';

-- ---------------------------------------------------------------------
-- Lists
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Lists`;

CREATE TABLE `Lists`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `Name` VARCHAR(100),
    `Active` INTEGER,
    PRIMARY KEY (`ID`)
) ENGINE=InnoDB CHARACTER SET='utf8';

-- ---------------------------------------------------------------------
-- User_List
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `User_List`;

CREATE TABLE `User_List`
(
    `ID` INTEGER NOT NULL AUTO_INCREMENT,
    `User_ID` INTEGER NOT NULL,
    `List_ID` INTEGER NOT NULL,
    `Date_Added` DATETIME NOT NULL,
    PRIMARY KEY (`ID`),
    INDEX `User_List_FI_1` (`User_ID`),
    INDEX `User_List_FI_2` (`List_ID`),
    CONSTRAINT `User_List_FK_1`
        FOREIGN KEY (`User_ID`)
        REFERENCES `User` (`ID`),
    CONSTRAINT `User_List_FK_2`
        FOREIGN KEY (`List_ID`)
        REFERENCES `Lists` (`ID`)
) ENGINE=InnoDB CHARACTER SET='utf8';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
