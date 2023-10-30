puntuacion = 0
print("""No muerde ni ladra, pero tiene dientes y la casa guarda. ¿Qué es?
    a. Puerta
    b. Ventana
    c. Llave
""")
respuesta=input("Escribe la opción correcta.")
if respuesta != "c":
    print("Casi lo tienes...")
    puntuacion = puntuacion - 5
    respuesta=input("Escribe la opción correcta.")
print("Correcto!!!\n")

print("""Pico de cuerno, ala de ave, la rodilla para atrás, y anda adelante.
    a. Gallina
    b. Avestruz
    c. Pingüino
""")