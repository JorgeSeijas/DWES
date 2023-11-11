import random

def pedir_jugada(): #Función que controla la introducción de datos
    ok = "no"   #Variable de control de salida
    while ok == "no":
        jugada = input("Escoge piedra, papel o tijera\n")
        if (jugada == "piedra") | (jugada == "papel") | (jugada == "tijera"):
            ok = "si"   #Si es válida se puede salir
    return jugada

def jugadaAleatoria():  #Funcion para generar la ugada aleatoria de la máquina
    posibles = ["piedra", "papel", "tijera"]
    aleatorio = random.choice(posibles)
    return aleatorio

def duelo (j_usuario):
    res = int(0)
    j_maquina = jugadaAleatoria()    #Asignación de jugada aleatoria a la máquina
    print("\n"+ j_usuario + " vs " +j_maquina +"\n")
    if j_maquina == "piedra":   #IF anidados para comprobar los resultados
        if j_usuario == "piedra":
            print("Empate, no cuenta la jugada\n\n")
        elif j_usuario == "papel":
            print("Gana el usuario\n\n")
            res = 1
        else:
            print("Gana la máquina\n\n")
            res = 2
    elif j_maquina == "papel":
        if j_usuario == "piedra":
            print("Gana la máquina\n\n")
            res = 2
        elif j_usuario == "papel":
            print("Empate, no cuenta la jugada\n\n")  
        else:
            print("Gana el usuario\n\n")
            res = 1
    else:
        if j_usuario == "piedra":
            print("Gana el usuario\n\n")
            res = 1
        elif j_usuario == "papel":
            print("Gana la máquina\n\n")
            res = 2
        else:
            print("Empate, no cuenta la jugada\n\n")
    
    return res

if __name__ == "__main__":
    cont = int(0)
    punt_jugador = int(0)
    punt_maquina = int(0)
    while (cont < 5):
        jugada = pedir_jugada()
        resultado = duelo(jugada)
        if resultado == 1:
            punt_jugador = punt_jugador + 1
            cont = cont + 1
        elif resultado == 2:
            punt_maquina = punt_maquina + 1
            cont = cont + 1

    print("\n\nFIN DE LA PARTIDA")
    print("Tu puntuación: " + str(punt_jugador))
    print("Su puntuación: " + str(punt_maquina))