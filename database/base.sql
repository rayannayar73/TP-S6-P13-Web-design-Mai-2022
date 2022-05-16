create database iceberg;
use iceberg;

create table blog(
    id int not null primary key auto_increment,
    titre varchar(100),
    description text,
    lieu varchar(50),
    dateIncident datetime default now(),
    altImage varchar(255),
    urlImage varchar(100),
    dateAjout datetime default now()
);
insert into blog (titre, description,lieu, dateIncident, altImage, urlImage) values
("Fonte de glacier","Des icebergs commencent à fondre","Antarctique",now(),"Des icebergs commencent à fondre","images/incidents/"),
("Ours polaires en detresse","Des ours ne trouvent plus d'abris","Antarctique",now(),"Des ours sur des partiels d'iceberg","images/incidents/"),
("pingouins polaires en detresse","Des pingouins ne trouvent plus d'abris","Antarctique",now(),"Des pingouins sur des partiels d'iceberg","images/incidents/");

create table admin(
    id int not null primary key auto_increment,
    nom varchar(100),
    mail varchar(50),
    mdp varchar(250)
);
insert into admin (nom,mail,mdp) values("Ravelojaona Yves Rayan","admin@gmail.com",sha1("admin"));
