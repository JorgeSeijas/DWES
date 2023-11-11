def suma (a, b):
    return print(a + b)

def resta (a, b):
    return print(a - b)

def multiplicar (a, b):
    return print(a * b)

def dividir (a, b):
    if b == 0:
        return print("Division por 0")
    else:
        return print(a / b)

a = 4
b = 0
c = 2

suma(a, c)
resta(a, c)
multiplicar(a, c)
dividir(a, b)
dividir(a, c)

    