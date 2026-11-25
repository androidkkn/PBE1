CREATE TABLE filmes (
    id SERIAL PRIMARY KEY,
    titulo TEXT NOT NULL,
    genero TEXT NOT NULL,
    ano INTEGER NOT NULL,
    avaliacao NUMERIC(3,1),
    descricao TEXT
);
