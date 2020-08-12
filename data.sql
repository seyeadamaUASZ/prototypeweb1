
create database if not exists prototype;

create TABLE users(id INT NOT NULL,nom VARCHAR(50),prenom VARCHAR(100),profil VARCHAR(50),actif VARCHAR(50),constraint pku PRIMARY KEY(id));

create table secteur(id INT NOT NULL,nomsecteur VARCHAR(100),constraint pks PRIMARY KEY(id));

create TABLE institutions(id INT NOT NULL,code VARCHAR(30),nom VARCHAR(100),paysIns VARCHAR(100),adresse VARCHAR(100),zonei VARCHAR(100),idsecteur int, constraint pkkk PRIMARY KEY(id),constraint fkii FOREIGN KEY(idsecteur) REFERENCES secteur(id) ON DELETE CASCADE ON UPDATE CASCADE);

create TABLE expertise(id INT NOT NULL,nomconseil VARCHAR(100),paysconseil VARCHAR(100),adresse VARCHAR(100),nomcontact VARCHAR(50),prenomcontact VARCHAR(100),constraint pll PRIMARY KEY(id));

create TABLE pays(id INT NOT NULL,nompays VARCHAR(100),constraint pkpays PRIMARY KEY(id));

create TABLE region(id INT NOT NULL,nomregion VARCHAR(100),idpays int,constraint pkr PRIMARY KEY(id),constraint fkk FOREIGN KEY(idpays) REFERENCES pays(idpays)  ON DELETE cascade ON UPDATE cascade);

create table departement(id INT NOT NULL, nomdepartement VARCHAR(100),idregion int not NULL,constraint pkdd PRIMARY KEY(id),constraint fkkk FOREIGN KEY(idregion) REFERENCES region(id)  ON DELETE cascade ON UPDATE CASCADE);


create TABLE commune(id INT NOT NULL,nomcommune VARCHAR(100), iddep INT, CONSTRAINT pkkc PRIMARY KEY(id),constraint fkkcc FOREIGN KEY(iddep) REFERENCES departement(id) ON DELETE CASCADE ON UPDATE CASCADE);

create table demande(id INT NOT NULL, beneficiaire VARCHAR(100),typerequerant VARCHAR(50),paysrequerant VARCHAR(100),regionrequerant varchar(100),
departementrequerant VARCHAR(100),communerequerant VARCHAR(100),localiterequerant VARCHAR(100),telephonerequerant VARCHAR(100),
emailrequerant VARCHAR(50),nomsecteur VARCHAR(100), statut VARCHAR(50), activite varchar(50),paysactivite VARCHAR(50),
regionactivite VARCHAR(50),departementactivite VARCHAR(50),communeactivite VARCHAR(50),localiteactivite varchar(50),typefinancement VARCHAR(50),
datenaiss DATE, typeentite VARCHAR(50),typebesoin VARCHAR(50),fourchettemontant VARCHAR(50),prbesoin VARCHAR(100),
question1 VARCHAR(10),question2 VARCHAR(10), fourchetteRe VARCHAR(50), question3 VARCHAR(10),fourchetteRea VARCHAR(50), question4 VARCHAR(10),question5 VARCHAR(10),
datecreation DATE,typeformejuridique VARCHAR(50),reponse1 VARCHAR(100),reponse2 VARCHAR(100),reponse3 VARCHAR(100),
reponse4 VARCHAR(100),reponse5 VARCHAR(100),reponse6 VARCHAR(100),questionlocaux VARCHAR(10),questionregionaux VARCHAR(10),questioninternationaux VARCHAR(10),
reponse7 VARCHAR(100),reponse8 VARCHAR(100),reponse9 VARCHAR(100), 
questionfourlocaux VARCHAR(10),questionfourregionaux VARCHAR(10),questionfourinternationaux VARCHAR(10),
nombrepresonne VARCHAR(10),typebesoinprofess VARCHAR(50), montantbesoin VARCHAR(50),
prkbesoin VARCHAR(100), questioninstitutOui VARCHAR(10),questioninstitutNon VARCHAR(10),
reponseinstitut1 VARCHAR(50),reponseinstitut2 VARCHAR(50),reponseinstitut3 VARCHAR(50),
chriffredaffaire VARCHAR(50), institut1 varchar(50),institut2 varchar(50),institut3 varchar(50),
idrequerant int not NOT NULL, 
constraint pkddde PRIMARY KEY(id),constraint fkde foreign KEY(idrequerant) REFERENCES users(id) on delete cascade on update cascade);

