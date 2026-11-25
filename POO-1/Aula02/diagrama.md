# Diagrama herança
```mermaid
classDiagram
Cliente <|-- ClientePF
Cliente <|-- ClientePJ

class Cliente{
    # nome
    # email

    + getDados()
}

class ClientePF{
    - cpf

    + getDados()
}

class ClientePJ{
    - cnpj

    + getDados()
}