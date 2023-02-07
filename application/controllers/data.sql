create database takalo;
use takalo;

create table User(
    idUser int NOT NULL auto_increment,
    nom VARCHAR(200),
    mail VARCHAR(100),
    password VARCHAR(100),
    type int,
    PRIMARY key (idUser)
);

create table Objet(
    idObjet int NOT NULL auto_increment,
    titre VARCHAR(200),
    photo VARCHAR(100),
    categorie VARCHAR(100),
    descris VARCHAR(300),
    idUser int,
    PRIMARY key (idObjet),
    FOREIGN key (idUser) references User(idUser)
);

create table Echange(
    idEchange int NOT NULL auto_increment,
    idUser1 int,
    idUser2 int,
    idObjet1 int,
    idObjet2 int,
    statu int,
    daty datetime,
    PRIMARY key (idEchange),
    FOREIGN key (idUser1) references User(idUser),
    FOREIGN key (idUser2) references User(idUser),
    FOREIGN key (idObjet1) references Objet(idObjet),
    FOREIGN key (idObjet2) references Objet(idObjet)
);