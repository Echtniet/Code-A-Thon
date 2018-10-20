CREATE TABLE `recruiters` (
  `RecrutierID` int(11) NOT NULL,
  `CompanyName` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` char(2) NOT NULL,
  `ZIP` int(5) NOT NULL,
  `Area` int(3) NOT NULL,
  `Local` int(7) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`RecrutierID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `jobseeker` (
  `SeekerID` int(11) NOT NULL,
  `FName` varchar(45) NOT NULL,
  `LName` varchar(45) NOT NULL,
  `Street` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` char(2) NOT NULL,
  `Zip` int(5) NOT NULL,
  `Area` int(3) NOT NULL,
  `Local` int(7) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `SchoolLevelID` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`SeekerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `jobs` (
  `JobID` int(11) NOT NULL,
  `Recrut_ID` int(11) NOT NULL,
  `JobTitle` varchar(45) NOT NULL,
  `JobDesc` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` char(2) NOT NULL,
  `ZIP` int(5) NOT NULL,
  `Salary` tinyint(4) NOT NULL,
  PRIMARY KEY (`JobID`),
  KEY `Recrut_ID_idx` (`Recrut_ID`),
  CONSTRAINT `Recrut_ID` FOREIGN KEY (`Recrut_ID`) REFERENCES `recruiters` (`recrutierid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `skills` (
  `SkillID` int(11) NOT NULL,
  `Skills` varchar(45) NOT NULL,
  PRIMARY KEY (`SkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `education` (
  `EducationID` int(11) NOT NULL,
  `School` varchar(45) NOT NULL,
  `City` varchar(45) NOT NULL,
  `State` char(2) DEFAULT NULL,
  PRIMARY KEY (`EducationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `jobskill` (
  `Job_ID` int(11) NOT NULL,
  `SkillID` int(11) NOT NULL,
  PRIMARY KEY (`Job_ID`,`SkillID`),
  KEY `SkillID_idx` (`SkillID`),
  CONSTRAINT `Job_ID` FOREIGN KEY (`Job_ID`) REFERENCES `jobs` (`jobid`),
  CONSTRAINT `SkillID` FOREIGN KEY (`SkillID`) REFERENCES `skills` (`skillid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `seeker_edu` (
  `Seeker_ID` int(11) NOT NULL,
  `Education_ID` int(11) NOT NULL,
  PRIMARY KEY (`Seeker_ID`,`Education_ID`),
  KEY `Education_ID_idx` (`Education_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `seekerjobs` (
  `SeekerID` int(11) NOT NULL,
  `JobID` int(11) NOT NULL,
  `Seeker_Like` tinyint(4) DEFAULT NULL,
  `RecruiterLike` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`SeekerID`,`JobID`),
  KEY `JobID_idx` (`JobID`),
  CONSTRAINT `JobID` FOREIGN KEY (`JobID`) REFERENCES `jobs` (`jobid`),
  CONSTRAINT `SeekerID` FOREIGN KEY (`SeekerID`) REFERENCES `jobseeker` (`seekerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `seekerskills` (
  `SeekerID` int(11) unsigned DEFAULT NULL,
  `Skill_ID` int(11) unsigned DEFAULT NULL,
  KEY `SkillID_idx` (`Skill_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

