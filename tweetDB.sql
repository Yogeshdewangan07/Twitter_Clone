Create Database twitter;

Create Table users (
  user_id int(11) PRIMARY KEY AUTO_INCREMENT,
  unique_id varchar(255) NOT NULL,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  image varchar(255) NOT NULL
);

Create Table tweets (
  post_id int(11) PRIMARY KEY AUTO_INCREMENT,
  status varchar(255),
  image varchar(255),
  video varchar(255),
  unique_id varchar(255) NOT NULL,
  created_at timestamp DEFAULT CURRENT_TIMESTAMP
);
