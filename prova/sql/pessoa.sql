CREATE TABLE pessoa (
  idPessoa int(11) NOT NULL auto_increment,
  nome varchar(130) NOT NULL,
  tipPessoa varchar(2) NOT NULL,
  usuario varchar(50) NOT NULL,
  senha varchar(32) NOT NULL,
  primary key (idPessoa)
);
