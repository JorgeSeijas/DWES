puntuacion = 0 # Variable para almacenar la puntuación
print("""No muerde ni ladra, pero tiene dientes y la casa guarda. ¿Qué es?
    a. Puerta
    b. Ventana
    c. Llave
""")
respuesta=input("Escribe la opción correcta.")
while (respuesta!="a") & (respuesta != "b") & (respuesta != "c"): # Bucle para comprobar que lo que introduzca el usuario es una opción válida
    respuesta = input ("Opciones válidas (a, b, c)") 
if respuesta != "c":    # Respuesta incorrecta --> -5 puntos 
    print("Casi lo tienes...")
    puntuacion = puntuacion - 5
else:
    print("Correcto!!!") # Respuesta correcta --> +10 puntos 
    puntuacion = puntuacion + 10

print("""\nPico de cuerno, ala de ave, la rodilla para atrás, y anda adelante. 
    a. Gallina
    b. Avestruz
    c. Pingüino
""")
respuesta=input("Escribe la opción correcta.")
while (respuesta!="a") & (respuesta != "b") & (respuesta != "c"):
    respuesta = input ("Opciones válidas (a, b, c)") 
if respuesta != "a":
    print("Casi lo tienes...")
    puntuacion = puntuacion - 5
else:
    print("Correcto!!!")
    puntuacion = puntuacion + 10

print("""\nNieto de tu bisabuelo, padre de tus hermanos, de tus primos es el tío y de tus tíos hermano.
    a. Abuelo
    b. Padre
    c. Tio
""")
respuesta=input("Escribe la opción correcta.")
while (respuesta!="a") & (respuesta != "b") & (respuesta != "c"):
    respuesta = input ("Opciones válidas (a, b, c)") 
if respuesta != "b":
    print("Casi lo tienes...")
    puntuacion = puntuacion - 5
else:
    print("Correcto!!!")
    puntuacion = puntuacion + 10

print("\nPuntuación total: "+ str(puntuacion))