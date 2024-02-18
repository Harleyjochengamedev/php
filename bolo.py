class bolo:
    def __init__(self,quantidade_farinha,quantidade_fermento,quantidade_ovos,quantidade_acucar):
        self.qtd_farinha = quantidade_farinha
        self.qtd_fermento = quantidade_fermento
        self.qtd_ovos = quantidade_ovos
        self.qtd_acucar = quantidade_acucar
    def fazer(self)-> None:
        print("fazendo o bolo")
        print("adiconando ingredientes")
        print("misturando")
        print("esquentando")
        print("2 milhoes de anos depois.....")
        print("feito o bolo")
        print("--------------------------------")
        print("--------------------------------")
        print("--------------------------------")
        print("--------------------------------")
        print("--------------------------------")
        print("--------------------------------")
        print("--------------------------------")


class bolo_milho:
    def __init__(self) -> None:
        pass
bolo_joana = bolo(250,5,4,80)
bolo_bebel = bolo_milho()
print(type(bolo_joana))
print(type(bolo_bebel))
print(bolo_joana.qtd_farinha)
print(bolo_joana.fazer())
