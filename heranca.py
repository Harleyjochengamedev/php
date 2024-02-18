class persona:
    sentimento =True
    def __init__(self,historia,motivacoes,experiencia,endereco) -> None:
         self.historia = historia
         self.motivacoes = motivacoes
         self.experiencia = experiencia
         self.endereco = endereco
    def __str__(self) -> str:
         _str = "status-> historia: {} motivacoes: {} experiencia: {} endereco{}".format(self.historia, self.motivacoes,self.experiencia,self.endereco)
         return  _str
    

class professor(persona):
     def __init__(self, historia, motivacoes, experiencia, endereco) -> None:
          super().__init__(historia, motivacoes, experiencia, endereco)
          self.disciplina = disciplina

class aluno(persona):
     def __init__(self, historia, motivacoes, experiencia, endereco,serie) -> None:
          super().__init__(historia, motivacoes, experiencia, endereco)
          self.serie = serie 
     def __str__(str)-> str:
        return super().__str__()

harley =aluno("meu melhor aluno","ser rico","jogos","avenida esdras de queiroz,28",2)
print(harley.motivacoes)
relatorio = harley.__str__()
print(relatorio)