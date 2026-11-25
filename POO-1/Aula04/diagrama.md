# Diagrama de classes Controle

```mermaid
classDiagram
ControleInterface <|-- Controle
class ControleInterface{
    <<interface>>
    %% Metodos
    + io()
    + aumentaV()
    + abarixaV()
    + maisCanal()
    + menosCanal()
    + menu()
}

class Controle{
    %%atributos
    - status
    - volume
    - canal
    - menu

    + io()
    + aumentaV()
    + abarixaV()
    + mudo()
    + maisCanal()
    + menosCanal()
    + menu()
}

```