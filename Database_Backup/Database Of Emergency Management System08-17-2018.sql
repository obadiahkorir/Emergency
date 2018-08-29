DROP TABLE IF EXISTS accident;

CREATE TABLE `accident` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `Location` varchar(30) NOT NULL,
  `Accident_type` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `County` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO accident VALUES("5","afad","afaf","2018-05-07","asfasf","4234","czxzx","korir400@gmail.com","dgfgd","M");
INSERT INTO accident VALUES("6","dsfs","sdfs","0011-12-23","zxczxc","2132","csdfs","k@gmail.com","dfvdfg","M");
INSERT INTO accident VALUES("8","asdasd","asdsad","2018-08-17","asdsa","32435","dcscfsdzf","asds@fsdfsd","sdfsfsd","M");


DROP TABLE IF EXISTS admin;

CREATE TABLE `admin` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='contain account openning details';

INSERT INTO admin VALUES("5","test","test1@gmail.com","Admin","098f6bcd4621d373cade4e832627b4f6","2018-08-12");
INSERT INTO admin VALUES("6","Boscow","boscow@gmail.com","Admin","61d42e8f3d6bc897a840496cae5f3329","2018-08-12");
INSERT INTO admin VALUES("7","sly","sly@gmail.com","Admin","56e3686c8d3f6dca2fb87f271359a88c","2018-08-12");
INSERT INTO admin VALUES("8","obadiah","yes@gmail.com","Admin","a6105c0a611b41b08f1209506350279e","2018-08-13");
INSERT INTO admin VALUES("9","admin","admin@gmail.com","Admin","21232f297a57a5a743894a0e4a801fc3","2018-08-13");
INSERT INTO admin VALUES("10","dasfdsf","sdf@gmail.com","Admin","b54aec7aa025d07993c1e95ce57fce91","2018-08-17");


DROP TABLE IF EXISTS attack;

CREATE TABLE `attack` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `attacklocation` varchar(30) NOT NULL,
  `attacktype` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `attackdescription` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO attack VALUES("3","fvdf","dfgvd","sdfsfs","2018-04-19","dvsvv","dsvdfds@gmail.com","dfgfd","24324","Male");
INSERT INTO attack VALUES("4","gsg","sgss","tgrter","2018-04-28","xfbgxfb","nkn@gmail.com","sgs","2432424","Male");
INSERT INTO attack VALUES("5","cdsfs","sdfs","sdfsf","2018-05-07","dcdsf","korir400@gmail.com","dsfsfs","23424","Male");
INSERT INTO attack VALUES("6","sds","sfsd","gfds","2018-05-07","dcdsf","korir400@gmail.com","sdfs","13123","Male");
INSERT INTO attack VALUES("7","asdsa","asdas","xcvcxv","0003-12-31","scda","korir400@gmail.com","xzcxz","21312","Male");
INSERT INTO attack VALUES("8","dsjhsfkjsd","xvnmnxvmxcmbv","shdjkfhshkj","2018-05-26","shfkdsfkjsdgfds","korir400@gmail.com","xcvndshfkjdh","23792398","Male");
INSERT INTO attack VALUES("9","bcmxvbcx","zmcvmzvcmz","mnzbxcmz","2018-05-26","nmcbxzxmn","bzmncmzvcm@gmail.com","mzcmvmzbxcv","762367263","Male");
INSERT INTO attack VALUES("10","vfxdvfd","dfgvdf","ytjyt","2018-08-09","gnhghng","345345@gmail.com","vgfghfh","45456","Male");
INSERT INTO attack VALUES("11","dgdrt","ertgert","fdfdgd","2018-08-16","fdgdfg","345345@gmail.com","etert","456456","Male");


DROP TABLE IF EXISTS child;

CREATE TABLE `child` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `childlocation` varchar(30) NOT NULL,
  `childabusetype` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `childdescription` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO child VALUES("3","dcdsc","dsfds","zxczx","2018-04-19","dcxv","zxcxcz@gmail.com","dsdf","2232132","Male");
INSERT INTO child VALUES("4","sdcsfd","sdfsfs","sdfsfs","2018-05-07","sfdsfs","korir400@gmail.com","sfds","345435","Male");
INSERT INTO child VALUES("5","dsfjjdsfdsfh","sdhfgshdf","dhjghdfhg","2018-05-26","sdkjhchxvjhv","korir400@gmail.com","shdjfhskhgf","238479327","Male");
INSERT INTO child VALUES("6","sdfsdf","dfdgd","fgbfhgfbhgfh","2018-08-17","fvdgbfb","345345@gmail.com","fgfdgfd","345435","Male");


DROP TABLE IF EXISTS fire;

CREATE TABLE `fire` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firelocation` varchar(30) NOT NULL,
  `firetype` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `firedescription` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO fire VALUES("2","dqwq","eqarfqw","wda","2018-04-19","adsfcasd","korir400@gmail.com","wqq","14221","M");
INSERT INTO fire VALUES("3","sdffs","sdfdsf","zczdsa","2018-05-07","cxvxv","korir400@gmail.com","sdfs","1232","Male");
INSERT INTO fire VALUES("4","vdfgd","dfgfdgd","dfgdg","1232-12-03","dfgdg","dfgdgdg@gmail.com","dfgfd","12313","Male");
INSERT INTO fire VALUES("5","sdf","sdf","xcvx","0002-03-13","xvxc","xcvx@gmail.com","sfdf","322","Male");
INSERT INTO fire VALUES("6","sdf","sdf","xcvx","0002-03-13","xvxc","xcvx@gmail.com","sfdf","322","Male");
INSERT INTO fire VALUES("7","sdf","sdf","xcvx","0002-03-13","xvxc","xcvx@gmail.com","sfdf","322","Male");
INSERT INTO fire VALUES("8","sdf","sdf","xcvx","0002-03-13","xvxc","xcvx@gmail.com","sfdf","322","Male");
INSERT INTO fire VALUES("9","erwr","werwe","sdfs","0032-02-04","fss","sfsd@gmail.com","dsfds","1233","Male");
INSERT INTO fire VALUES("10","erwr","werwe","sdfs","0032-02-04","fss","sfsd@gmail.com","dsfds","1233","Male");
INSERT INTO fire VALUES("11","fd","dfgfd","sdfsf","0001-12-22","dsfsfs","jk@gmail.com","cxvxc","12313","Male");
INSERT INTO fire VALUES("12","sdsfds","sdfs","asdadad","1231-03-31","czxcx","zc@gmail.com","cxx","121","Male");
INSERT INTO fire VALUES("14","sfsdf","sdfsdfsd","krnya","2018-08-17","dxvfdvd","dfd@vxdfvdfxv","sdfsf","32435","Male");


DROP TABLE IF EXISTS hotline;

CREATE TABLE `hotline` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hotline_number` varchar(30) NOT NULL,
  `hotline_category` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO hotline VALUES("4","34345","dgdgh","dghd","2018-02-02","korir400@gmail.com","cbcv3424");
INSERT INTO hotline VALUES("5","983687563","fdgd","sdfds","2018-05-07","korir400@gmail.com","fddvd");
INSERT INTO hotline VALUES("6","3242","24234","dfsfd","0032-02-13","kl@gmail.com","dsfsdf");
INSERT INTO hotline VALUES("8","6456456","46456","fgbhgfnhg","2018-08-15","345345@gmail.com","sdfsf");


DROP TABLE IF EXISTS mails;

CREATE TABLE `mails` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `recipient` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `cc` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO mails VALUES("1","Obadiah","Joseph","Pwani","Attachment","","2018-05-02 00:00:00");
INSERT INTO mails VALUES("2","admin@gmail.com","sdfvd","vgdsfvd","dfgdfg","","2018-08-14 22:21:39");
INSERT INTO mails VALUES("3","admin@gmail.com","Pwani ","University","Project","","2018-08-14 22:22:27");
INSERT INTO mails VALUES("4","admin@gmail.com","sdfsfs","sdfs","sdfdsf","","2018-08-14 22:32:33");


DROP TABLE IF EXISTS notice;

CREATE TABLE `notice` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS police;

CREATE TABLE `police` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `second_name` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO police VALUES("12"," ncx vnx"," xnvbcxm","ncxbvnb","xcvbcx,nv","2346","2018-05-26","246","Male","cxbnvncx","xnvnxncx","korir400@gmail.com");
INSERT INTO police VALUES("5","sdfds","sdf","sdf","sfs","3244","2018-04-19","0","","","","");
INSERT INTO police VALUES("6","dfg","dfgd","dfgfd","dfg","433","2018-04-19","34543","","","","");
INSERT INTO police VALUES("7","efrw","re","ert","rte","32","2018-04-19","34","Male","","","");
INSERT INTO police VALUES("8","df","sfs","dsdf","sdf","43","2018-04-19","432","Male","","","");
INSERT INTO police VALUES("9","ertet","erte","ert","ertge","43","2018-04-19","34","Male","dfg","","");
INSERT INTO police VALUES("10"," fdg","dfg","dfg","fgd","43","2018-04-19","2","Male","dfd","dfg","");
INSERT INTO police VALUES("11","sd","dss","sd","ds","32","2018-04-19","213","Male","dfdsds","dfdsf","gh@gmail.com");
INSERT INTO police VALUES("13","tfghtfhg","fthgtfhb","fthtgf","thgtfr","46654","2018-08-17","3546546","Male","fghfgh","bfghgf","345345@gmail.com");


DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `last_logindatetime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","admin","admin","admin","active","2018-04-18");
INSERT INTO users VALUES("3","obadiah","kipsang","admin","active","2018-04-18");
INSERT INTO users VALUES("5","sfs","sdfsd","sfsdf","sdfdsf","2018-05-07");
INSERT INTO users VALUES("6","sjdbkhgef","wehfkjwehrh","wirlhleryh","wlehlrelht","2018-05-26");
INSERT INTO users VALUES("7","sbfvdsgf","afbdskjfh.","sdhkfhksdfh","vds,hfk.sdhf","2018-05-26");
INSERT INTO users VALUES("8","amadmasbv","asbdags","z,mbczxnb","asbdghs","2018-05-26");
INSERT INTO users VALUES("9","cfvdgdf","efsdfd","sfdsfds","sdfs","2018-08-17");


