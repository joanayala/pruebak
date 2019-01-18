#Coins
#Programa para imprimir el cambio en monedas determinadas
#Monedas de cambio: $100, $50, $25, $10, $5, $1

#Función para imprimir las monedas de acuerdo al total obtenido
#       de cada denominación de moneda.
def print_coins(x,y) :
    i = 1
    while i <= x :
        print (y)
        i=i+1

#Función para hacer la comparativa del patrón y obtener el total
#        de monedas de cada denominación.
def comparar_patron (cambio):
#   monedas_cambio = [100,50,25,10,5,1]
    if cambio >= 100:
        m100 = int(cambio / 100)
        cambio = cambio % 100
        print_coins(m100, 100)
    if cambio >= 50 and cambio < 100:
        m50 = int(cambio / 50)
        cambio = cambio % 50
        print_coins(m50, 50)
    if cambio >= 25 and cambio < 50:
        m25 = int(cambio / 25)
        cambio = cambio % 25
        print_coins(m25, 25)
    if cambio >= 10 and cambio < 25:
        m10 = int(cambio / 10)
        cambio = cambio % 10
        print_coins(m10, 10)
    if cambio >= 5 and cambio < 10:
        m5 = int(cambio / 5)
        cambio = cambio % 5
        print_coins(m5, 5)
    if cambio >= 1 and cambio < 5 :
        m1 = int(cambio / 1)
        cambio = cambio % 1
        print_coins(m1, 1)

#1. Comparar si la moneda es exacta a las monedas existentes
#   monedas_cambio = [100,50,25,10,5,1]
#   for coin in monedas_cambio:
#        if z == coin:
#            print (coin) 
            
##############################################################           
#valor_art = int(input("Ingrese el valor del articulo $"))
#valor_pago = int(input("Ingrese el valor de pago $"))

cambio = int(input("Ingrese el valor del cambio: $"))
comparar_patron(cambio)







