import random    

if __name__ == "__main__":
    puntuacion = 0 # Variable para almacenar la puntuación

    adivinanza_1 = {
        'enunciado': "No muerde ni ladra, pero tiene dientes y la casa guarda. ¿Qué es?",
        'opciones': "a. Puerta\nb. Ventana\nc. Llave",
        'correcta': "c"
    }
    adivinanza_2 = {
        'enunciado': "Pico de cuerno, ala de ave, la rodilla para atrás, y anda adelante.",
        'opciones': "a. Gallina\nb. Avestruz\nc. Pingüino",
        'correcta': "a"
    }
    adivinanza_3 = {
        'enunciado': "Nieto de tu bisabuelo, padre de tus hermanos, de tus primos es el tío y de tus tíos hermano.",
        'opciones': "a. Abuelo\nb. Padre\nc. Tio",
        'correcta': "b"
    }
    adivinanzas = [adivinanza_1, adivinanza_2, adivinanza_3]    #Lista de posibles adivinanzas
    usada = []      #Lista para descartar las adivinanzas usadas
    elegida = {}    #Adivinanza elegida
    vuelta = 0      #Variable de control
    for i in range(2) :   
        elegida = random.choice(adivinanzas)    #eleccion de adivinanza
        usada.append(elegida['enunciado'])
        while (elegida['enunciado'] == usada[0]) & (vuelta == 1):   #Comprobación para no ser repetida, solo se activa en la 2º vuelta
            usada = []
            elegida = {}
            elegida = random.choice(adivinanzas)
            usada.append(elegida)
        vuelta = 1
        print(elegida['enunciado'])     #Presentación
        print(elegida['opciones'])
        res=input("Escribe la opción correcta.")
        while (res!="a") & (res != "b") & (res != "c"): # Bucle para comprobar que lo que introduzca el usuario es una opción válida
            res = input ("Opciones válidas (a, b, c)") 
        if (res != elegida['correcta']):
            print("Casi lo tienes...\n\n")
            puntuacion = puntuacion - 5
        else:
            print("Correcto!!!\n\n")
        puntuacion = puntuacion + 10

    print("\nPuntuación total: "+ str(puntuacion))