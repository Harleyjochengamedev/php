class time_serieA:
    def __init__(self,vitorias,empates,derrotas):
        self.vitorias = vitorias
        self.empates = empates
        self.derrotas = derrotas

    def total_jogos(self) -> None:
        print(self.derrotas+ self.empates+self.vitorias)

    def pontos(self) -> None:
        pontos = self.empates + 3*self.vitorias
        print(pontos)


ferrin = time_serieA(23,6,9)

ferrin.total_jogos()

ferrin.pontos()