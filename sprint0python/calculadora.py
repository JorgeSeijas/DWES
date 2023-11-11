from operaciones import suma, resta, multiplicar, dividir

salida = "no"
while salida == "no":
    try:
        num1 = int(input("Inserte el primer número: "))
        num2 = int(input("Inserte el segundo número: "))
    except ValueError:
        print("Inserte numeros validos")
    else: 
        salida = "si"

salida = "no"
op = 5
while (op > 4) | (op < 1):
    try:
        op = int(input("""Elige una operacion:
            1.- Suma
            2.- Resta
            3.- Multiplicación
            4.- División\n"""))
    except ValueError:
        print("Inserte opciones validas")
print("\n")
if op == 1:
    suma(num1, num2)
elif op == 2:
    resta(num1, num2)
elif op == 3:
    multiplicar(num1, num2)
else:
    dividir(num1, num2)


