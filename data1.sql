create DATABASE if not exists netfindb;
create TABLE users(id INT NOT NULL AUTO_INCREMENT ,nom VARCHAR(50),prenom VARCHAR(100),profil VARCHAR(50),actif VARCHAR(50),constraint pku PRIMARY KEY(id));

create table tp_pays(pays_id int not null AUTO_INCREMENT,pays_nomFr varchar(50),pays_nomEn varchar(50),pays_nomPr varchar(50),constraint pkp primary key(pays_id));
create table tp_region(reg_id int not null AUTO_INCREMENT,reg_nom varchar(50),reg_pays int not null, constraint pkreg primary key(reg_id), constraint fkreg foreign key(reg_pays)  REFERENCES tp_pays(pays_id) on delete cascade on update cascade);
create table tp_secteurActivite(sec_id int not null AUTO_INCREMENT,secteuractivite varchar(50), constraint pksec primary key(sec_id));
create table tp_profilclient(pcp_id int not null AUTO_INCREMENT,pcp_profilclientprospect varchar(50),constraint pkpcp primary key(pcp_id));
create table tp_produitservices(pes_id int not null AUTO_INCREMENT,pes_produit varchar(50),constraint pkpes primary key(pes_id));
create table tp_montantbesoin(mnt_id int not null AUTO_INCREMENT, mnt_minimum int, mnt_maximum int,constraint pkpmontant primary key(mnt_id));
create table tp_fourchettefinancement(frf_id int not null AUTO_INCREMENT,frf_minimum int,frf_maximum int, constraint pkff primary key(frf_id));
create table tp_typeinstitution(tyi_id int not null AUTO_INCREMENT,tyi_typeinstitution varchar(100),constraint pktypei primary key(tyi_id));
create table tp_institution(ins_id int not null AUTO_INCREMENT,ins_nominstitution varchar(100),typeins int not null,ins_pays int not null,ins_region int not null,ins_adresse varchar(150),ins_siteweb varchar(50),ins_nompersonneressource varchar(100),ins_emailpersonneressource varchar(100),ins_telephonepersonneressource varchar(100),
CONSTRAINT pkinss primary key(ins_id),CONSTRAINT fkinnns FOREIGN key(typeins) REFERENCES tp_typeinstitution(tyi_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkrrr FOREIGN key(ins_pays) REFERENCES tp_pays(pays_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkrrrr FOREIGN key(ins_region) REFERENCES tp_region(reg_id) ON DELETE CASCADE on UPDATE CASCADE
);

create table categorie_expert(id int not null, nomcategorie varchar(50), constraint pkcateex primary key(id));

create TABLE experts(id INT NOT NULL AUTO_INCREMENT,nomconseil VARCHAR(100),paysconseil int, categorieexpert int, adresse VARCHAR(100),nomcontact VARCHAR(50),prenomcontact VARCHAR(100),constraint pll PRIMARY KEY(id),
constraint fkexp FOREIGN key(paysconseil) references tp_pays(pays_id) on delete CASCADE on update CASCADE,constraint fkedd foreign key(categorieexpert) REFERENCES categorie_expert(id) on delete cascade on update cascade);


create table tp_offre(off_id int not null AUTO_INCREMENT,off_institution int not null,off_secteurActivite int not null,off_secteurproduitsetservice int not null,off_profilclientprospect int not null,off_fourchettefinancement int not null,
CONSTRAINT pkoffre PRIMARY KEY(off_id),
CONSTRAINT fkoffre FOREIGN key(off_institution) REFERENCES tp_institution(ins_id) on DELETE CASCADE on UPDATE CASCADE,
constraint fkoffre1 FOREIGN key(off_secteurActivite) REFERENCES tp_secteurActivite(sec_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkoffre2 FOREIGN key(off_profilclientprospect) references tp_profilclient(pcp_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkoffre3 FOREIGN key(off_secteurproduitsetservice) REFERENCES tp_produitservices(pes_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkoffre4 FOREIGN key(off_fourchettefinancement) REFERENCES tp_fourchettefinancement(frf_id) on DELETE CASCADE on UPDATE CASCADE
);


create table demande(id INT NOT NULL AUTO_INCREMENT, beneficiaire VARCHAR(100),typerequerant VARCHAR(50),pays_req int not null ,reg_requerant int not null,
departementrequerant VARCHAR(100),communerequerant VARCHAR(100),localiterequerant VARCHAR(100),telephonerequerant VARCHAR(100),
emailrequerant VARCHAR(50),id_secteur int not null, statut VARCHAR(50), activite varchar(50),paysactivite int not null,
regionactivite int not null,departementactivite VARCHAR(50),communeactivite VARCHAR(50),localiteactivite varchar(50),typefinancement VARCHAR(50),
datenaiss DATE, profilrequerant int,typeproduitservice int,fourchettemontant int,prbesoin VARCHAR(100),
question1 VARCHAR(10),question2 VARCHAR(10), fourchetteRe VARCHAR(50), question3 VARCHAR(10),fourchetteRea VARCHAR(50), question4 VARCHAR(10),question5 VARCHAR(10),
datecreation DATE,typeformejuridique VARCHAR(50),reponse1 VARCHAR(100),reponse2 VARCHAR(100),reponse3 VARCHAR(100),
reponse4 VARCHAR(100),reponse5 VARCHAR(100),reponse6 VARCHAR(100),questionlocaux VARCHAR(10),questionregionaux VARCHAR(10),questioninternationaux VARCHAR(10),
reponse7 VARCHAR(100),reponse8 VARCHAR(100),reponse9 VARCHAR(100), 
questionfourlocaux VARCHAR(10),questionfourregionaux VARCHAR(10),questionfourinternationaux VARCHAR(10),
nombrepresonne VARCHAR(10),typebesoinprofess int , montantbesoin int,
prkbesoin VARCHAR(100), questioninstitutOui VARCHAR(10),questioninstitutNon VARCHAR(10),
reponseinstitut1 VARCHAR(50),reponseinstitut2 VARCHAR(50),reponseinstitut3 VARCHAR(50),
chriffredaffaire VARCHAR(50), institut1 int,institut2 int,institut3 int,
idrequerant int not NULL, 
constraint pkddde PRIMARY KEY(id),constraint fkde foreign KEY(idrequerant) REFERENCES users(id) on delete cascade on update cascade,
CONSTRAINT fkdee1 FOREIGN key(pays_req) REFERENCES tp_pays(pays_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkdeee FOREIGN key(reg_requerant) REFERENCES tp_region(reg_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkreed FOREIGN key(id_secteur) REFERENCES tp_secteurActivite(sec_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkdfkg FOREIGN KEY(paysactivite) REFERENCES tp_pays(pays_id) on DELETE cascade on UPDATE CASCADE,
CONSTRAINT fkregg FOREIGN key(regionactivite) REFERENCES tp_region(reg_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkprf FOREIGN key(profilrequerant) REFERENCES tp_profilclient(pcp_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fjkfk FOREIGN key(typeproduitservice) REFERENCES tp_produitservices(pes_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fklell FOREIGN KEY(fourchettemontant) REFERENCES tp_fourchettefinancement(frf_id) on DELETE CASCADE on update CASCADE,
CONSTRAINT fkrlto FOREIGN key(institut1) REFERENCES tp_institution(ins_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT fkgkkgkk FOREIGN key(institut2) REFERENCES tp_institution(ins_id) on DELETE CASCADE on update CASCADE,
CONSTRAINT fkekkgkkfk FOREIGN key(institut3) REFERENCES tp_institution(ins_id) on DELETE cascade on UPDATE CASCADE,
CONSTRAINT fktjjjr FOREIGN key(typebesoinprofess) REFERENCES tp_produitservices(pes_id) on DELETE CASCADE on UPDATE CASCADE,
CONSTRAINT flttpg FOREIGN key(montantbesoin) REFERENCES tp_montantbesoin(mnt_id) on DELETE CASCADE on UPDATE CASCADE

);


insert INTO tp_pays(pays_id,pays_nomFr,pays_nomEn,pays_nomPr) VALUES(1,"SENEGAL","SENEGAL","SENEGAL");
insert INTO tp_pays(pays_id,pays_nomFr,pays_nomEn,pays_nomPr) VALUES(2,"MALI","MALI","MALI");
insert INTO tp_pays(pays_id,pays_nomFr,pays_nomEn,pays_nomPr) VALUES(3,"NIGER","NIGER","NIGER");
insert INTO tp_pays(pays_id,pays_nomFr,pays_nomEn,pays_nomPr) VALUES(4,"GUINEE BISSAU","GUINEE BISSAU","GUINEE BISSAU");


INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(1,"Dakar",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(2,"Kaolack",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(3,"Ziguinchor",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(4,"Tambacounda",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(5,"Louga",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(6,"Thies",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(7,"Matam",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(8,"Sedhiou",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(9,"Kédougou",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(10,"Kaffrine",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(11,"Diourbel",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(12,"Kolda",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(13,"Fatick",1);
INSERT INTO tp_region(reg_id,reg_nom,reg_pays) VALUES(14,"Saint Louis",1);

insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(1,"Pêche maritime");
insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(2,"Elevage des bovins");
insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(3,"Aviculture");
insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(4,"Service TIC");
insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(5,"Transport");
insert into tp_secteurActivite(sec_id,secteuractivite) VALUES(6,"Mines");

insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(1,"Personne");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(2,"Association");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(3,"Groupement");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(4,"Organisation non gouvernementale");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(5,"Entreprise individuelle");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(6,"Société à responsabilité limitée");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(7,"Sociéte anonyme");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(8,"Société en nom collectif");
insert into tp_profilclient(pcp_id,pcp_profilclientprospect) values(9,"Autre(precisez)");

insert into tp_produitservices(pes_id,pes_produit) VALUES(1,"credit bails");
insert into tp_produitservices(pes_id,pes_produit) VALUES(2,"credit consommation");
insert into tp_produitservices(pes_id,pes_produit) VALUES(3,"credit immobilier");
insert into tp_produitservices(pes_id,pes_produit) VALUES(4,"Epargne");
insert into tp_produitservices(pes_id,pes_produit) VALUES(5,"Garantie");
insert into tp_produitservices(pes_id,pes_produit) VALUES(6,"Location longue durée");
insert into tp_produitservices(pes_id,pes_produit) VALUES(7,"Ouverture compte");
insert into tp_produitservices(pes_id,pes_produit) VALUES(8,"Placement");
insert into tp_produitservices(pes_id,pes_produit) VALUES(9,"Autre(precisez)");

insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(1,0,20);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(2,20,50);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(3,50,200);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(4,500,1000);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(5,1000,5000);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(6,5000,10000);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(7,10000,20000);
insert into tp_montantbesoin(mnt_id,mnt_minimum,mnt_maximum) VALUES(8,20000, 00000000);

insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(1,0,50);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(2,50,200);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(3,200,500);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(4,500,1000);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(5,1000,5000);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(6,5000,10000);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(7,10000,20000);
insert into tp_fourchettefinancement(frf_id,frf_minimum,frf_maximum) VALUES(8,20000,00000000);

insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(1,"Banque agricole");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(2,"Banque commerciale");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(3,"Banque de l'habitat");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(4,"Banque investissement");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(5,"Banque de développement");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(6,"Etablissement financier");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(7,"Fonds d'investissement");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(8,"Fonds/sociétés de garantie");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(9,"Institution de financement");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(10,"Scoiété de microfinance");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(11,"Société de mésofinance");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(12,"Société de gestion et intermediation");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(13,"Société de patrimoine");
insert into tp_typeinstitution(tyi_id,tyi_typeinstitution) VALUES(14,"Organisme de placements");





