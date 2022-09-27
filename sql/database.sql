SET search_path TO public;

create table type (
   id serial primary key,
   type text not null
);

create table pokemon (
   id serial primary key,
   name text not null,
   hp integer,
   attack integer,
   defense integer,
   speed integer,
   special integer
);

create table pokemon_type (
   pokemon_id integer not null,
   type_id integer not null,
   foreign key(pokemon_id) references pokemon(id),
   foreign key(type_id) references type(id)
);