import turtle as tartaruga
leonardo = tartaruga.Turtle()
rafael = tartaruga.Turtle()
donatelo = tartaruga.Turtle()
michelangelo = tartaruga.Turtle()

leonardo.shape("turtle")
rafael.shape("turtle")
donatelo.shape("turtle")
michelangelo.shape("turtle")

leonardo.color("yellow")
rafael.color("red")
donatelo.color("blue")
michelangelo.color("orange")
#leonardo.penup()
#leonardo.pendown()
leonardo.pensize(5)
leonardo.speed(1)

rafael.pensize(9)
rafael.speed(2)

donatelo.pensize(20)
donatelo.speed(10)

michelangelo.pensize(4)
michelangelo.speed(4)


leonardo.circle(50)
rafael.circle(25)
donatelo.circle(60)
michelangelo.circle(15)

class Ataque:
 pass

ataque1 = Ataque()

